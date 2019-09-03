<?php
	require_once("init.inc.php");
	require_once("conn.php");
	
	$id=$_POST['id'];
	//var_dump($id);
	//exit;
	$name=$_POST['name'];
	$type=$_POST['type'];
	$price=$_POST['price'];
	$dayin=$_POST['dayin'];
	$dayout=$_POST['dayout'];
	$number=$_POST['number'];
	$people=$_POST['people'];
	
	$sql = "UPDATE tb_product SET name='$name',type='$type',price='$price',dayin='$dayin',dayout='$dayout',number='$number',people='$people' WHERE id=$id";
	$r=$db->query($sql);
	if($r){
		echo '<script>alert("修改成功！");location.href="depot.php";</script>';
	}else{
		echo '<script>alert("修改失败！");location.href="depot.php";</script>';}
	
?>