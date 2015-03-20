@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Sign in to your accound at UB Resources">
@stop
@section('header')
	 <h1>Reset Password</h1>
	 <p>Reset the password to your account at UB Resources</p>
@stop

@section('content')
	<div class="sign-in col-md-6 col-md-push-3">
		<div class="panel panel-warning active">
			<div class="panel-heading">
				<h2 class="text-center">Reset password</h2>
			</div>
			<div class="panel-body">
				<p class="text-info">
					To reset your password, enter the email address, or username you use to sign in.
				</p>
				{{Form::open(array('method' =>'POST', 'route' => 'password.postremind' ))}}
					<div class="form-group">
						 {{Form::text('email',null, array('class'=>'form-control', 'placeholder' => 'Please enter your email address here', 'maxlength' => '32',  'required' => 'true'))}}
					</div>
					<div class="text-center">
						 {{Form::submit('Next', array( 'class' => 'btn btn-warning'))}}
					</div>
				{{Form::close()}}
		 	</div>
		</div>
	</div>
@stop