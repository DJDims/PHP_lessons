<!DOCTYPE html>
<html>
    <head>
        <title>Анкета</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php include_once 'array.php'?>
            <h2>Анкета</h2>
            <div>
                <form action="" method="POST">
                    <div>
                        <label for="firstname">Имя</label>
                        <input type="text" name="firstname" required>
                    </div>
                    <div>
                        <label for="birthYear">Год рождения</label>
                        <input type="text" name="birthYear" min="1960" max="2017" required>
                    </div>
                    <div>
                        <label for="speciality">Специальность</label>
                        <select name="speciality">
                            <?php
                                foreach ($specialitys as $key => $speciality) {
                                    echo '<option value="'.$key.'">'.$speciality['name'].', '.$speciality['location'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="send" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
        <?php
            if (isset($_POST['send'])) {
                $firstname = $_POST['firstname'];
                $birthYear = $_POST['birthYear'];
                $select = $_POST['speciality'];
                
                $speciality = $specialitys[$select]['name'];
                $location = $specialitys[$select]['location'];
                $photo = $specialitys[$select]['photo'];

                $age = date('Y') - $birthYear;

                $text = '';
                if ($firstname != '') {
                    $text .= '<hr><h2>Приветствие</h2>';
                    $text .= 'Имя: '.$firstname.'<br>';
                    $text .= 'Год рождения: '.$birthYear.'<br>';
                    $text .= 'Специальность: '.$speciality.'<br>';
                    $text .= 'Город: '.$location.'<br>';
                    if (file_exists($photo) && $photo != '') {
                        $text .= '<img src="'.$photo.'">';
                    } else {
                        $text .= 'No photo';
                    }
                    echo $text;
                }
            }
        ?>
        <footer>
            <hr>
            <p>&copy; 2022 Dmitrii Kreivald</p>
        </footer>
    </body>
</html>