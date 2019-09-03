<?php /* Smarty version 3.1.27, created on 2018-11-26 14:19:09
         compiled from "C:\wamp64\www\homework\templates\xiugai.html" */ ?>
<?php
/*%%SmartyHeaderCode:189795bfc00ddc98790_68303161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967c96c2b5dc2103565219811abe58cd0799f6bb' => 
    array (
      0 => 'C:\\wamp64\\www\\homework\\templates\\xiugai.html',
      1 => 1543241922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189795bfc00ddc98790_68303161',
  'variables' => 
  array (
    'ary' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bfc00dde94807_45214711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bfc00dde94807_45214711')) {
function content_5bfc00dde94807_45214711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '189795bfc00ddc98790_68303161';
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
				<strong>修改产品信息</strong>
			</div>
			<div class="panel-body">
				<form role="form" action="xiugaido.php" method='post'>
				<br />
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
                <div class="form-group input-group" style="display:none">
					<span class="input-group-addon">产品编号</span>
					<input type="text" class="form-control" placeholder="产品编号 " name='id' value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">产品名称</span>
					<input type="text" class="form-control" placeholder="产品名称 " name='name' value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"/>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">产品类型</span>
					<select type="text" class="form-control"	name='type' width=30  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
">
                    <option value="家具类">家具类</option>		
                    <option value="食品类">食品类</option>
                    <option value="用品类">用品类</option>
                    <option value="服装类">服装类</option>
                    </select>
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;价格&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <input type="text" class="form-control" placeholder="价格" name='price'  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
"/>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">入库日期</span> 
                    <input type="text" class="form-control" placeholder="入库日期" name='dayin'  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['dayin'];?>
"/>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">出库日期</span>	
					<input type="text" class="form-control" placeholder="出库日期" name='dayout'  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['dayout'];?>
"/>
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">库存总量</span>	
					<input type="text" class="form-control" placeholder="库存总量" name='number'  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
"/>
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">&nbsp;&nbsp;经手人&nbsp;&nbsp;</span>	
					<input type="text" class="form-control" placeholder="经手人" name='people'  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
"/>
				</div>
				<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>		
				<input type='reset' class="btn btn-primary" value=' 重 置 ' />&nbsp;&nbsp;
				<input type='submit' class="btn btn-primary" value=' 保 存 ' />&nbsp;&nbsp;
				<a class="btn btn-primary" href="depot.php">返回</a>
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