<?php
	require_once("init.inc.php");
	require_once("conn.php");

	$name=$_POST['name'];
	$type=$_POST['type'];
	$price=$_POST['price'];
	$dayin=$_POST['dayin'];
	$dayout=$_POST['dayout'];
	$number=$_POST['number'];
	$people=$_POST['people'];
//var_dump($name);
//exit;
//id
/*
$sql="select *  from tb_product";
$r=$db->query($sql);
//$arr=array();
while($row= $r->fetch()){
	$arr=$row;
	}
	var_dump($arr['name']);
exit;*/
//$maxid=$r->fetch();
//$strid=$maxid[0];
//$intid=(int)$strid;
//$id=$intid+1;

//var_dump($id);
//exit;

	$sql = "INSERT INTO tb_product( name, type, price, dayin, dayout, number, people)" .
	 " VALUES ('$name','$type','$price','$dayin','$dayout','$number','$people')";
	$r=$db->query($sql);
	if($r){
		echo '<script>alert("添加成功！");location.href="depot.php";</script>';
	}else{
		echo '<script>alert("添加失败！");location.href="depot.php";</script>';}
?>