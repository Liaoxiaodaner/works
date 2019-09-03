<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\wamp2.5\www\supermall2\public/../application/index\view\index\test.html";i:1540678194;s:21:"../public/header.html";i:1542235503;}*/ ?>
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
<h2 align="center">thinkphp查询构造器专题</h2>
<table class="table table-hover">
    <caption style="text-align:center;">supermall数据库商品列表</caption>
    <thead>
        <tr>
            <th>商品名称</th>
            <th>商家ID</th>
            <th>商品单价</th>
        </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
           <tr >
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['seller_id']; ?></td>
            <td><?php echo $user['price']; ?></td>
        </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>


    </tbody>
</table>
<div align="center">
<?php echo $list->render(); ?>
</div>
</body>
</html>