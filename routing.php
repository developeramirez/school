<?php 

if ($_GET['menu']=='create'){
	require_once('template/Students/create.php');
}if ($_GET['menu']=='list'){
	require_once('template/Students/list.php');
}if($_GET ['menu']=='update'){
	require_once('template/Students/update.php');
}

/*links average*/

if ($_GET['menu']=='createA'){
	require_once('template/Average/create.php');
}if ($_GET['menu']=='listA'){
	require_once('template/Average/list.php');
}if($_GET ['menu']=='updateA'){
	require_once('template/Average/update.php');
}








 ?>

