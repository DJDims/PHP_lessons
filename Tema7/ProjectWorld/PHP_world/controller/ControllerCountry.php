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

    public static function CountryEditForm($id){
        $country = Model::getState($id);
        include_once('view/countryEdit.php');
        return;
    }
    
    public static function CountryEditResult($id){
        $result = ModelCountry::CountryEditResult($id);
        if ($result == true) {
            $_SESSION['message'] = 'Данные изменены - страна '.$id;
            $stateList = Model::getStateList();
            header('Location: countryList');
        } else {
            $country = Model::getState($id);
            $error = 'Не удалось изменить данные';
            include_once('view/countryEdit.php');
        }
        return;
    }

    public static function CountryDeleteForm($id){
        $country = Model::getState($id);
        include_once('view/countryDelete.php');
        return;
    }

    public static function CountryDeleteResult($id){
        $result = ModelCountry::CountryDeleteResult($id);
        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены - страна '.$id;
            $stateList = Model::getStateList();
            header('Location: countryList');
        } else {
            $country = Model::getState($id);
            $error = 'Не удалось изменить данные';
            include_once('view/countryDelete.php');
        }
        return;
    }
}
?>