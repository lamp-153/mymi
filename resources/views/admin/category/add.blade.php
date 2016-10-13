@extends('admin.base.base')
@section('title','小米后台 - 添加分类')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-add-contact"></i> 添加分类</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form wzd-ajax" action="{{ URL('admin/category') }}" method="post">
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
                        <label class="mws-form-label">分类名 <span class="required"></span></label>
                        <div class="mws-form-item">
                            <input type="text" name="category_name" class="required large">
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
