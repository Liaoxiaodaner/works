<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use think\Log;
use app\index\model\Seller;

class Templates extends Controller{
	public function login(){
      return view();
    }
	public function checkCode(){
		$con['user']=input('user');
        $result=db('user')->where($con)->select();
        if($result==null){
            $this->error('账号不存在');
        }else{
            $con['pwd']=input('pwd');
            $result=db('user')->where($con)->select();
            if($result==null){
                $this->error('密码不正确');
            }else{
                cookie('username',input('user'),36000);
                $this->redirect('base');
            }
        } 
    }

	public function base(){
		// 数据分页，每页显示3条数据
		$list = Db::name('product')->paginate(5);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('base');
	}
	public function product(){
		// 数据分页，每页显示3条数据
		$list = Db::name('product')->paginate(5);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('product');
	}
	public function depotin(){
		// 数据分页，每页显示3条数据
		$list = Db::name('product')->paginate(5);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('depotin');
	}
	public function depotout(){
		// 数据分页，每页显示3条数据
		$list = Db::name('product')->paginate(5);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('depotout');
	}
	public function depot(){
		// 数据分页，每页显示3条数据
		$list = Db::name('product')->paginate(5);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('depot',['type'=>'','name'=>'']);
	}

	public function insert(){
      return view();
    }
    public function create(){
	    $newSeller = new Seller;
		if( $newSeller->save(input('post.'))){
		        $this->success('数据插入成功！',url('depot'));
		}
	}

	public function delete($id){
		 $result= db('product')->delete($id);
		 if($result!=null){
		   $this->success('数据删除成功！',url('depot'));
		 }
    }

    public function xiugai($id){
		$result=db('product')->where('id',$id)->find();

		 $this->assign('data', $result);
		// 渲染模板输出
		return $this->fetch();
    }

    public function saveedit(){
         $newSeller = new Seller;
          $newSeller=Seller::get(input('post.id'));

      if($newSeller->save(input('post.'))!==false){
       $this->success('数据修改成功！',url('depot'));
      }else{
        $this->error('修改数据失败！');
      }

    }

	public function search(){
		$map['type']  = ['like','%'.input('type').'%'];
	    $map['name']  = ['like','%'.input('name').'%'];
	    $this->assign('type', input('type'));
	    $this->assign('name',input('name'));

		// 数据分页，每页显示3条数据
		$list = Db::name('product')->where($map)
		->paginate(3,false,['query' => request()->param()]);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		return $this->fetch('depot');
	}

	public function ruku($id){
		
		$result=db('product')->where('id',$id)->find();

		 $this->assign('data', $result);
		// 渲染模板输出
		return $this->fetch();

        return view();
    }
    public function creatin($id){
	    $newSeller = new Seller;
	    $con=input('upnumber');
	    // dump($id);
	    // exit;
	    $list=Db::name("product")->where('id',$id)->setInc('number',$con);
		/*if( $newSeller->save(input('post.'))){
		        $this->success('数据插入成功！',url('depotin'));
		}*/
		if($list){
			$this->success('库存增加成功！',url('depotin'));
		}else{
			$this->success('库存增加失败！',url('ruku'));
		}
	}

    public function chuku($id){
    	$result=db('product')->where('id',$id)->find();

		 $this->assign('data', $result);
		// 渲染模板输出
		return $this->fetch();

        return view();
    }
    public function creatout($id){
	    $newSeller = new Seller;
	     $con=input('downnumber');
	     $list=Db::name("product")->where('id',$id)->setDec('number',$con);
		if($list){
			$this->success('库存减少成功！',url('depotout'));
		}else{
			$this->success('库存减少失败！',url('chuku'));
		}
	}

}

?>