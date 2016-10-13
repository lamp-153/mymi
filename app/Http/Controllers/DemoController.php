<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use Gregwar\Captcha\CaptchaBuilder; //验证码
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩

class DemoController extends Controller
{
    public function captcha($tmp)
    {
      //生成验证码图片的Builder对象
	    $builder = new CaptchaBuilder;
      // 可以设置图片的宽高及字体
	    $builder->build(130,50);
      //获取验证码的内容
      $phrase = $builder->getPhrase();

      //把内容存入session
      Session::flash('code',$phrase);

      return response($builder->output())->header('Content-Type','image/jpeg');
    }

   	public function doUplode(Request $request)
   	{
      //1. 获得上传文件的对象 返回一个UploadedFile对象 
      $file = $request->file('mypic');

      //2. 执行上传
      if($file->isValid()){
        //获得后缀
        $ext = $file->getClientOriginalExtension(); 
        //生成一个新的文件名
        $filename = time().rand(1000,9999).".".$ext;
        //将这个文件移动到指定目录
        $file->move("./uploads/",$filename);
      }

      //3.图片等比例缩放
      $img = Image::make("./uploads/".$filename)->resize(100,100,function($constraint) {
                          $constraint->aspectRatio();
                          $constraint->upsize();
                      });
      //4.另存为
      $img->save("./uploads/s_".$filename);
      //5.删除上传的图片
      unlink("./uploads/".$filename);
      //6.输出
      return $img->response("jpg");
    }
}
