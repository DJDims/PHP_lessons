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
                $query = "INSERT INTO `country`(`Code`, `Name`, `Continent`, `Region`, `IndepYear`, `Population`, `GovernmentForm`, `HeadOfState`, `Code2`, `created_at`, `updated_at`) VALUES ('$Code','$Name','$Continent','$Region','$IndepYear','$Population','$GovernmentForm','$HeadOfState','$Code2','$Created_at','$Updated_at')";
                $db = new database();
                $response = $db -> executeRun($query);
                if ($response == true){
                    $result = true;
                }
            }
        }
        return $result;
    }
}
?>