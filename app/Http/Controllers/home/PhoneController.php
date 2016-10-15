<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;//使用第三方扩展实现图片压缩

class PhoneController extends Controller
{
    //显示商品详情的页面
    public function phone($id)
    {
    	//获取商品详情表中当前选中的详细信息
		$list = \DB::table('store_goods')
	      ->join('store_goods_info','store_goods.id','=','store_goods_info.goods_id')
	      ->select('store_goods.*','store_goods_info.*')
	      ->where('goods_id', $id)->get();
	    // $list = $db->where('goods_id',$id);
          // echo '<pre>';
          // print_r($list);die();

        $lists = \DB::table('store_goods')->where('is_onsale',1)->take(8)->get();

    	// 显示商品详情页面
    	return view('home/phone')->with(['list'=>$list,'lists'=>$lists]);
    }
}
