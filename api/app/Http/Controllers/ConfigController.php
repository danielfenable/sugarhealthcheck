<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enable\Server\Helpers\ArrayFind;

use App\Enable\Server\FixPerms;

class ConfigController extends Controller
{
    public function keyList(Request $request)
    {
        if (!file_exists(SUGAR_BASE_DIR . '/config.php')) {
             return 'Could not find config.php';
        }
        require(SUGAR_BASE_DIR."/config.php");
        $stack = array();
        $keys = ArrayFind::isArraylist($sugar_config, $stack);
        return $keys;

    }

    public function uniqueKey(Request $request)
    {
        if (!file_exists(SUGAR_BASE_DIR . '/config.php')) {
             return 'Could not find config.php';
        }
        require(SUGAR_BASE_DIR."/config.php");
        return $sugar_config['unique_key'];

    }

    public function overrideList(Request $request)
    {
        if (!file_exists(SUGAR_BASE_DIR . "/config_override.php")) {
             return 'Could not find config_override.php';
        }
        $file = fopen(SUGAR_BASE_DIR . "/config_override.php", "r");
        while (!feof($file)) {
              echo fgets($file) . "<br />";
        }
    }

    public function perform(Request $request)
    {
        //TODO - if number change to type integer && option to delete backup

        // Perform fixperms on directory
        if (!$request->value) die('No array key and value sent in request.');
        $fixperms = FixPerms::perform();
        $type = $request->type;
        if ($type == 'edit') {
            if ($request->value == 'true') $request->value = true;
            if ($request->value == 'false') $request->value = false;

            $keys = array();
            if (!file_exists(SUGAR_BASE_DIR . "/config.php")) {
                 return 'Could not find config.php';
            }
            $sugar_config = array();

            //Include main Config file

            include SUGAR_BASE_DIR.'/config.php';

            // Take a backup so we can ask for recovery later, if failed, bail out.

            if (!copy(
                SUGAR_BASE_DIR . "/config.php", SUGAR_BASE_DIR . "/config.php.old"
            )
            )   return "Config file backup failed, cancelled write";

            // Create array using keys chosen and passed in via
            // request post using pass by reference.

            $loc = &$sugar_config;
            if ($fixperms != 0) echo "<br> Fix Perms Execution Failed <br>";
            $keys = $request->keys;
            foreach ($keys as $key) {
                $loc = &$loc[$key];
            }
            $loc = $request->value;

            // Finally, write the new sugar_config array with the
            // new value included.

            if (file_put_contents(
                SUGAR_BASE_DIR . "/config.php", '<?php  $sugar_config =  ' . var_export(
                    $sugar_config, true
                ) . ';'
            )
            ) return "<br>Write Success.";
            return "<br>Failure on write.";
        }
        if ($type == 'add') {
            $output;
            $errors;
            $file_path = SUGAR_BASE_DIR . '/config_override.php';
            if (!copy(
                $file_path, SUGAR_BASE_DIR . "/config_override.php.old"
            )
            )return "config_override file backup failed, cancelled write";
            $value = $request->value;
            if(!file_put_contents(
                $file_path, "\n". $value, FILE_APPEND
            )
            ) return 'Failed to Write to system file config_override.php.';
            exec("php -l $file_path", $output, $errors);
            if ($errors != 0) {
                     unlink($file_path);
                     rename(SUGAR_BASE_DIR . '/config_override.php.old', SUGAR_BASE_DIR .'config_override.php');
                     die(
                         "<br><br>The syntax check for the config_override failed,
                         the back-up file has been used to restore it.<br>" . print_r($output)
                     );
            }
            unlink(SUGAR_BASE_DIR . '/config_override.php.old');
            return "<br> Config_override.php write success.";
        }


    }

}
