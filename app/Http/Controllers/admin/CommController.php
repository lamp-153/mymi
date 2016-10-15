<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommController extends Controller
{
    //************评论管理列表***************/
    public function index()
    {   
    	//1.获取评论表中所有信息
    	$list = \DB::table('store_comment')->get();
    
    	//跳转视图
    	return view('admin.comment.list',['list'=>$list]); 
    }

    public function store()
    {
    	//获得评论回复的用户id，回复时间，回复内容
    	$data = \DB::table('store_reply')->insertGetid([
    		'comment_id'=>$_POST['comment_id'],
    		'reply_time'=>$_POST['reply_time'],
    		'reply_content'=>$_POST['reply_content']
    		]);
   		return $data;
    }

    // 查询单条数据
    public function show($id)
    {
    	//查询出评论表中当前查看的数据
    	$data = \DB::table('store_comment')->where('id','=',$id)->first();
   		//查询出回复表中的数据
    	$list = \DB::table('store_reply')->where('comment_id',$id)->get();
    	if($list){
    		return view('admin.comment.look',['data'=>$data,'list'=>$list]);
    	}
    	$list[] = '还没有回复';
    	return view('admin.comment.look',['data'=>$data,'list'=>$list]);
    }

    //删除评论
    public function destroy($id)
    {
    	Comment::destroy($id);
    	$data = \DB::table('store_comment')->where('comment_id',$id)->delete();
    	return $data;
    }
}
