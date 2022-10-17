<?php

class Model {
	public static function getStateList(){
        $query = 'SELECT * FROM `country` ORDER BY `country`.`name` ASC';
        $db = new database();
        $response = $db -> getAll($query);
        return $response;
    }

    public static function getState($id){
        $query = 'SELECT * FROM `country` WHERE `Code` = "'.$id.'"';
        $db = new database();
        $response = $db -> getOne($query);
        return $response;
    }

    public static function getCityListByState($id){
        $query = 'SELECT * FROM `city`  WHERE `CountryCode` = "'.$id.'"';
        $db = new database();
        $response = $db -> getAll($query);
        return $response;
    }

    public static function getCityList(){
        $query = 'SELECT * FROM `city` ORDER BY `CountryCode` ASC';
        $db = new database();
        $response = $db -> getAll($query);
        return $response;
    }

    public static function getContinentList(){
        $query = 'SELECT DISTINCT `continent` FROM `country`';
        $db = new database();
        $response = $db -> getAll($query);
        return $response;
    }

    public static function getStateListByContinent($id){
        $query = 'SELECT * FROM `country` WHERE `Continent` = "'.$id.'"';
        $db = new database();
        $response = $db -> getAll($query);
        return $response;
    }

    public static function getStateByCode($id){
        $query = 'SELECT * FROM `country` WHERE `Code`="'.$id.'" OR `Name` LIKE "%'.$id.'%"';
        $db = new database();
        $response = $db -> getOne($query);
        return $response;
    }
}
?>