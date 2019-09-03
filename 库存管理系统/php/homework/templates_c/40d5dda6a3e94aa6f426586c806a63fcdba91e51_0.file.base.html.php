<?php /* Smarty version 3.1.27, created on 2018-11-26 15:36:07
         compiled from "C:\wamp64\www\homework\templates\base.html" */ ?>
<?php
/*%%SmartyHeaderCode:272135bfc12e757f1c7_43730237%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d5dda6a3e94aa6f426586c806a63fcdba91e51' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\base.html',
      1 => 1543246563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272135bfc12e757f1c7_43730237',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc12e75d3737_08409634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc12e75d3737_08409634')) {
function content_5bfc12e75d3737_08409634 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '272135bfc12e757f1c7_43730237';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>库存管理系统</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="../bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>


</head>

<body>

<div class="container">
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
		<div class="col-md-3">
            <nav class="navbar navbar-default" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu" style="height:500px">
                        <li><a href='product.php' target="right">商品信息</a></li>
                        <li><a href='depotin.php' target="right">商品入库</a></li>
                        <li><a href='depotout.php' target="right">商品出库</a></li>
                        <li><a href='depot.php' target="right">库存查询</a></li>
                    </ul>
                </div>
            </nav>
		</div>
        
        <iframe class="col-md-9" name="right" style="height:500px">
        	
            
        </iframe>
        
  </div>
</div>

</body>
</html>
<?php }
}
?>