<?php 
	ob_start();
	$title="404 ошибка";
 ?>
 
	<div class="center" >
		<img src="images/404.png" >    
	</div> 

<?php 
	$content = ob_get_clean(); 
	include "view/templates/layout.php";
?>