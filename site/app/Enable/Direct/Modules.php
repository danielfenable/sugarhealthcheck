<?php

namespace App\Enable\Direct;

use App\Enable\Direct\Helpers\SystemMetadataChecker;

class Modules{

    public function __construct($system)
    {
        $this->system = $system;
    }

    public function getList()
    {

        $checker = new SystemMetadataChecker();
        $module_list = $checker->callList($this->system);
        return $module_list;

    }
}

?>