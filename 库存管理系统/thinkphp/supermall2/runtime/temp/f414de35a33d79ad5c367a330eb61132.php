<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\wamp64\www\supermall2\public/../application/index\view\templates\ruku.html";i:1543807142;s:21:"../public/header.html";i:1543332066;}*/ ?>
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
				<strong>产品入库信息</strong>
			</div>
			<div class="panel-body">

				<form role="form" action="<?php echo url('creatin'); ?>" method='post'>
				<br />
                <input style="display:none" type="text" name="id" value="<?php echo $data['id']; ?>"/>
               
                <div class="form-group input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;入库数量&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <input type="text" class="form-control" placeholder="请输入入库数量" name='upnumber'/>
				</div>
				
						
				<input type='reset' class="btn btn-primary" value=' 重 置 ' />&nbsp;&nbsp;
				<input type='submit' class="btn btn-primary" value=' 确定 ' />&nbsp;&nbsp;
				<a class="btn btn-primary" href="<?php echo url('depotin'); ?>">返回</a>
				</form>
			</div>
		</div>
	</div>
</div>



</body>
</html>
