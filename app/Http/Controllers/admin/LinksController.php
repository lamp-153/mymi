<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩

class LinksController extends Controller
{
    /*******************友情链接列表********************/
    public function index()
    {   
    	//1.获取表中所有用户信息
    	$list = \DB::table('store_links')->get();
    	//2.跳转视图，并将用户信息带上
    	return view('admin.links.list',['list'=>$list]);
    }

    /****************跳转到修改页面*****************/
    public function edit($id)
    {	
    	//1.获取到要修改的用户信息
    	$list = \DB::table('store_links')->where('id',$id)->first();
    	//2.跳转视图，并将用户信息带上
    	return view('admin.links.edit',['list'=>$list]);
    }

    /*******************执行修改********************/
    public function update($id,Request $request)
    {	
    	/***************上传图片********************/
    	  //1. 获得上传文件的对象 返回一个UploadedFile对象 
      	if($request->file('links_logo')){
      		$file = $request->file('links_logo');
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
	        $file->move("./uploads/links/",$filename);
  	    }else{
  	    	//修改失败，跳转到上一页面。
      		return back()->with('msg','请填写完整信息');
  	    }
      	//3.图片缩放
      	$img = Image::make("./uploads/links/".$filename)->resize(30,30);
      	//4.另存为
      	$img->save("./uploads/links/s_".$filename);
      	//5.删除上传的图片
      	unlink("./uploads/links/".$filename);
      	//6.输出
      	//return $img->response("jpg");

      	/***************执行修改********************/
      	//1.获取到修改的信息
      	$user = $request->only('links_name','links_url','links_logo','links_state');
      	$user['links_logo'] = 's_'.$filename;
          //2.执行修改，返回影响行数
      	$m = \DB::table('store_links')->where('id',$id)->update($user);
      	//3.判断影响行数
      	if($m > 0){
      		//大于0时，修改成功，重定向到用户列表
      		return redirect('admin/links');
      	}else{
      		//小于等于0时，修改失败，跳转到上一页面。
      		return back()->with('msg','修改失败');
      	}
    }

    /*******************执行删除********************/
    public function destroy($id)
    {
    	//1.执行删除，返回影响行数
    	$m = \DB::table('store_links')->where('id',$id)->delete();
    	return($m);
    }

    /****************跳转到添加页面*****************/
    public function create()
    {	
    	return view('admin.links.add');
    }

    /*******************执行添加********************/
    public function store(Request $request)
    {   
    	//1.判断要添加的链接信息是否存在
    	if(!$request->has('links_name','links_url','links_state')){
    		//要添加的用户信息不存在时，跳转到上一页面。
    		return back()->with('msg','请输入完整信息');
    	}
    	/***************上传图片********************/
    	//1. 获得上传文件的对象 返回一个UploadedFile对象 
    	if($request->file('links_logo')){
    		$file = $request->file('links_logo');
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
        $file->move("./uploads/links/",$filename);
	    }else{
	    	//修改失败，跳转到上一页面。
    		return back()->with('msg','请填写完整信息');
	    }
    	//3.图片缩放
    	$img = Image::make("./uploads/links/".$filename)->resize(30,30);
    	//4.另存为
    	$img->save("./uploads/links/s_".$filename);
    	//5.删除上传的图片，保留了缩放之后的图片
    	unlink("./uploads/links/".$filename);

    	/*******************执行添加********************/
      //1.获取到要添加的信息
	    $data = $request->only('links_name','links_url','links_logo','links_state');
	    $data['links_logo'] = 's_'.$filename;
      //2、判断链接名称是否已经存在
      $db = \DB::table('store_links')->where('links_name',$data['links_name'])->first();
      if($db){
        //用户名存在，跳转到上一页面
        return back()->with('msg','链接名称已存在');
      }
      //3.执行添加，获取最大id值
  		$id = \DB::table('store_links')->insertGetId($data);
  		//4.判断是否添加成功
  		if($id > 0){
  			//添加成功，跳转到用户列表
  			return redirect('admin/links');
  		}else{
  			//添加失败，跳转到上一页面
  			return back()->with('msg','添加失败');
  		}
    }
}
