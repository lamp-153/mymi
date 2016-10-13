<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder; //验证码

class LoginController extends Controller
{	
    /**************************执行登录**************************/
    public function doLogin(Request $request)
    {   
        /*****************判断验证码*******************/
        //1、获取session中的验证码
        $mycode = session()->get("code");
        //2、判断验证码是否相同
        if($mycode!=$request->input('code')){
            //验证码不同后退到上一页面
            return back()->with("msg","验证码错误");
        }

        /**************判断状态、权限****************/
        //1.接收用户名、密码
        $name = $request->input('user_name');
        $pass = $request->input('user_pass');
        //2.以用户名获取整条用户信息
        $db = \DB::table('store_user')->where('user_name',$name)->first();
        
        /**************判断用户名、密码****************/
    	//3.判断用户信息
    	if($db) {
    		//4.验证密码和验证码
    		if ($db->user_pass == $pass) {
                //5、 判断用户状态及权限信息
                if($db->user_state == 1 && ($db->user_type == 0 || $db->user_type == 1)){
        			//6.将用户信息存入到session的adminuser下标中
        			session()->set('adminuser',$db);
        			//7.验证成功跳转到后台首页
        			return redirect("admin/index");
                }
                //用户状态及权限验证失败跳转到上一个页面
                return back()->with('msg','无权限访问');
    		}
    	}
    	//用户名、密码验证失败跳转到上一个页面
    	return back()->with('msg','用户名或密码错误');
    }

    /*********************跳转到首页************************/
    public function index()
    {   
        //跳转到后台首页
        return view('admin.index');  
    }

    /************************验证码*************************/
    public function captcha($tmp)
    {   
        //1、生成验证码图片的builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //2、可以设置图片宽高及字体
        $builder->build($width = 115,$height = 40,$font = null);
        //3、获取验证码的内容
        $phrase = $builder->getPhrase();
        //4、把内容存放到session中
        session()->flash('code',$phrase);
        //5、返回一个图片
        return response($builder->output())->header('Content-type','image/jpeg');
    }

    /***********************执行退出************************/
    public function logout(Request $request)
    {
    	//1.清空session
    	session()->forget('adminuser');
    	//2.跳转到登录页面
    	return redirect('admin/login');
    }
}
