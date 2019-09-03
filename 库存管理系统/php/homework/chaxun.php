<?php
	require_once("init.inc.php");
	require_once("conn.php");

    $type = $_POST['type'];
	$name = $_POST['name'];
	$ary=array();
    $sql = "select * from tb_product where type='$type' or name='$name'";
	$r = $db->query($sql);
	
	while($row = $r->fetch()){
		$per['id'] = $row['id'];
		$per['name'] = $row['name'];
		$per['type'] = $row['type'];
		$per['price'] = $row['price'];
		$per['dayin'] = $row['dayin'];
		$per['dayout'] = $row['dayout'];
		$per['number'] = $row['number'];
		$per['people'] = $row['people'];
		$ary[] = $per;
	}

	$smarty->assign("ary",$ary);
	$smarty->display("depot.html");
?>
