@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Sign in to your accound at UB Resources">
@stop
@section('header')
   <h1>Sign in</h1>
   <p>Log in to your account at UB Resources</p>
@stop

@section('content')
	 @if(Session::has('error'))
          <div class="alert alert-danger fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <p>
              @if(is_object(Session::get('error')))
                @foreach (Session::get('error')->all() as $error)
                      <p>{{ $error }}</p>
                @endforeach
              @else
                  <span class="glyphicon glyphicon-remove"></span>{{Session::get('error')}}
              @endif
              </p>
          </div>
       @endif

      @if (Session::has('message'))
            <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <span class="glyphicon glyphicon-ok-circle"></span>
            {{Session::get('message')}}
          </div>
      @endif
		<div class="sign-in">
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
                    {{Form::label('Password')}}
                    {{Form::password('password', array('class'=>'form-control', 'placeholder' => 'Enter your password', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>
                  <div class="text-center">
                      {{Form::submit('Login', array( 'class' => 'btn btn-success'))}}
                  </div>
               {{Form::close()}}
              </div>
            </div>
		</div>
@stop