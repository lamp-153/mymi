<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/colorpicker/colorpicker.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/imgareaselect/css/imgareaselect-default.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jgrowl/jquery.jgrowl.css') }}" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/ptsans/stylesheet.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/icomoon/style.css') }}" media="screen">

<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/mws-style.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icons/icol16.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icons/icol32.css') }}" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/demo.css') }}" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/jui/css/jquery.ui.all.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/jui/css/jquery.ui.timepicker.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/jui/jquery-ui.custom.css') }}" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/mws-theme.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themer.css') }}" media="screen">

<title>MWS Admin - Widgets</title>

</head>

<body>


                        	
                        	<input type="button" id="mws-form-dialog-mdl-btn" class="btn btn-success" value="Show Modal Form">
                            
                            <div id="mws-form-dialog">
                                <form id="mws-validate" class="mws-form" action="form_elements.html">
                                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                    <div class="mws-form-inline">
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Required Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" name="reqField" class="required">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Email Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" name="emailField" class="required email">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">URL Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" name="urlField" class="required url">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Date Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker required date" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Select Box Validation</label>
                                            <div class="mws-form-item">
                                                <select class="required" name="selectBox">
                                                    <option></option>
                                                    <option>Option 1</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">File Input Validation</label>
                                            <div class="mws-form-item">
                                                <input type="file" name="picture" class="required">
                                                <label for="picture" class="error" generated="true" style="display:none"></label>
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Spinner Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" id="s1" name="spinner" class="required mws-spinner" value="10.5">
                                                <label for="s1" class="error" generated="true" style="display:none"></label>
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Radiobutton Validation</label>
                                            <div class="mws-form-item">
                                                <ul class="mws-form-list">
                                                    <li><input id="gender_male" type="radio" name="gender" class="required"> <label for="gender_male">Male</label></li>
                                                    <li><input id="gender_female" type="radio" name="gender"> <label for="gender_female">Female</label></li>
                                                </ul>
                                                <label for="gender" class="error plain" generated="true" style="display:none"></label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                
      

    <!-- JavaScript Plugins -->
    <script src="{{ asset('admin/js/libs/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('admin/js/libs/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('admin/js/libs/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/custom-plugins/fileinput.js') }}"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="{{ asset('admin/jui/js/jquery-ui-1.9.2.min.js') }}"></script>
    <script src="{{ asset('admin/jui/jquery-ui.custom.min.js') }}"></script>
    <script src="{{ asset('admin/jui/js/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('admin/jui/js/timepicker/jquery-ui-timepicker.min.js') }}"></script>

    <!-- Plugin Scripts -->
    <script src="{{ asset('admin/plugins/imgareaselect/jquery.imgareaselect.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jgrowl/jquery.jgrowl-min.js') }}"></script>
    <script src="{{ asset('admin/plugins/validate/jquery.validate-min.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/colorpicker-min.js') }}"></script>

    <!-- Core Script -->
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/mws.js') }}"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="{{ asset('admin/js/core/themer.js') }}"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="{{ asset('admin/js/demo/demo.widget.js') }}"></script>

</body>
</html>
