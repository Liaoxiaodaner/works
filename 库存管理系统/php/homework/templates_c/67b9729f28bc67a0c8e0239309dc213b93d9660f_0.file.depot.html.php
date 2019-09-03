<?php /* Smarty version 3.1.27, created on 2018-11-26 15:28:56
         compiled from "C:\wamp64\www\homework\templates\depot.html" */ ?>
<?php
/*%%SmartyHeaderCode:242585bfc1138661bc2_43624822%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b9729f28bc67a0c8e0239309dc213b93d9660f' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\depot.html',
      1 => 1543246134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242585bfc1138661bc2_43624822',
  'variables' => 
  array (
    'ary' => 0,
    'v' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc113897e258_93173104',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc113897e258_93173104')) {
function content_5bfc113897e258_93173104 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '242585bfc1138661bc2_43624822';
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

<div class="row" style="margin-top:10px;margin-bottom:10px">
	<div class="col-md-4">
		<form class="form-inline" role="form" action="chaxun.php" method='post'>
			<div class="form-group" >
                <label>产品类型：</label>
                <select class="mytype-item" name="type" width=30>
                <option value="0">全部</option>
                <option value="家具类">家具类</option>		
                <option value="食品类">食品类</option>
                <option value="用品类">用品类</option>
                <option value="服装类">服装类</option>
                </select>
            </div>
            <div class="form-group" style="margin-left:50px;margin-right:50px;">
                <label>产品名称：</label>
                <input type="text" name="name" class="mytype-item" />
            </div>
            <button type="submit" class="btn btn-primary">查询</button>
		</form>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
    	<div class="panel-heading">
        	<a href="templates/insert.html" class="btn btn-primary">新增产品</a>
        </div>
        <div class="panel-body">
			<table class="table table-bordered">
                <tr>
                    <td>产品编号</td>
                    <td>产品名称</td>
                    <td>产品类型</td>
                    <td>产品价格</td>
                    <td>入库日期</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dayin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dayout'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
</td>
                	<td>
                    <form action="xiugai.php" method="post"><input style="display:none" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/><input type="submit" value="修改"/></form>
                    <form action="del.php" method="post"><input style="display:none" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/><input type="submit" value="删除"/></form>
                    </td> 
                </tr>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
            </table>
        </div>
    </div>
</div>

<!--<?php
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
                <td><a href="xiugai.php>">修改</a></td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                <tr><td colspan="3">没有记录</td></tr>
            <?php
}
?>-->


</body>
</html>
<?php }
}
?>