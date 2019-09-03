<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\wamp2.5\www\supermall\public/../application/index\view\testmodel\index.html";i:1543026953;s:21:"../public/header.html";i:1542235503;}*/ ?>
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
    <div class="row" >
        <div class="col-md-3">

        </div>
        <div class="col-md-6 ">
        <form method="post" class="form" action="<?php echo url('index/testmodel/search'); ?>">
   商家名称<input type="text" class="text" name="searchname" value="<?php echo $searchname; ?>"
/>
   商家地址<input type="text" class="text" name="searchaddress" value="<?php echo $searchaddress; ?>"/>
        <input type="submit" class="btn" name="name" value="搜索" />
        </form>
        </div>
        <div class="col-md-3">
<a href="<?php echo url('add'); ?>"  class="btn">添加数据</a>
        </div>

    </div>
<table class="table table-hover">
    <caption style="text-align:center;">supermall数据库商家列表</caption>
    <thead>
        <tr>
            <th>商家名称</th>
            <th>商家密码</th>
            <th>商家机电币</th>
            <th>商家地址</th>
            <th>商家电话</th>
            <th>编辑</th>
            <th>删除</th>
        </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
           <tr >
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php echo $user['money']; ?></td>
            <td><?php echo $user['address']; ?></td>
            <td><?php echo $user['telephone']; ?></td>
            <td><a href="<?php echo url('edit',['id'=>$user['id']]); ?>" >编辑</a></td>
            <td><a href="<?php echo url('delete',['id'=>$user['id']]); ?>" >删除</a></td>
        </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>


    </tbody>
</table>
<div align="center">
<?php echo $list->render(); ?>
</div>
</body>
</html>