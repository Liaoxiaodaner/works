<?php
	require_once("init.inc.php");
	require_once("conn.php");
	
	$id=$_POST['id'];
	
	$smarty->assign("id",$id);
	$smarty->display("chuku.html");
?>