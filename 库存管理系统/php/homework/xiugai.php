<?php
	require_once("init.inc.php");
	require_once("conn.php");
$id=$_POST['id'];
//var_dump($id);
//exit;
$sql = "select * from tb_product where id=$id";
$r = $db->query($sql);
$ary=array();
	while($row = $r->fetch()){
		$ary[] = $row;
	}
//var_dump($ary);
//exit;
	
	$smarty->assign("ary",$ary);
	$smarty->display("xiugai.html");
	
?>