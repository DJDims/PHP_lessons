<?php
ob_start();
$title = "Manage panel";
?>

<?php
echo '<h3>Панель управления данными';
if (isset($_SESSION['name']) && isset($_SESSION['role'])) {
    echo $_SESSION['name'].', role - '.$_SESSION['role'];
}
echo '</h3>'
?>
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>