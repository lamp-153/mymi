<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /*******************管理员列表********************/
    public function index()
    {       	
    	//1.获取表中所有用户信息
    	$list = \DB::table('store_user')->whereIn('user_type',['0','1'])->get();
    	$list->type = session('adminuser')->user_type;
    	//2.跳转视图，并将用户信息带上
    	return view('admin.admin.list',['list'=>$list]);
    }

    /****************跳转到修改页面*****************/
    public function edit($id)
    {	
    	//1.获取到要修改的用户信息
    	$user = \DB::table('store_user')->where('id',$id)->first();
    	//2.跳转视图，并将用户信息带上
    	return view('admin.admin.edit',['user'=>$user]);
    }

    /*******************执行修改********************/
    public function update($id,Request $request)
    {	
    	//1.获取到修改的信息
    	$user = $request->only('user_realname','user_pass','user_email','user_integral','user_sex','user_state','user_type');
        //2、判断密码是否相同
        if($request['pass'] != $user['user_pass']){
            //修改失败，跳转到上一页面
            return back()->with('msg','密码不相同');
        }
        //3.执行修改，返回影响行数
    	$m = \DB::table('store_user')->where('id',$id)->update($user);
    	//4.判断影响行数
    	if($m > 0){
    		//大于0时，修改成功，重定向到用户列表
    		return redirect('admin/admin');
    	}else{
    		//小于等于0时，修改失败，跳转到上一页面。
    		return back()->with('msg','修改失败');
    	}
    }

    /*******************执行删除********************/
    public function destroy($id)
    {	
    	//1.执行删除，返回影响行数
    	$m = \DB::table('store_user')->where('id',$id)->delete();
    	return($m);
    }

    /****************跳转到添加页面*****************/
    public function create()
    {	
    	$type = session('adminuser')->user_type;
    	return view('admin.admin.add')->with('type',$type);
    }

    /*******************执行添加********************/
    public function store(Request $request)
    {   
    	//1.判断要添加的用户信息是否存在
    	if($request->has('user_name','user_realname','user_pass','pass','user_sex','user_email','user_integral','user_state','user_time','user_type')){
            //2.获取到要添加的信息
    		$data = $request->only('user_name','user_realname','user_pass','user_sex','user_email','user_integral','user_state','user_time','user_type');
            //3、判断用户名是否已经存在
            $db = \DB::table('store_user')->where('user_name',$data['user_name'])->first();
            if($db){
                //用户名存在，跳转到上一页面
                return back()->with('msg','用户名已存在');
            }
            //4、判断密码是否相同
    		if($request['pass'] != $data['user_pass']){
                //添加失败，跳转到上一页面
                return back()->with('msg','密码输入错误');
            }
            //3.执行添加，获取最大id值
    		$id = \DB::table('store_user')->insertGetId($data);
    		//4.判断是否添加成功
    		if($id > 0){
    			//添加成功，跳转到用户列表
    			return redirect('admin/admin');
    		}else{
    			//添加失败，跳转到上一页面
    			return back()->with('msg','添加失败');
    		}
    	}else{
    		//要添加的用户信息不存在时，跳转到上一页面。
    		return back()->with('msg','请输入完整信息');
    	}
    }
}
