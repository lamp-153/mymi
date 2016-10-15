@extends('admin.base.base')
@section('title','小米后台 - 评论管理')
@section('content')

	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>
                <i class="icon-user"></i> 评论管理
            </span>
        </div>
        <form name='myform' action="" method='post'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <input type='hidden' name='_method' value='delete'>
        </form>

        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                <thead>
                    <tr>
                        <th>评论编号</th>
                        <th>商品ID</th>
                        <th>用户ID</th>
                        <th>评论时间</th>
                        <th>评论内容</th>
                        <th>评论分类</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody style='text-align:center'>
                	@foreach($list as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->goods_id }}</td>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->comment_time }}</td>
                        <td>{{ $user->comment_content }}</td>
                        <td>{{ $user->comment_classify }}</td>
                        <td>
                            <span class="btn-group">
                                <a href="/admin/comment/{{ $user->id }}" class="btn btn-small"><i class="icon-pencil" title='点击可回复'></i></a>
                                <a href="javaScript:doDel({{ $user->id }})" class="btn btn-small"><i class="icon-trash" title='删除'></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /*********ajax用户评论删除***********/
        function doDel(id){
            if(confirm('确定删除？')){
                //获取form表单节点对象
                var form = document.myform;
                //获取在表单中生成的_token值。
                var _tokens = myform._token.value;
                $.ajax({
                    url:"{{ URL('/admin/comment/list') }}/"+id,
                    type:"post",
                    //因为在blade模板中，我们是通过两个input标签发送两个值到路由中，一个值是_token，一个值是伪方法delete。这两个值的名字一个是_method，一个是_token。所以我们在JS中定义两个变量，一个名：_token，一个名：_method。_method的值为：delete,_token的值是在HTML表单中生成的csrf_token()值。然后将两个值发送过去即可。
                    data:{_token:_tokens,_method:'delete'},
                    dataType:'html',
                    async:true,
                    success:function(data){
                        if(data>0){
                            //删除对应行
                            $('td:contains('+id+')').parents('tr').remove();
                            alert('删除成功');
                        }else{
                            alert('删除失败');
                        }
                    },
                    error:function(){
                        alert('系统错误');
                    }
                });
            }
        }
    </script>
@endsection
