<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\wamp64\www\supermall2\public/../application/index\view\templates\depot.html";i:1543339038;s:21:"../public/header.html";i:1543332066;}*/ ?>
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

<div class="row" style="margin-top:10px;margin-bottom:10px">
	<div class="col-md-4">
		<form class="form-inline" role="form" action="<?php echo url('search'); ?>" method='post'>
			<div class="form-group" >
                <label>产品类型：</label>
                <select class="mytype-item" name="type" width=30 value="<?php echo $type; ?>">
                <option value="0">全部</option>
                <option value="家具类">家具类</option>		
                <option value="食品类">食品类</option>
                <option value="用品类">用品类</option>
                <option value="服装类">服装类</option>
                </select>
            </div>
            <div class="form-group" style="margin-left:50px;margin-right:50px;">
                <label>产品名称：</label>
                <input type="text" name="name" class="mytype-item" value="<?php echo $name; ?>"/>
            </div>
            <button type="submit" class="btn btn-primary">查询</button>
		</form>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
    	<div class="panel-heading">
        	<a href="<?php echo url('insert'); ?>" class="btn btn-primary">新增产品</a>
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
			<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['type']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['dayin']; ?></td>
                    <td><?php echo $product['dayout']; ?></td>
                    <td><?php echo $product['number']; ?></td>
                    <td><?php echo $product['people']; ?></td>
                    <td>
                        <a href="<?php echo url('xiugai',['id'=>$product['id']]); ?>" >编辑</a>
                        <a href="<?php echo url('delete',['id'=>$product['id']]); ?>" >删除</a>
                    </td>
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
