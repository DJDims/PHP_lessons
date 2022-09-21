<style>
    body {
        margin: 0;
    }
    .content {
        float: left;
        width: 200px;
        border: 1px solid black;
        display: flex;
        flex-direction: column;
        align-items: center
    }
    .clear {
        clear: both;
    }
    .studentsRow {
        display:flex;
        flex-direction: row;
        justify-content: space-around;
    }
    hr {
        margin: 5px 0;
    }
    footer {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        background-color: lightgray;
    }
</style>

<?php
include_once 'groups.php';
$text = '';

foreach ($ivkhk as $group => $value) {
    $text .= '<h3>Group: '.$group.'</h3>';
    $text .= '<p><b>Teacher: </b>'.$value['classroomTeacher'].'</p>';
    $text .= '<h3>Students list</h3>';
    $text .= '<div class="studentsRow">';       //так просто красивее
    foreach ($value['students'] as $student) {
        $text .= '<div class="content">';
        $text .= '<p>'.$student['name'].'</p>';
        $text .= '<img src="'.$student['photo'].'">';
        $text .= '</div>';
    }
    $text .= '</div>';
    $text .= '<div class="clear"></div><hr>';
}

echo $text;
?>

<footer>
    <p>Dmitrii Kreivald</p>
    <p>JPTV20</p>
    <p>21/09/2022</p>
</footer>