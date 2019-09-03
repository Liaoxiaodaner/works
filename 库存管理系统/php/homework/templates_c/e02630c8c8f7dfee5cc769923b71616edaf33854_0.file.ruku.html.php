<?php /* Smarty version 3.1.27, created on 2018-11-26 14:51:47
         compiled from "C:\wamp64\www\homework\templates\ruku.html" */ ?>
<?php
/*%%SmartyHeaderCode:313175bfc08836649a9_88674391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02630c8c8f7dfee5cc769923b71616edaf33854' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\ruku.html',
      1 => 1543243897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313175bfc08836649a9_88674391',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc08836ede11_55648715',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc08836ede11_55648715')) {
function content_5bfc08836ede11_55648715 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '313175bfc08836649a9_88674391';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="../bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<body>

<div class="row">
	<div class="col-md-12">
		<h2>产品信息</h2>
	</div>
</div>
<hr />
<div class="row">
	<div class="col-md-7">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>产品入库信息</strong>
			</div>
			<div class="panel-body">
				<form role="form" action="rukudo.php" method='post'>
				<br />
                
                <input style="display:none" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                <div class="form-group input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;入库数量&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <input type="text" class="form-control" placeholder="请输入入库数量" name='upnumber'"/>
				</div>
				
						
				<input type='reset' class="btn btn-primary" value=' 重 置 ' />&nbsp;&nbsp;
				<input type='submit' class="btn btn-primary" value=' 确定 ' />&nbsp;&nbsp;
				<a class="btn btn-primary" href="depotin.php">返回</a>
				</form>
			</div>
		</div>
	</div>
</div>



</body>
</html>
<?php }
}
?>