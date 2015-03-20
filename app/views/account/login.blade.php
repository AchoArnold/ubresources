@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Sign in to your accound at UB Resources">
@stop
@section('header')
   <h1>Sign in</h1>
   <p>Log in to your account at UB Resources</p>
@stop

@section('content')
	<div class="sign-in col-md-6 col-md-push-3">
		<div class="panel panel-primary active">
     		<div class="panel-heading">
     			<h2 class="text-center">Sign in</h2>
     		</div>
          <div class="panel-body">
             {{Form::open(array('method' =>'POST', 'url' => Request::path() ))}}
                <div class="form-group">
                   {{Form::label('Username or Email Address')}}
                   {{Form::text('username',null, array('class'=>'form-control', 'placeholder' => 'Username or email address here', 'maxlength' => '32',  'required' => 'true'))}}
                </div>
                <div class="form-group">
                   {{Form::label('Password')}} {{link_to_route('password.remind', '(Forgot Password)')}}
                   {{Form::password('password', array('class'=>'form-control', 'placeholder' => 'Enter your password', 'maxlength' => '32',  'required' => 'true'))}}
                </div>
                <div class="sign-in-btn">
                   {{Form::submit('Login', array( 'class' => 'btn btn-success'))}}
                </div>

                <div class="text-right sign-up-link">
                	Don't have an account? {{link_to_route('user.create', 'Sign up')}}
                </div>
             {{Form::close()}}
         </div>
      </div>
	</div>
@stop