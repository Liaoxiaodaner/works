<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\wamp2.5\www\supermall\public/../application/index\view\testmodel\edit.html";i:1542980852;s:21:"../public/header.html";i:1542235503;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>supermall实战案例</title>
<link href="__PUBLIC__/bootstrap337/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="__PUBLIC__/bootstrap337/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap337/js/bootstrap.min.js"></script>
</head>

<style>
body {
    font-family:"Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size:16px;
    padding:5px;
}.form{
    padding: 15px;
    font-size: 16px;
}.form .text {
    padding: 3px;
    margin:2px 10px;
    width: 240px;
    height: 24px;
    line-height: 28px;
    border: 1px solid #D4D4D4;
}.form .btn{
    margin:6px;
    padding: 6px;
    width: 120px;

    font-size: 16px;
    border: 1px solid #D4D4D4;
    cursor: pointer;
    background:#eee;
}a{
    color: #868686;
    cursor: pointer;
}a:hover{
    text-decoration: underline;
}
h2{
    color: #4288ce;
    font-weight: 400;
    padding: 6px 0;
    margin: 6px 0 0;
    font-size: 28px;
    border-bottom: 1px solid #eee;
}div{
    margin:8px;
}.info{
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}.copyright{
    margin-top: 24px;
    padding: 12px 0;
  border-top: 1px solid #eee;
}</style>
<body align="center">
<h2>创建用户</h2>
<form method="post" class="form" action="<?php echo url('index/testmodel/saveedit'); ?>">
         <input type="hidden" class="text" name="id" value="<?php echo $data['id']; ?>"/><br/>
商家名：<input type="text" class="text" name="name" value="<?php echo $data['name']; ?>"/><br/>
密      码：<input type="text" class="text" name="password" value="<?php echo $data['password']; ?>"/><br/>
机电币：<input type="text" class="text" name="money" value="<?php echo $data['money']; ?>"/><br/>
地      址：<input type="text" class="text" name="address" value="<?php echo $data['address']; ?>"/><br/>
电      话：<input type="text" class="text" name="telephone" value="<?php echo $data['telephone']; ?>"/><br/>
<input type="submit" class="btn" value=" 提交 ">
</form>

</body></html>
