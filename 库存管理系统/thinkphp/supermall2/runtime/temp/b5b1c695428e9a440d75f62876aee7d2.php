<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp\www\supermall2\public/../application/index\view\templates\base.html";i:1543808021;s:21:"../public/header.html";i:1543332066;}*/ ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>库存管理系统</title>
<link href="__PUBLIC__/bootstrap337/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="__PUBLIC__/bootstrap337/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap337/js/bootstrap.min.js"></script>
</head>



<body >

<div class="container" style="width:2160px;height:1080px;">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">库存管理系统</a> 
                    </div>
                    <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                        用户名:admin
                        <a class="btn btn-danger" href="templates/login.html" >退出</a>
                    </div>
                </div>
            </nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
            <nav class="navbar navbar-default" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu" style="height:1080px">
                        <li><a href='product.html' target="right">商品信息</a></li>
                        <li><a href='depotin.html' target="right">商品入库</a></li>
                        <li><a href='depotout.html' target="right">商品出库</a></li>
                        <li><a href='depot.html' target="right">库存查询</a></li>
                    </ul>
                </div>
            </nav>
		</div>
        
        <iframe class="col-md-11" name="right" style="height:1080px">
        	
            
        </iframe>
        
  </div>
</div>
<div align="center">

</div>
</body>
</html>
