<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\CallList;

use App\Enable\Server\CallConfig;


class ConfigController extends Controller
{
    public function handler()
    {
        $list = new CallList();
        $list_result = json_decode($list->perform());
        $additional = '<br><br>Would you like to edit an existing
                       value in the main config.php file, or add a
                       value to the config_override file?<br><br>
                       <input type="radio" name="type" value=
                       "add"> Add <br> <input type="radio"
                       name="type" value= "edit"> Edit <br><br>';

        return \View::make('panel/generic/form')->with(
            array(
                'action' => 'configlist',
                'base' => $additional
                )
        );
    }

    public function configKeys(Request $request){

        $type = $request->type;
        $system = Session::get('system')->name;
        $config = new CallConfig();
        if ($type == 'add') {
             $result_override = $config->getOverrideKeys($system);
             if (!$result_override) return "Could not get override keys from this system";
             $convert_override = print_r((array) $result_override , true);
        }
        if ($type == "edit") {
             $result_config = $config->getConfigKeys($system);
             if (!$result_config) return "Could not get config keys from this system.";
             return \View::make('panel/list/list')->with(
                 array(
                     "list_value" => $result_config,
                     "action" => "configvalues",
                     "list_info" => "Remember, this option is to edit the MAIN config.php file. <br>",
                     "additional" => "<input type='hidden' name ='type' value='$type'>"
                 )
             );
        }
        if ($type == 'add') {
            return \View::make('panel/config/input')->with(
                array(
                     "additional" => "<input type='hidden' name ='type' value='$type'>",
                     "info" => 'Enter the value to add to the config_override file.
                                Requires PHP ARRAY format. eg. $sugar_config["default_time_format"] = "H.i";'
                                ."<br> Current keys set for the override file: <br><br> <pre>$convert_override </pre><br>",
                     "action" => "configvalues"
                )
            );
        }
    }

    public function values(Request $request)
    {
        $values = $request->values ? : null;
        $list_value = $request->list_value ? : null;
        $system = Session::get('system')->name;
        $type = $request->type;

        if ($type == 'edit') {
             return \View::make('panel/config/input')->with(
                 array(
                   "additional" => "<input type='hidden' name ='type' value='$type'>
                                    <input type='hidden' name ='keys' value ='$list_value'> ",
                   "info" => "Enter the value to add to the config file key : $list_value ,
                              remember, you are ONLY adding the value.",
                   "action" => "config"
                 )
             );
        }
        if ($type == 'add') {
            if(!$values) die("No value given.");
            $this->perform($request);

        }
    }

    public function perform(Request $request)
    {
        $system = Session::get('system')->name;
        $values = $request->values ? : null;
        $key = $request->keys ? : null;
        $type = $request->type;
        $data = array();
        $data["type"] = $type;
        $config = new CallConfig();

        if ($type == 'add') {
            $output;
            $errors;
            $username = Session::get('user')->username;
            $sess_id = Session::getId();
            $filename = 'override' . $sess_id;
            $base_path = base_path();
            $data['value'] = $values;
            $result_override = str_replace('<br />', "", $config->getOverrideKeys($system));
            if (!is_dir($base_path . '/'. 'temp/' . $username)) {

                   mkdir($base_path . '/'. 'temp/' . $username);
            }
            file_put_contents($base_path . '/'. "temp/" . $username . '/'. $filename, $result_override . $values, FILE_APPEND);

            $file_path = $base_path . '/'. "temp/" . $username . '/'. $filename;
            exec("php -l $file_path", $output, $errors);
            if ($errors != 0) {
                   unlink($file_path);
                   die(
                       "<br><br>The syntax check for the temp file failed,
                        nothing on the system has been changed, simply go back
                        and edit the line.<br>" . print_r($output)
                   );
            }
            unlink($file_path);
            echo "Syntax check succeeded for locally created file, writing to system file.";
            $result = $config->perform($system, $data);

        }
        if ($type == 'edit') {
            $value_ex = explode(' -> ', $key);
            $data['value'] = $values;
            $data['keys'] = $value_ex;
            $result = $config->perform($system, $data);
        }
        echo $result;
        return view::make("panel/output/output")->with("output", $result);

    }
}
