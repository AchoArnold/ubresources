@extends('/layouts/default')
@include('account/partials/_header')

@section('head')
  <meta name="description" content="Assignments for the various classes taken at the university of Buea">
@stop
@section('header')
   <h1>Account</h1>
   <p>Easily edit your UB Resources profile</br>Be awesome!</p>
@stop


@section('head')
	<meta name="description" content="Reset your UB Reources password here">
@stop

@section('content')
      <div class=" col-md-8 col-md-push-4 panel panel-success active">
              <div class="panel-body">
                <h2 class="text-center">Reset Password for <span class="text-warning">{{$user->username}} ({{$user->email}})</span></h2>
                <br>  
                {{Form::open(array('method' =>'POST','id' =>'change_password', 'onsubmit' => 'validate_reset_password(event)','route' => 'password.postreset' ))}}

                {{Form::hidden('token', $token)}}
                {{Form::hidden('email', $user->email)}}
              <div class="form-group">
                {{Form::label('New Password', null, array('class' => 'control-label'))}}
                {{Form::password('password',array('class'=>'form-control', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                {{Form::label('Repeat Password', null, array('class' => 'control-label'))}}
                {{Form::password('password_confirmation',array('class'=>'form-control', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                <div class="text-center">
                    {{HTML::link('/gist', 'Home', array('class'=>'btn btn-primary'))}}
                  <button type="submit" class="btn btn-success">Save<span class="glyphicon glyphicon-floppy-save"></span></button>
                </div>
              </div>
          {{Form::close()}}
      </div>
@stop