@extends('admin.base.base')
@section('title','小米后台 - 友情链接添加')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-tools"></i> 添加友情链接</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form wzd-ajax" action="{{ URL('admin/links') }}" method="post" enctype='multipart/form-data'>
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
                        <label class="mws-form-label">链接名称 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="links_name" value='' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">链接地址 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="links_url" value='http://' class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">链接LOGO<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="file" name="links_logo" value='' class="required">
                            <label for="picture" class="error" generated="true" style="display:none"></label>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">链接状态 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li>
                                    <input type="radio" id="male" name="links_state" value='1'/> <label for="male">开启　</label>
                                    <input type="radio" id="female" name="links_state" value='0'/> <label for="female">关闭 </label>
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
