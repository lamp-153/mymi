@extends('admin.base.base')
@section('title','小米后台 - 添加商品')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-add-contact"></i> 添加商品信息</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form wzd-ajax" action="{{ URL('admin/goods') }}" method="post" enctype='multipart/form-data'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
                 <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label">
                        @if(session('msg'))
                            <i class="icol-cross"></i><span style='color:red'>　{{ session('msg') }}</span>
                        @else
                            <i class="icol-accept"></i><span class="required"> 　* </span> 必填项
                        @endif
                    </legend>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品类别</label>
                        <div class="mws-form-item">
                            <select name='pid' class="large">
                                <option value=''>---请选择---</option>
                                @foreach($list as $user)
                                <option value='{{ $user->id }}'>{{ $user->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品名称 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_name" class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品价格 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_price" class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品LOGO<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="file" name="goods_img" class="required">
                            <label for="picture" class="error" generated="true" style="display:none"></label>
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">商品库存 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_stock" class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品状态 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li>
                                    <input type="radio" id="male" name="is_onsale" value='1'/> <label for="male">上架　</label>
                                    <input type="radio" id="female" name="is_onsale" value='0'/> <label for="female">下架 </label>
                                </li>
                            </ul>
                            <label class="error plain" generated="true" for="gender" style="display:none"></label>
                        </div>
                    </div>
                </fieldset>
                <div class="mws-button-row">
                    <input type="submit" value='添加' class="btn">
                    <input type="reset" value="重置" class="btn">
                </div>
            </form>
        </div>
    </div>
@endsection
