<?php
/**
 * 
 */
class Controller {



    public static function StartSite() {
        include 'view/main.php';    
    }

    public static function ThingList() {
        $thingsList = Model::getThingList();
        include 'view/thingList.php';
    }

    public static function thingOne($title) {
        $test = Model::getThing($title);
        if ($test[0]==true) {
            $thing = $test[1];
            include 'view/thingOne.php';
        } 
        else {
            include 'view/error404.php';
        }
    }
    public static function error404() {
        include 'view/error404.php';
    }
}
 ?>