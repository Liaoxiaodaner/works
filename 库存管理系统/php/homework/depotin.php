<?php
	require_once("init.inc.php");
	require_once("conn.php");
	$sql = "select * from tb_product";
	$ary=array();
	$r = $db->query($sql);
	while($row = $r->fetch()){
		$per['id'] = $row['id'];
		$per['name'] = $row['name'];
		$per['dayin'] = $row['dayin'];
		$per['number'] = $row['number'];
		$per['people'] = $row['people'];
		$ary[] = $per;
	}

	$smarty->assign("ary",$ary);
	$smarty->display("depotin.html");
?>