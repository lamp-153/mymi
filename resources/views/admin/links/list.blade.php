@extends('admin.base.base')
@section('title','小米后台 - 友情链接列表')
@section('content')

	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>
                <i class="icon-network"></i> 友情链接列表
            </span>
        </div>
        <form name='delForm' action="{{ URL('admin/links') }}" method='post'>
            <input type='hidden' name='_token' value='{{ csrf_token()}}'/>
            <input type='hidden' name='_method' value='delete'/>
        </form>

        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>链接名称</th>
                        <th>链接地址</th>
                        <th>链接LOGO</th>
                        <th>链接状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody style='text-align:center'>
                	@foreach($list as $user)
                    <tr id="{{ $user->id }}">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->links_name }}</td>
                        <td>
                            <a href="{{ $user->links_url }}" style='color:#777777'>{{ $user->links_url }}</a>
                        </td>
                        <td><img src="{{ asset('uploads/links') }}/{{ $user->links_logo }}"/></td>
                        <td>{{ ($user->links_state == 1)?'开启':'关闭' }}</td>
                        <td>
                            <span class="btn-group">
                                <a href='{{ URL("admin/links/$user->id/edit") }}' class="btn btn-small"><i class="icon-pencil" title='修改'></i></a>
                                <a href="javaScript:doDel({{ $user->id}})" class="btn btn-small"><i class="icon-trash" title='删除'></i></a>
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
        function doDel(id){

            if(confirm('确定删除？')){
                var form = document.delForm;

                //获取在表单中生成的_token值。
                var _tokens = form._token.value;
                $.ajax({
                    url:"{{ URL('admin/links') }}/"+id,
                    type:"post",
                    //因为在blade模板中，我们是通过两个input标签发送两个值到路由中，一个值是_token，一个值是伪方法delete。这两个值的名字一个是_method，一个是_token。所以我们在JS中定义两个变量，一个名：_token，一个名：_method。_method的值为：delete,_token的值是在HTML表单中生成的csrf_token()值。然后将两个值发送过去即可。
                    data:{_token:_tokens,_method:'delete'},
                    dataType:'html',
                    async:true,
                    success:function(data){
                        if(data>0){
                            //删除对应行
                            $('#'+id).remove();
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
