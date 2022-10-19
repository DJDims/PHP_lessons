<?php
class ControllerCountry {
    public static function CountryList(){
        $stateList = Model::getStateList();
        include_once('view/countryList.php');
        return;
    }

    public static function CountryAddForm(){
        include_once('view/countryAdd.php');
        return;
    }
    
    public static function CountryAddResult(){
        $result = ModelCountry::CountryAddResult();
        if ($result == true) {
            $stateList = Model::getStateList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: countryList');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('view/countryAdd.php');
        }
        return;
    }
}
?>