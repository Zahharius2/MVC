<?php
    /**
     * 
     */
    class Model{

        public static function getThingList() {
            include_once 'model/thingsArray.php';
            return $things;
        }

        public static function getThing($title) {
            $allThing = Model::getThingList();
            $i = 0;
            $test = array(false);
            foreach ($allThing as $oneThing) {
                if($oneThing['gamename'] ==$title) {
                    $test = array(true, $allThing[$i]);
                    return $test;
                }
                $i++;
            }
            return $test;
        }
    }
 ?>