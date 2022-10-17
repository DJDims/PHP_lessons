<?php
class ModelCountry {
    public static function CountryAddResult(){
        $result = false;
        if (isset($_POST['send'])) {
            $Code = strtoupper($_POST['Code']);
            $Name = $_POST['Name'];
            $Continent = $_POST['Continent'];
            $Region = $_POST['Region'];
            $IndepYear = $_POST['IndepYear'];
            $Population = $_POST['Population'];
            $GovernmentForm = $_POST['GovernmentForm'];
            $HeadOfState = $_POST['HeadOfState'];
            $Code2 = $_POST['Code2'];
            if ($Code != '' && $Name != '') {
                $Created_at = date('Y-m-d');
                $Updated_at = date('Y-m-d');
                $query = '';
            }
        }
    }
}
?>