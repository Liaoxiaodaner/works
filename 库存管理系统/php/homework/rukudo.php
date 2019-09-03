<?php
	require_once("init.inc.php");
	require_once("conn.php");
	
	$id=$_POST['id'];
	$upnumber=$_POST['upnumber'];
	//$sql = "SELECT number from tb_product where id=$id";
	//$r=$db->query($sql);
	//while($row=$r->fetch()){
		//$number=$row;
		//}
		//$number=$number[0];
	//var_dump($number);
	//exit;
	
	$sql = "UPDATE tb_product SET number=number+$upnumber WHERE id=$id";
	$r=$db->query($sql);
	if($r){
		echo '<script>alert("增加成功！");location.href="depotin.php";</script>';
	}else{
		echo '<script>alert("增加失败！");location.href="depotin.php";</script>';}
		
	
?>