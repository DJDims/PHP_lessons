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
    }
?>