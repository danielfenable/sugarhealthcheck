<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\CallRecover;

use App\Enable\Server\CallList;

use Illuminate\Support\Facades\Input;

class RecoverController extends Controller
{

    public function recoverCount(Request $request)
    {
        $system = Session::get('system')->name;
        $recover = new CallRecover();
        $module_list = $recover->getModuleList($system);
        if (isset($module_list['error'])) {
          return $module_list['error'];
        }
        $blacklist = array(
                    "Home","Currencies","WebLogicHooks",
                    "ForecastManagerWorksheets","ForecastWorksheets",
                    "MergeRecords","Manufacturers","Subscriptions",
                    "Feeds","iFrames","TimePeriods","TaxRates",
                    "ContractTypes", "Schedulers", "CampaignLog",
                    "CampaignTrackers", "DocumentRevisions",
                    "Connectors", "Roles", "Notifications",
                    "Sync","WorkFlow","EAPM","Worksheet",
                    "Employees","Administration","Releases",
                    "iFrames","TimePeriods","TaxRates","ContractTypes",
                    "DocumentRevisions","Audit","EmbeddedFiles","KBContentTemplates",
                    "KBArticles","KBContents","Sugar_Favorites","Words","Library","Categories",
                    "Tags","Feedbacks","Styleguide","Shippers","OAuthTokens","OAuthKeys","PdfManager",
                    "SugarFavorites","Newsletters","FAQ","TrackerQueries","TrackerSessions",
                    "TrackerPerfs","Trackers","UpgradeWizard","SNIP","_hash","KBDocuments","TeamNotices","ACLRoles"
                    );
        foreach ($module_list as $key => $module) {
            foreach ($blacklist as $rem ) {
                if ($module == $rem) {
                     unset($module_list[$key]);
                }
            }
        }
        return view::make("panel/recover/count")->with(
            array
             (
              "system" => $system,
              "modules" => $module_list
             )
        );
    }

    public function recoverList(Request $request)
    {
        $date_range_1 = $request->date_range_1;
        $date_range_2 = $request->date_range_2;
        $module = $request->module;
        $system = $request->system;
        $token = csrf_token();

        if (!$date_range_1 || !$date_range_2 || !$system ) {
            die("Required data not given");
        }
        $recover = new CallRecover();
        $record_list = $recover->getRecordRange($date_range_1, $date_range_2, $system, $module);
        $html = "";
        $html .= "This tool will recover the base record as well as
                   all relationships where the related record is not deleted for the $module module
                   <table>
                   <tr>
                       <th> Name </th> <th> Date Created </th> <th> Date Modified </th>
                       <th> Created By </th>
                   </tr>";

        $html .= "<form action='recover' method='POST'>";
        foreach ($record_list as $record) {

            $name = (isset($record->name)) ? $record->name : $record->first_name . " " . $record->last_name;
            $date_created= $record->date_entered;
            $date_modified= $record->date_modified;
            if (isset($record->created_by)){
                  $created_by = $record->created_by;
            } else {
                $created_by = '';
            }

            $id = $record->id;
             $html .=
                        "<tr>" .
                               "<td>  " . $name . " </td>".
                               "<td>  " . $date_created .  "  </td>".
                               "<td>  " . $date_modified . "  </td>".
                               "<td>  " . $created_by."  </td>".
                               "<td>  " . "<center><input type='checkbox' name = 'id' value='$id' class='myCheckbox'> </center> </td>" .
                        "</tr>
                        </table";
        }

        $html .= "<br> <input type='hidden' name = '_token' value='$token'>";
        $html .= "<br> <input type='hidden' name = 'system' value='$system'>";
        $html .= "<br> <input type='hidden' name = 'module' value='$module'>";
        $html .= "<input type='submit' value='Submit'>";
        $html .= "</form>";
        return view::make("panel/recover/idList")->with(
            array(
                 "rows" => $html,
                 )
        );
    }

   public function perform(Request $request)
   {
        if (!$request->id) {
            die("So you want to recover records without selecting one?");
        }

            $recover = new CallRecover();
            $result = $recover->perform($request->system, $request->id, $request->module);

            $decoded =  html_entity_decode($result);
            return view::make("panel/output/output")->with(
            "output", $decoded
            );

   }
}
