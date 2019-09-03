<?php
	require_once("init.inc.php");
	require_once("conn.php");

    $id = $_POST['id'];
    $sql = "delete from tb_product where id=$id";
	$r = $db->query($sql);
    if($r){
		echo '<script>alert("刪除成功！");location.href="depot.php";</script>';
	}else{
		echo '<script>alert("刪除失败！");location.href="depot.php";</script>';}
    exit();
