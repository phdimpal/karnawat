<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Karnawat Admin - Login</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{ voyager_asset('global/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('admin/pages/css/login-soft.css') }}" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ voyager_asset('global/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ voyager_asset('admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
	<!----CUSTOME CSS------>
	<link href="{{ voyager_asset('admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>

	<link id="style_color" href="{{ voyager_asset('admin/layout/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css"/>
    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css')}}">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
   

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    
</head>
<body class="login" >
<div class="logo">
	<h1>KARNAWAT MARBLES</h1>
</div>
<div class="menu-toggler sidebar-toggler">
</div>

<div class="content" style="background:url({{voyager_asset('admin/pages/img/bg-white-lock.png')}}) repeat; ">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="{{ route('voyager.login') }}" method="post">
	 {{ csrf_field() }}
		<h3 class="form-title"><p>{{ __('voyager::login.signin_below') }}</p></h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">{{ __('voyager::generic.email') }}</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">{{ __('voyager::generic.password') }}</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
			</div>
		</div>
		<div class="form-actions">
			 <button type="submit" class="btn btn-block login-button">
                        <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                        <span class="signin">{{ __('voyager::generic.login') }}</span>
             </button>
		</div>
		
		
	</form>
	@if(!$errors->isEmpty())
	<div class="alert alert-red">
	<ul class="list-unstyled">
		@foreach($errors->all() as $err)
		<li>{{ $err }}</li>
		@endforeach
	</ul>
	</div>
	@endif
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>

<script src="{{ voyager_asset('global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ voyager_asset('global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ voyager_asset('global/plugins/select2/select2.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ voyager_asset('global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ voyager_asset('admin/pages/scripts/login-soft.js')}}" type="text/javascript"></script>

</body>
</html>
