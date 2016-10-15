<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩


class GoodsController extends Controller
{
    /*******************商品列表********************/
    public function index()
    {   
    	//1.获取表中所有商品信息
    	$list = \DB::table('store_goods')
      ->join('store_category','store_goods.pid','=','store_category.id')
      ->select('store_goods.*','store_category.category_name')
      ->get();
    	//2.跳转视图，并将用户信息带上
    	return view('admin.goods.list',['list'=>$list]);
    }

    /****************跳转到修改页面*****************/
    public function edit($id)
    {	
      /*$db = \DB::table('store_goods')
        ->join('store_category','store_goods.pid','=','store_category.id')
        ->select('store_goods.*','store_category.category_name')
        ->get();
      $list = $db->where('id','=',$id);*/

    	//1.获取到要修改的商品信息
    	$goods = \DB::table('store_goods')->where('id',$id)->first();
      //2.获取商品父类信息。
    	$pid = \DB::table('store_category')->where('pid',0)->get();
    	//2.跳转视图，并将商品信息带上
    	return view('admin.goods.edit')->with(['user'=>$goods,'pid'=>$pid]);
    }

    /*******************执行修改********************/
    public function update($id,Request $request)
    {	
    	/***************上传图片********************/
    	  //1. 获得上传文件的对象 返回一个UploadedFile对象 
      	if($request->file('goods_img')){
      		$file = $request->file('goods_img');
      	}else{
      		//修改失败，跳转到上一页面。
    		 return back()->with('msg','请选择图片');
      	}
	      //2. 执行上传
  	    if($file->isValid()){
	        //获得后缀
	        $ext = $file->getClientOriginalExtension(); 
	        //生成一个新的文件名
	        $filename = time().rand(1000,9999).".".$ext;
	        //将这个文件移动到指定目录
	        $file->move("./uploads/goods/",$filename);
  	    }else{
  	    	//修改失败，跳转到上一页面。
      		return back()->with('msg','请填写完整信息');
  	    }
      	//3.图片等比例缩放
      	$img = Image::make("./uploads/goods/".$filename)->resize(40,40,function($constraint) {
          	$constraint->aspectRatio();
          	$constraint->upsize();
      	});
      	//4.另存为
      	$img->save("./uploads/goods/s_".$filename);

      	/***************执行修改********************/
      	//1.获取到修改的信息
      	$user = $request->only('pid','goods_name','goods_price','goods_img','goods_stock','is_onsale');
      	$user['goods_img'] = $filename;
          //2.执行修改，返回影响行数
      	$m = \DB::table('store_goods')->where('id',$id)->update($user);
      	//3.判断影响行数
      	if($m > 0){
      		//大于0时，修改成功，重定向到商品列表
      		return redirect('admin/goods');
      	}else{
      		//小于等于0时，修改失败，跳转到上一页面。
      		return back()->with('msg','修改失败');
      	}
    }

    /*******************执行删除********************/
    public function destroy($id)
    {
    	//1.执行删除，返回影响行数
    	$m = \DB::table('store_goods')->where('id',$id)->delete();
    	return($m);
    }

    /****************跳转到添加页面*****************/
    public function create()
    {	
    	$list = \DB::table('store_category')->where('pid','0')->get();
    	return view('admin.goods.add')->with('list',$list);
    }

    /*******************执行添加********************/
    public function store(Request $request)
    {   
    	//1.判断要添加的商品信息是否存在
    	if(!$request->has('pid','goods_name','goods_price','goods_stock','is_onsale')){
    		//要添加的商品信息不存在时，跳转到上一页面。
    		return back()->with('msg','请输入完整信息');
    	}
    	/***************上传图片********************/
    	//1. 获得上传文件的对象 返回一个UploadedFile对象 
    	if($request->file('goods_img')){
    		$file = $request->file('goods_img');
    	}else{
    		//小于等于0时，修改失败，跳转到上一页面。
  		return back()->with('msg','请选择图片');
    	}
	     //2. 执行上传
	    if($file->isValid()){
	        //获得后缀
	        $ext = $file->getClientOriginalExtension(); 
	        //生成一个新的文件名
	        $filename = time().rand(1000,9999).".".$ext;
	        //将这个文件移动到指定目录
	        $file->move("./uploads/goods/",$filename);
	    }else{
	    	//修改失败，跳转到上一页面。
    		return back()->with('msg','请填写完整信息');
	    }
    	//3.图片缩放
    	$img = Image::make("./uploads/goods/".$filename)->resize(40,40,function($constraint) {
          	$constraint->aspectRatio();
          	$constraint->upsize();
      	});
    	//4.另存为
    	$img->save("./uploads/goods/s_".$filename);

    	/*******************执行添加********************/
      //1.获取到要添加的信息
	    $data = $request->only('pid','goods_name','goods_price','goods_stock','is_onsale','goods_img');
	    $data['goods_img'] = $filename;
      //2、判断商品名称是否已经存在
      $db = \DB::table('store_goods')->where('goods_name',$data['goods_name'])->first();
      if($db){
        //用户名存在，跳转到上一页面
        return back()->with('msg','商品名称已存在');
      }
      //3.执行添加，获取最大id值
  		$id = \DB::table('store_goods')->insertGetId($data);
  		//4.判断是否添加成功
  		if($id > 0){
  			//添加成功，跳转到用户列表
  			return redirect("admin/infoadd/{$id}");
  		}else{
  			//添加失败，跳转到上一页面
  			return back()->with('msg','添加失败');
  		}
    }
}
