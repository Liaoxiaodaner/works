<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"C:\wamp\www\supermall2\public/../application/index\view\templates\login.html";i:1543332651;s:21:"../public/header.html";i:1543332066;}*/ ?>
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

<div class="container" style="margin-top:150px">
	<div class="row text-center">
    	<div class="col-md-12">
        	<h2>库存管理系统登录</h2>
            <br/>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-4"></div>
    	<div class="col-md-4">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                	<strong>输入登录信息</strong>
                </div>
                <div class="panel-body">
                	<form class="form-horizontal center-block" role="form" action="<?php echo url('checkCode'); ?>" method="post">
                    	<div class="form-group input-group">
                        	<span class="input-group-addon"><i class="fa fa-tag"></i></span>
							<input type="text" name="user" class="form-control" placeholder="填写用户名 " />
                        </div>
                        <div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password"  name="pwd"  class="form-control" placeholder="填写密码" />
						</div>
                        <div class="form-group">
							<label class="checkbox-inline"> <input type="checkbox"/>记住密码
							</label><span class="pull-right"> <a href="#">忘记密码 ? </a></span>
						</div>
						<input type='submit' class="btn btn-primary" value="登录"/>&nbsp;&nbsp;
						<input type='reset' class="btn btn-primary" value="重置"/>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
