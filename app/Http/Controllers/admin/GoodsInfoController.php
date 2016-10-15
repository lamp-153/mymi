<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsInfoController extends Controller
{
    /*******************商品详情列表********************/
    public function show($id)
    {   
    	//1.获取表中所有商品详情
    	$db = \DB::table('store_goods_info')
	      ->join('store_goods','store_goods_info.goods_id','=','store_goods.id')
	      ->select('store_goods_info.*','store_goods.goods_name')
	      ->get();
      	$list = $db->where('goods_id','=',$id);
    	//2.跳转视图，并将用户信息带上
    	return view('admin.goods.goodsInfo',['list'=>$list]);
    }

    /****************跳转到修改页面*****************/
    public function edit($id)
    {	
    	//1.获取到要修改的商品详情信息
    	$db = \DB::table('store_goods_info')
        ->join('store_goods','store_goods_info.goods_id','=','store_goods.id')
        ->select('store_goods_info.*','store_goods.goods_name')
        ->get();
      $list = $db->where('id','=',$id);
    	//2.跳转视图，并将商品信息带上
    	return view('admin.goods.infoEdit',['list'=>$list]);
    }

    /*******************执行修改********************/
    public function update($id,Request $request)
    {	
    	/***************上传图片********************/
    	  //1. 获得上传文件的对象 返回一个UploadedFile对象 
      	if($request->file('goods_info_img')){
      		$file = $request->file('goods_info_img');
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
      	/***************执行修改********************/
      	//1.获取到修改的信息
      	$user = $request->only('goods_info_type','goods_info_message','goods_info_price','goods_info_img','goods_info_color');
      	$user['goods_info_img'] = $filename;
          //2.执行修改，返回影响行数
      	$m = \DB::table('store_goods_info')->where('id',$id)->update($user);
      	//3.判断影响行数
      	if($m > 0){
      		//大于0时，修改成功，重定向到商品列表
      		return redirect("admin/goodsInfo/{$request['goods_id']}");
      	}else{
      		//小于等于0时，修改失败，跳转到上一页面。
      		return back()->with('msg','修改失败');
      	}
    }

    /*******************执行删除********************/
    public function destroy($id)
    {
    	//1.执行删除，返回影响行数
    	$m = \DB::table('store_goods_info')->where('id',$id)->delete();
    	return($m);
    }

    /****************跳转到添加页面*****************/
    public function infoAdd($id)
    {	
      //1.获取要添加详情的商品
      $list = \DB::table('store_goods')->where('id',$id)->first();
      //2.跳转视图，并将商品信息带上
      return view('admin.goods.infoAdd',['list'=>$list]);
    }

    /*******************执行添加********************/
    public function store(Request $request)
    {  
    	//1.判断要添加的商品详情是否存在
    	if(!$request->has('goods_id','goods_info_type','goods_info_message','goods_info_price','goods_info_color')){
    		//要添加的商品信息不存在时，跳转到上一页面。
    		return back()->with('msg','请输入完整信息');
    	}
    	/***************上传图片********************/
    	//1. 获得上传文件的对象 返回一个UploadedFile对象 
    	if($request->file('goods_info_img')){
    		$file = $request->file('goods_info_img');
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

    	/*******************执行添加********************/
      //1.获取到要添加的信息
	    $data = $request->only('goods_id','goods_info_type','goods_info_message','goods_info_price','goods_info_img','goods_info_color');
	    $data['goods_info_img'] = $filename;
      //2.执行添加，获取最大id值
  		$id = \DB::table('store_goods_info')->insertGetId($data);
  		//4.判断是否添加成功
  		if($id > 0){
  			//添加成功，跳转到用户列表
  			return redirect("admin/goodsInfo/{$data['goods_id']}");
  		}else{
  			//添加失败，跳转到上一页面
  			return back()->with('msg','添加失败');
  		}
    }
}
