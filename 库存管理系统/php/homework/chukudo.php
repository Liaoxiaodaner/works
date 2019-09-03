<?php
	require_once("init.inc.php");
	require_once("conn.php");
	
	$id=$_POST['id'];
	$downnumber=$_POST['downnumber'];
	//$sql = "SELECT number from tb_product where id=$id";
	//$r=$db->query($sql);
	//while($row=$r->fetch()){
		//$number=$row;
		//}
		//$number=$number[0];
	//var_dump($number);
	//exit;
	
	$sql = "UPDATE tb_product SET number=number-$downnumber WHERE id=$id";
	$r=$db->query($sql);
	if($r){
		echo '<script>alert("减少成功！");location.href="depotout.php";</script>';
	}else{
		echo '<script>alert("减少失败！");location.href="depotout.php";</script>';}
		
	
?>