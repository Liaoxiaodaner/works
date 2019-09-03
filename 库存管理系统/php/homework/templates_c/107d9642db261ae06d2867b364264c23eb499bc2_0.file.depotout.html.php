<?php /* Smarty version 3.1.27, created on 2018-11-26 15:08:42
         compiled from "C:\wamp64\www\homework\templates\depotout.html" */ ?>
<?php
/*%%SmartyHeaderCode:263215bfc0c7af0c8c1_38525381%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107d9642db261ae06d2867b364264c23eb499bc2' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\depotout.html',
      1 => 1543244919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263215bfc0c7af0c8c1_38525381',
  'variables' => 
  array (
    'ary' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc0c7b1bb314_50612621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc0c7b1bb314_50612621')) {
function content_5bfc0c7b1bb314_50612621 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '263215bfc0c7af0c8c1_38525381';
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
	<div class="panel panel-default">
    	<div class="panel-heading">
        	<a href='#' class="btn btn-primary">修改出库记录</a>
        </div>
        <div class="panel-body"></div>
    </div>
</div>
<table class="table table-bordered">
  <tr>
    <td>产品编号</td>
    <td>产品名称</td>
    <td>出库日期</td>
    <td>库存总量</td>
    <td>经手人</td>
    <td>操作</td>
  </tr>
<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dayout'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
</td>
        <td><form action="chuku.php" method="post"><input style="display:none" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/><input type="submit" value="出库"/></form></td> 
   </tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>

</body>
</html>
<?php }
}
?>