<?php

namespace App\Enable\Server;

class Sugars{

        public function listSugars(){
                $root = '/var/www/html/';
                $root = rtrim($root, '/').'/';
                $sugar_list = array();
                foreach (new \DirectoryIterator($root) as $fileInfo) {
                    if($fileInfo->isDot()) continue;
                    if(!file_exists($fileInfo->getPathname()."/config.php")) continue;  
                    if($fileInfo->isDir()) { 
                            $dir = $fileInfo->getFilename();
                            array_push($sugar_list, $dir);
                        }
                }
                return $sugar_list;
        }
}


?>