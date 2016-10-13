<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩

class InfoController extends Controller
{
    //显示个人信息页面
    public function info()
    {
      // 获取当前登录用户的信息   用where条件
    	$list = \DB::table('store_user')->where('id','=',session('user')->id)->first();
  		// 显示个人信息页面
    	return view("info",['list'=>$list]);
    }

    //显示修改用户头像页面
    public function update()
    {
      // 获取当前登录用户的信息   用where条件
      $list = \DB::table('store_user')->where('id','=',session('user')->id)->first();
      // 显示修改用户头像页面
      return view("portrait",['list'=>$list]);

    }

  //===============执行修改用户头像=================//
    public function doUpdate($id,Request $request)
    {
    	/***************上传图片********************/
    	//1. 获得上传文件的对象 返回一个UploadedFile对象 
      	if($request->file('user_avatar')){
      		$file = $request->file('user_avatar');
      	}else{
      		//小于等于0时，修改失败，跳转到上一页面。
    		return back()->with('msg','请选择图片');
      	}
	     //2. 执行上传
      	   //判断是否上传成功
	    if($file->isValid()){
	        //获文件的后缀名
	        $ext = $file->getClientOriginalExtension(); 
	        //生成一个新的文件名
	        $filename = time().rand(1000,9999).".".$ext;
	        //将这个文件移动到指定目录
	        $file->move("./uploads/user/",$filename);
	    }else{
	    	//修改失败，跳转到上一页面。
    		return back()->with('msg','请填写完整信息');
	    }
      	//3.图片缩放
      	$img = Image::make("./uploads/user/".$filename)->resize(50,50);
      	//4.另存为
      	$img->save("./uploads/user/s_".$filename);
      	//5.删除上传的图片
      	unlink("./uploads/user/".$filename);
      	//6.输出
      	//return $img->response("jpg");

  //====================执行修改======================//
    	//1.获取到修改的信息
    	$user = $request->only('user_avatar');
    	$user['user_avatar'] = 's_'.$filename; 
    	//2.执行修改
    	$m = \DB::table('store_user')->where('id',$id)->update($user);
    	//3.判断影响函数
    	if($m > 0){
    		//大于0时，修改成功，重定向到个人信息页面
    		return redirect('info');
    	}else{
    		//小于0时，修改失败，跳转到上一页面
    		return back()-with('msg','修改失败');
    	}
    }

  //==============显示修改用户基本资料页面==============//
    public function data()
    {
      // 获取当前登录用户的信息   用where条件
      $list = \DB::table('store_user')->where('id','=',session('user')->id)->first();
      // 显示修改用户基本资料页面
      return view("data",['list'=>$list]);

    }

  //=============== 修改用户基本信息 =====================//
    public function doData($id,Request $request)
    {	
    	//1.获得form表单传过来要修改的数据
    	$info = $request->only('user_realname','user_pass','user_sex');
         // dd($info);
    	//2.执行修改
    	$ob = \DB::table('store_user')->where('id',$id)->update($info);
    	//3.判断影响函数
    	if($ob > 0){
    		//大于0时，修改成功，重定向到个人信息页面
    		return redirect('info');
    	}else{
    		//小于0时，修改失败，跳转到上一页面
    		return back()-with('msg','修改失败');
    	}
    	
    }
}
