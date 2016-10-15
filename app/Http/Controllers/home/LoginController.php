<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;    
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;//使用验证码的类
use App\Models\Users;//使用自定义的model类

class LoginController extends Controller
{
    //让前台页面显示
    public function index()
    {
       //1.获取到商品信息
        $goods = \DB::table('store_goods')->where('is_onsale',1)->get();
        //2.获取商品父类信息。
        $pid = \DB::table('store_category')->get();
        //3.获取友情链接表中所有的信息
        $list = \DB::table('store_links')->get();
        //4.显示前台页面
        return view('home.index')->with(['goods'=>$goods,'pid'=>$pid,'link'=>$list]);

    }

    //前台用户登录表单
    public function login()
    {
        //跳到登录页面
        return view('home.login');
    }

    //执行登录
    public function dologin(Request $request)
    {
        // 1.接收表单的值
            $name = $request->input('user_name');
            $pass = $request->input('user_pass');

            //2.用户名是否存在
            $ob = \DB::table('store_user')->where("user_name",$name)->first();

            if($ob){
                //3 密码
                if($ob->user_pass==$pass && $ob->user_state == 1 ){
                    //31用户存在并且密码正确，存入session 名为user
                    session()->set("user",$ob);
                    //32跳转到前台首页
                    return redirect("/");
                }else{
                    return back()->with("msg","密码错误");
                }
            }else{
                return back()->with("msg","用户名不存在");
            }
    }

     //3 执行退出 
        public function logout()
        {
            //清空session  忘记用户信息
            session()->forget("user");
            //实现页面跳转
            return redirect("/");
        }



        //前台用户注册页面显示
        public function register()
        {
            //跳到注册页面
            return view('home.register');
        }

        //执行注册
        public function doRegister(Request $request)
        {
            //  获得本来的验证码
                $mycode = session()->get("code");
               
               //判断输入的验证码和原来的验证码是否相同
                if($mycode!=$request->input('user_code')){
                    return back()->with("msg","验证码错误");//后退
                    // session()->flash("msg","验证码错误");//写入错误信息
                    }

           //1.接收表单的值
                $name = $request->input('user_name');      //获取用户名
                $pass = $request->input('user_pass');        // 获取密码
                $password = $request->input('user_password'); // 获取确认密码
                $code = $request->input('user_code');         //获取验证码
                $time = $request->input('user_time');         // 获得注册的时间戳

            //2.以用户名获取整条用户信息
                $db = \DB::table('store_user')->where('user_name',$name)->first();

                // 将用户信息存到session的adminuser下标中
                 session("adminuser",$db);

             //3.判断用户是否存在于数据库
             if (empty($db)){
                $id = \DB::table('store_user')->insert(
                     ['user_name' =>$name, 'user_pass' => $pass, 'user_time' => $time]
                    ); 
            }else{
                //用户名验证失败跳转到上一个页面
                return back()->with("msg","用户名已存在");  
            }
            
            if($pass == $password){
                return redirect("/home/login");
            }else{
                return back()->with("msg","密码错误");
            }
           
        }

  
    
        // 验证码
        public function captcha($tmp)
        {
            //生成验证码图片的Builder对象，配置相应属性
            $builder = new CaptchaBuilder;
            //可以设置图片宽高及字体
            $builder->build($width = 100, $height = 40, $font = null);
            //获取验证码的内容
            $phrase = $builder->getPhrase();

            //把内容存入session
            // Session::flash('code', $phrase); //类调用方法
            session()->flash('code',$phrase);

            return response($builder->output())->header('Content-Type','image/jpeg');
        }

}