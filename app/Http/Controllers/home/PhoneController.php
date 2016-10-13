<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩

class PhoneController extends Controller
{
    //显示商品详情的页面
    public function phone()
    {
    	//获取商品详情表中当前选中的详细信息
        // $list = \DB::table('store_goods')->where('id','=',session('user')->id)->first();
        $list = \DB::table('store_goods')->get();
        // dd($list);
    	// 显示商品详情页面
    	return view('phone',['list'=>$list]);
    }
}
