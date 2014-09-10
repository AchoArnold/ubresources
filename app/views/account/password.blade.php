@extends('/layouts/default')
@include('account/side-nav')
@include('account/partials/_header')

@section('head')
	<meta name="description" content="Change your UB Reources password here">
@stop

@section('content')
      <div class="panel panel-success active">
              <div class="panel-body">
                <h2 class="text-center nice-header">Change password for {{Auth::user()->username}}</h2>
                {{Form::open(array('method' =>'POST','id' =>'change_password', 'onsubmit' => 'validate_change_password(event)',  'url' => Request::path() ))}}
              <div class="form-group">
                {{Form::label('Old Password', null, array('class' => 'control-label'))}}
                {{Form::password('old_password',array('class'=>'form-control', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                {{Form::label('New Password', null, array('class' => 'control-label'))}}
                {{Form::password('password',array('class'=>'form-control', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                {{Form::label('Repeat Password', null, array('class' => 'control-label'))}}
                {{Form::password('confirm_password',array('class'=>'form-control', 'maxlength' => '32'))}}
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