<?php 
	include_once "conn.php";
	include("init.inc.php");
	
	if(isset($_POST['user'])){
	   $user= $_POST['user'];
	   $pwd =$_POST['pwd'];
	   $sql = "select * from tb_user where user='$user' and pwd='$pwd'";
	   $r = $db->query($sql);
	   if($row = $r->fetch()){
		   session_start();
		   $_SESSION['user'] = $user;
		   $smarty->display("base.html");
	   }else{
		  echo '<script>alert("用户名或密码错误");location.href="login.html";</script>';  
	   }
   }else{
	   echo '<script>alert("请输入用户名和密码");location.href="login.html";</script>';
   }
	
	
	
	

?>