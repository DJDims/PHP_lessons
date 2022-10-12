<?php
class Controller { 
    public static function StartSite(){
        include_once('view/homepage.php');
        return;
    }
    
    public static function error404(){
        include_once('view/error404.php');
        return;
    }

    public static function StateList(){
        $stateList = Model::getStateList();
        include_once('view/stateList.php');
        return;
    }
    
    public static function CityListByState($id){
        $state = Model::getState($id);
        $cityList = Model::getCityListByState($id);
        include_once('view/cityList.php');
        return;
    }
    
    public static function CitiesList(){
        $cityList = Model::getCityList();
        include_once('view/cityList.php');
        return;
    }
    
    public static function ContinentList(){
        $continentList = Model::getContinentList();
        $stateList = Model::getStateList();
        include_once('view/continentList.php');
        return;
    }
    
    public static function StateListByContinent($id){
        $continentList = Model::getContinentList();
        $stateList = Model::getStateListByContinent($id);
        include_once('view/continentList.php');
        return;
    }
}
?>
