<?php
	
	namespace App\Models;

	use Illuminate\Datebase\Eloquent\Model;

	use Illuminate\Http\Request;


	class User extends Model
	{
		//1.指定和user model类 关联的表名
		protected $table = 'user';

		//2.执行数据库的验证
		public function checkUser(Request $request)
		{
			//1.验证用户名密码是否正确
			//1.接收表单的值
			$name = $request->input('userName');
			$pass = $request->input('password');

			//2.用户名是否存在
			$db = \DB::table('user')->where("name",$name)->first();
			// dd($db);
			if($db){
				if($db->password == $pass){
				return $db;   //返回当前对象
				}
			}
			return null;     //用户名  密码不存在都返回空
		}
	}