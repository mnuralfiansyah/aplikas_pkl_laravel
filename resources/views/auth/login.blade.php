@extends('admin.content.master')

@section('content')
<body class="hold-transition login-page">
<div id="app">
	<div class="login-box">
	  <div class="login-logo">
		<a href="../../index2.html"><b>Aplikasi </b>SIPeKaL</a>
	  </div>
	  <!-- /.login-logo -->
	  <div class="login-box-body">
		<p class="login-box-msg">Silahkan Login</p>

		<form method="POST" action="{{ route('login') }}">

			{{ csrf_field() }}

		  <div class="form-group has-feedback">
			<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Password" name="password" required>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
		  </div>
		  <div class="row">
			<div class="col-xs-8">
			  <div class="checkbox icheck">
				<label>
				  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
				</label>
			  </div>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
			  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
			</div>
			<!-- /.col -->
		  </div>
		</form>

		<!-- <div class="social-auth-links text-center">
		  <p>- OR -</p>
		  <a href="{{route('login-fb')}}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
			Facebook</a>
		  <a href="{{route('login-google')}}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
			Google+</a>
		</div> -->
		<!-- /.social-auth-links -->

		<a href="lupapassword">Lupa Password</a><br>
		Belum Punya Akun ?<a href="{{route('register')}}" class="text-center"> Daftar</a>

	  </div>
	  <!-- /.login-box-body -->
	</div>
</div>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@endsection
