<?php

namespace App\Http\Requests\Sugar\Auth;
use Log;

class Datapush
{

    public function __construct($sugar) 
    {
        $this->sugar= $sugar;
    }

    public function checkForExisting($module, $fieldmap)
    {

        $data = $this->sugar->get('/'.$module, array('filter' => array($fieldmap)));
        if (count($data['records']) > 0) {
            return true;
        }
        return $data;
    }

    public function recordFilter($module, $fieldmap)
    {      
        $data = $this->sugar->get('/'.$module, array('filter' => array($fieldmap)));
        if (count($data['records']) > 0) {
            
            return $data;
        }
        $error = "No Records Found";
        return $error;
    }
    
    public function addRecord($module, $data)
    {
        $this->sugar->post('/'.$module, $data);
    }
}

