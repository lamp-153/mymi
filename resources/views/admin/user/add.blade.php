@extends('admin.base.base')
@section('title','小米后台 - 添加用户')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-add-contact"></i> 添加用户信息</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form wzd-ajax" action="{{ URL('admin/user') }}" method="post">
                <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
                <input type='hidden' name='user_time' value="<?php echo time(); ?>">
                 <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label">
                        @if(session('msg'))
                            <i class="icol-cross"></i><span style='color:red'>　{{ session('msg') }}</span>
                        @else
                            <i class="icol-accept"></i><span class="required"> 　* </span> 必填项
                        @endif
                    </legend>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">用户名 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="user_name" class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">真实姓名 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="user_realname" class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">密码 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="password" name="user_pass" value='' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">确认密码 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="password" name="pass" value='' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">email <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="user_email" value='' class="required large">
                        </div>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">积分 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="user_integral" value='' class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">性别 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li>
                                    <input type="radio" id="male" name="user_sex" value='1'/> <label for="male">男　</label>
                                    <input type="radio" id="female" name="user_sex" value='0'/> <label for="female">女</label>
                                </li>
                            </ul>
                            <label class="error plain" generated="true" for="gender" style="display:none"></label>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">状态 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li>
                                    <input type="radio" id="male" name="user_state" value='1'/> <label for="male">可用　</label>
                                    <input type="radio" id="female" name="user_state" value='0'/> <label for="female">禁用 </label>
                                </li>
                            </ul>
                            <label class="error plain" generated="true" for="gender" style="display:none"></label>
                        </div>
                    </div>
                </fieldset>
                <div class="mws-button-row">
                    <input type="submit" value='添加' class="btn">
                    <input type="reset" value='重置' class="btn">
                </div>
            </form>
        </div>
    </div>
@endsection
