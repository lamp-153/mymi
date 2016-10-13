<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



//上传头像页面
Route::get('admin/uplode',function(){
	return view('admin.uplode');
});
//执行上传头像
Route::post('admin/doUplode','DemoController@doUplode');
//验证码路由配置
Route::get("home/captcha/{tmp}","DemoController@captcha");






/**************前台首页路由配置*******************/
////前台首页路由配置
Route::get('/','home\LoginController@index');
//前台用户登录表单
Route::get('home/login','home\LoginController@login');
//执行用户登录
Route::post('home/dologin','home\LoginController@dologin');

//前台用户注册路由
Route::get('home/register','home\LoginController@register');
//执行注册路由
Route::post('home/doregister','home\LoginController@doRegister');
//退出登录
Route::get("home/logout","home\LoginController@logout");
//  个人信息页面
Route::get("info","home\InfoController@info");
// 修改用户头像页面
Route::get('update',"home\InfoController@update");

// 执行头像修改页面
Route::post('doUpdate/{id}',"home\InfoController@doUpdate");

//跳到修改个人资料页面
Route::get('data',"home\InfoController@data");
//执行修改个人资料页面
Route::post('doData/{id}',"home\InfoController@doData");

//商品详情信息页面
Route::get('phone',"home\PhoneController@phone");


/***********************后台路由配置开始*********************/
	//1、后台登录表单
	Route::get('admin/login', function () {
    	return view('admin.login');
	});
	//2、执行登录处理
	Route::post('admin/dologin','admin\LoginController@doLogin');
	//3、验证码
	Route::get('admin/captcha/{tmp}','admin\LoginController@captcha');

	//后台界面 需要登录才能访问的内容 
	Route::group(["prefix"=>"admin","middleware"=>"myauth"], function () {
		//跳转到主页面
		Route::get('index','admin\LoginController@index');
		//提交退出处理
		Route::get('logout','admin\LoginController@logout');

		/*************后台用户管理路由配置****************/
		Route::resource('user','admin\UserController');

		/************后台管理员管理路由配置***************/
		Route::resource('admin','admin\AdminController');

		/*************后台友情链接路由配置****************/
		Route::resource('links','admin\LinksController');

		/***************后台分类别路由配置****************/
		Route::resource('category','admin\CategoryController');

		/*************后台商品类别路由配置****************/
		Route::resource('goods','admin\GoodsController'); 
	});	



