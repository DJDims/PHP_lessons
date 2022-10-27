<?php
    class ModelCity{
        public static function CityAddResult(){
            $result = false;
            if (isset($_POST['send'])) {
                $Code = strtoupper($_POST['Code']);
                $Name = $_POST['Name'];
                $Population = $_POST['Population'];
                if ($Code != '' && $Name != '') {
                    $Created_at = date('Y-m-d');
                    $Updated_at = date('Y-m-d');
                    $query = "INSERT INTO `city`(`Name`, `CountryCode`, `Population`, `created_at`, `updated_at`) VALUES ('$Name','$Code','$Population', '$Created_at', '$Updated_at')";
                    $db = new database();
                    $response = $db -> executeRun($query);
                    if ($response == true){
                        $result = true;
                    }
                }
            }
            return $result;
        }

        public static function CityEditResult($id){
            $result = false;
            if (isset($_POST['send'])) {
                $Code = strtoupper($_POST['Code']);
                $Name = $_POST['Name'];
                $Population = $_POST['Population'];
                if ($Code != '' && $Name != '') {
                    $Updated_at = date('Y-m-d');
                    $query = "UPDATE `city` SET `Name` = '$Name', `CountryCode` = '$Code', `Population` = '$Population', `updated_at` = '$Updated_at' WHERE `city`.`ID` = '".$id."'";
                    $db = new database();
                    $response = $db -> executeRun($query);
                    if ($response == true){
                        $result = true;
                    }
                }
            }
            return $result;
        }

        public static function CityDeleteResult($id){
            $result = false;
            if (isset($_POST['send'])) {
                $query = "DELETE FROM `city` WHERE `city`.`ID` = '".$id."'";
                $db = new database();
                $response = $db -> executeRun($query);
                if ($response == true){
                    $result = true;
                }
            }
            return $result;
        }
    }
?>