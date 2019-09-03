<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\wamp\www\supermall2\public/../application/index\view\templates\product.html";i:1543334471;s:21:"../public/header.html";i:1543332066;}*/ ?>
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
            <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['type']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
    		</table>
        </div>
    </div>
</div>

<div align="center">
<?php echo $list->render(); ?>
</div>

</body>
</html>
