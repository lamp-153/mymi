@extends('admin.base.base')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-add-contact"></i> 上传头像</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form wzd-ajax" action="{{ URL('admin/doUplode') }}" method="post" enctype='multipart/form-data'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label">
                        @if(session('msg'))
                            <i class="icol-cross"></i><span style='color:red'>　{{ session('msg') }}</span>
                        @else
                            <i class="icol-accept"></i> Member Profile
                        @endif
                    </legend>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">上传头像 <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="file" name="mypic" placeholder="上传头像">
                        </div>
                    </div>
                </fieldset>
                <div class="mws-button-row">
                    <input type="submit" value='上传' class="btn">    
                    <input type="reset" value='重置' class="btn">
                </div>
            </form>
        </div>
    </div>
@endsection
