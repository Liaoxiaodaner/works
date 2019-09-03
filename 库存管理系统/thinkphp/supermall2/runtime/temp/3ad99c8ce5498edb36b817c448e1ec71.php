<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\wamp\www\supermall2\public/../application/index\view\templates\insert.html";i:1543806884;s:21:"../public/header.html";i:1543332066;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>库存管理系统</title>
<link href="__PUBLIC__/bootstrap337/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="__PUBLIC__/bootstrap337/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap337/js/bootstrap.min.js"></script>
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
				<form role="form" action="<?php echo url('create'); ?>" method='post'>
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
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;价格&nbsp;&nbsp;&nbsp;&nbsp;</span> 
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
					<span class="input-group-addon">库存总量</span>	
					<input type="text" class="form-control" placeholder="库存总量" name='number' />
				</div>
                <div class="form-group input-group">
					<span class="input-group-addon">&nbsp;&nbsp;经手人&nbsp;&nbsp;</span>	
					<input type="text" class="form-control" placeholder="经手人" name='people' />
				</div>
                
							
				<input type='reset' class="btn btn-primary" value=' 重 置 ' />&nbsp;&nbsp;
				<input type='submit' class="btn btn-primary" value=' 保 存 ' />&nbsp;&nbsp;
				<a class="btn btn-primary" href="depot.html">返回</a>
				</form>
			</div>
		</div>
	</div>
</div>


</body>
</html>
