<?php 

if ($_GET['menu']=='create'){
	require_once('template/Students/create.php');
}if ($_GET['menu']=='list'){
	require_once('template/Students/list.php');
}if($_GET ['menu']=='update'){
	require_once('template/Students/update.php');
}

/*links STUDENT-SUBJECT-YEAR*/

if ($_GET['menu']=='createSSY'){
	require_once('template/SSY/create.php');
}if ($_GET['menu']=='listSSY'){
	require_once('template/SSY/list.php');
}if($_GET ['menu']=='updateSSY'){
	require_once('template/SSY/update.php');
}


/*links SUBJECT*/

if ($_GET['menu']=='createS'){
	require_once('template/Subject/create.php');
}if ($_GET['menu']=='listS'){
	require_once('template/Subject/list.php');
}if($_GET ['menu']=='updateS'){
	require_once('template/Subject/update.php');
}

/*links Teacher*/
if ($_GET['menu']=='createT'){
	require_once('template/Teacher/create.php');
}if ($_GET['menu']=='listT'){
	require_once('template/Teacher/list.php');
}if($_GET ['menu']=='updateT'){
	require_once('template/Teacher/update.php');
}



 ?>

