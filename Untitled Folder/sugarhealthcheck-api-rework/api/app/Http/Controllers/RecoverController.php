<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enable\Server\Recover;

class RecoverController extends Controller
{
    public function perform(Request $request)
    {
        $id = $request->id;
        $module = strtolower($request->module);
        $recover = new Recover($id , $module);
        $base = $recover->checkAndRecoverBase();
        if (!is_object($base)) {
            if ($base['Error']) {
                return $base['Error'];
            }
            return "Error, bean check failed.";
        }

        echo "Base record successfully restored - Preparing to restore related records ...<br><br> ";
        $relates = $recover->undeleteRelates($base, $module);
        return $relates;


    }
}
