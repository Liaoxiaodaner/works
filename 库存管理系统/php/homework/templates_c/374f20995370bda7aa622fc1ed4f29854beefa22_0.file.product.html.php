<?php /* Smarty version 3.1.27, created on 2018-11-26 15:09:37
         compiled from "C:\wamp64\www\homework\templates\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:95265bfc0cb1a78b04_11684196%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374f20995370bda7aa622fc1ed4f29854beefa22' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\product.html',
      1 => 1543244975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95265bfc0cb1a78b04_11684196',
  'variables' => 
  array (
    'ary' => 0,
    'v' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc0cb1b8e030_09678508',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc0cb1b8e030_09678508')) {
function content_5bfc0cb1b8e030_09678508 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95265bfc0cb1a78b04_11684196';
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
        	<a href='#' class="btn btn-primary">欢迎了解各类产品</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <td>产品编号</td>
                    <td>产品名称</td>
                    <td>产品类型</td>
                    <td>产品价格</td>
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
                <?php
$_from = $_smarty_tpl->tpl_vars['v']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
$foreach_v1_Sav = $_smarty_tpl->tpl_vars['v1'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['v1'] = $foreach_v1_Sav;
}
?>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                <tr><td colspan="3">没有记录</td></tr>
            <?php
}
?>
    		</table>
        </div>
    </div>
</div>


</body>
</html>
<?php }
}
?>