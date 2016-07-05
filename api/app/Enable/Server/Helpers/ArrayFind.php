<?php

namespace App\Enable\Server\Helpers;

class ArrayFind
{

    public static function recursiveFind(array $array, $needle) {

        $iterator = new \RecursiveArrayIterator($array);
        $recursive = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::SELF_FIRST);
        $return = array();
        foreach ($recursive as $key => $value) {
            if ($key === $needle) {
                  $return[] = $value;
            }
        }
        if (isset($return)) {
            return $return;
        }
        return false;
    }

    public static function isArraylist(array $array)
    {
             $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($array));
             $keys = array();
         foreach ($iterator as $key => $value) {
            for ($i = $iterator->getDepth() - 1; $i >= 0; $i--) {
                    $key = $iterator->getSubIterator($i)->key() . ' -> ' . $key;
             }
             $keys[] = $key;
          }
             return $keys;
    }
}

?>