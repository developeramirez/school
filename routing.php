<?php 

if ($_GET['menu']=='create'){
	require_once('template/Students/create.php');
}if ($_GET['menu']=='list'){
	require_once('template/Students/list.php');
}if($_GET ['menu']=='update'){
	require_once('template/Students/update.php');
}

 ?>

