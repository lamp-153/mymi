@extends('admin.base.base')
@section('title','小米后台 - 商品详情修改')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-tools"></i> 修改商品详情</span>
        </div>
        <div class="mws-panel-body no-padding">
            @foreach( $list as $list)
            <form class="mws-form wzd-ajax" action='{{ URL("admin/goodsInfo/$list->id") }}' method="post" enctype='multipart/form-data'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
                <input type='hidden' name='_method' value='put'/>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label">
                        @if(session('msg'))
                            <i class="icol-cross"></i><span style='color:red'>　{{ session('msg') }}</span>
                        @else
                            <i class="icol-accept"></i><span class="required"> 　* </span> 必填项
                        @endif
                    </legend>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品名称</label>
                        <div class="mws-form-item">
                            <input type="text" value='{{ $list->goods_name }}' disabled class="required large">
                             <input type='hidden' name='goods_id' value='{{ $list->goods_id }}'/>
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品版本 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_info_type" value='{{ $list->goods_info_type }}' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">版本信息 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_info_message" value='{{ $list->goods_info_message }}' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品价格<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_info_price" value='{{ $list->goods_info_price }}' class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品图片<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="file" name="goods_info_img" value='' class="required">
                            <label for="picture" class="error" generated="true" style="display:none"></label>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品颜色 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li>
                                    <input type="text" id="male" name="goods_info_color" value="{{ $list->goods_info_color }}"/>
                                </li>
                            </ul>
                            <label class="error plain" generated="true" for="gender" style="display:none"></label>
                        </div>
                    </div>
                </fieldset>
                <div class="mws-button-row">
                    <input type="submit" value='修改' class="btn">
                    <input type="reset" value="重置" class="btn">
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection
