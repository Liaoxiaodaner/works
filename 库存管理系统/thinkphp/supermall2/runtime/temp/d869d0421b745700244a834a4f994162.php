<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp2.5\www\supermall2\public/../application/index\view\index\login.html";i:1542033635;s:21:"../public/header.html";i:1542235503;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>supermall实战案例</title>
<link href="__PUBLIC__/bootstrap337/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="__PUBLIC__/bootstrap337/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap337/js/bootstrap.min.js"></script>
</head>     <!--从入口文件index.php开始算路径？-->

<body>
<h2 align="center">用户登陆页面</h2>
<div class="container">
   <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
    <FORM method="post" class="form" action="<?php echo url('checkCode'); ?>">
<table class="table table-condensed">
    <tbody>
        <tr>
            <td>账    号：</td>
            <td><INPUT type="text" class="text" name="user" placeholder="请输入账号" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>密    码：</td>
            <td><INPUT type="text" class="text" name="password"  placeholder="请输入密码" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>验证码：</td>
            <td><INPUT type="text" class="text" name="code"></td>
            <td>
            <div >
            <img   src="<?php echo captcha_src(); ?>"
             onClick="this.src='<?php echo captcha_src(); ?>?'+Math.random();"/>
            </div>
            </td>
        </tr>
            <tr>
            <td></td>
            <td align="center"><INPUT type="submit" class="btn" value=" 提交 "></td>
            <td></td>
        </tr>
    </tbody>
</table>


</FORM>
      </div>
      <div class="col-md-3"></div>
   </div>

</div>

</body>
</html>