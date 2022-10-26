<?php
class ControllerCity{
    public static function CityListManage() {
        $cityList = Model::getCityList();
        include_once('view/citylistManage.php');
        return;
    }

    public static function CityAddForm() {
        $countries = Model::getStateList();
        include_once('view/cityAdd.php');
        return;
    }

    public static function CityAddResult() {
        $result = ModelCity::CityAddResult();
        if ($result == true) {
            $cityList = Model::getCityList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: cityListManage');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('view/cityAdd.php');
        }
        return;
    }

    public static function CityEditForm($id) {
        $countries = Model::getStateList();
        $city = Model::getCityByCode($id);
        include_once('view/cityEdit.php');
        return;
    }

    public static function CityEditResult($id) {

    }

    public static function CityDeleteForm($id) {

    }

    public static function CityDeleteResult($id) {

    }

}
?>