@extends('admin.base.base')
@section('title','小米后台 - 评论回复')
@section('content')

	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>
                <i class="icon-user"></i> 评论回复
            </span>
        </div>
        <div class="mws-panel-body no-padding">
            <form name='myform' action="/admin/comment/list" method='post'>
                <input type='hidden' name='_token' value='{{ csrf_token()}}'/>
                <input type='hidden' name='_method' value='delete'/>
            </form>
            <fieldset class="wizard-step mws-form-inline">
                <legend class="wizard-label">
                    <i class="icol-accept"></i><span class="required"> * </span><b style="color:red;">评论信息</b> 
                </legend>
                <div id class="mws-form-row">
                    <label class="mws-form-label">评论编号 </label>
                    <div class="mws-form-item">
                        <input type="text" name="id" class="required large" value="{{ $data->id }}" style="width:1000px" disabled>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">商品ID  </label>
                    <div class="mws-form-item">
                        <input type="text" name="goods_id" class="required large" value="{{ $data->goods_id }}" style="width:1000px" disabled>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">用户ID  </label>
                    <div class="mws-form-item">
                        <input type="text" name="user_id" value='{{ $data->user_id }}' class="required large" style="width:1000px" disabled>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">评论时间  </label>
                    <div class="mws-form-item">
                        <input type="text" name="comment_time" value='{{ $data->comment_time }}' class="required large" style="width:1000px" disabled>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">评论内容 </label>
                    <div class="mws-form-item">
                        <input type="text" name="comment_content" value='{{ $data->comment_content }}' class="required large" style="width:1000px" disabled>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">评论类别 </label>
                    <div class="mws-form-item">
                        <input type="text" name="comment_classify" value='{{ $data->comment_classify }}' class="required large" style="width:1000px" disabled>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
     <!-- 遍历评论回复 -->
    @foreach($list as $v)
    <div class="mws-form-row">
        <label class="mws-form-label">{{ $v->reply_time }}回复</label>
        <div class="mws-form-item">
            <div class="mws-form-row" type="text" name="comment_class" value="" disabled>{!! $v->reply_content !!}</div>
        </div>
    </div>
    @endforeach
    <div class="mws-form-row" id="area">
        <label class="mws-form-label">回复评论</label>
        <div class="mws-form-item">
            <textarea id="cleditor" class="large" name="reply_content"></textarea>
        </div>
    </div>
    <div class="mws-button-row">
        <input value="回复" class="btn btn-danger" type="button" onclick="dosubmit(this)">
    </div> 
@endsection
