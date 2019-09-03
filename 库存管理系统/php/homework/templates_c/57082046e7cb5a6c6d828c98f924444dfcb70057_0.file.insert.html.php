<?php /* Smarty version 3.1.27, created on 2018-11-24 14:28:57
         compiled from "C:\wamp64\www\homework\templates\insert.html" */ ?>
<?php
/*%%SmartyHeaderCode:222055bf96029e0f6d1_28404623%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57082046e7cb5a6c6d828c98f924444dfcb70057' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\insert.html',
      1 => 1543069717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222055bf96029e0f6d1_28404623',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bf96029e91e59_76127377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bf96029e91e59_76127377')) {
function content_5bf96029e91e59_76127377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '222055bf96029e0f6d1_28404623';
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
				<strong>增加产品信息</strong>
			</div>
			<div class="panel-body">
				<form role="form" action="../insert.php" method='post'>
				<br />
				<div class="form-group input-group">
					<span class="input-group-addon">产品名称</span>
					<input type="text" class="form-control" placeholder="产品名称 " name='name' />
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">产品类型</span>
					<select type="text" class="form-control"	name='type' width=30>
                    <option value="家具类">家具类</option>		
                    <option value="食品类">食品类</option>
                    <option value="用品类">用品类</option>
                    <option value="服装类">服装类</option>
                    </select>
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">价格人&nbsp;&nbsp;&nbsp;</span> 
                    <input type="text" class="form-control" placeholder="价格" name='price' />
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">入库日期</span> 
                    <input type="text" class="form-control" placeholder="入库日期" name='dayin' />
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">出库日期</span>	
					<input type="text" class="form-control" placeholder="出库日期" name='dayout' />
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">经手人&nbsp;&nbsp;&nbsp;&nbsp;</span>	
					<input type="text" class="form-control" placeholder="经手人" name='people' />
				</div>
                
							
				<input type='reset' class="btn btn-primary" value=' 重 置 ' />&nbsp;&nbsp;
				<input type='submit' class="btn btn-primary" value=' 保 存 ' />&nbsp;&nbsp;
				<a class="btn btn-primary" href="work.php">返回</a>
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