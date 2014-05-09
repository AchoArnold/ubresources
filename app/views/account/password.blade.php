@extends('/layouts/default')
@include('account/side-nav')

@section('head')
	<meta name="description" content="Change your UB Reources password here">
@stop

@section('content')
      <div class="panel panel-success active">
              <div class="panel-body">
              @if (Session::has('message'))
            <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
            {{Session::get('message')}}
          </div>
      @endif
       @if(Session::has('error'))
          <div class="alert alert-danger fade in" id="validate_alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <p>
              @if(!is_object(Session::get('error')))
                {{Session::get('error')}}
              @else
                @foreach (Session::get('error')->all() as $error)
                        <div>{{ $error }}</div>
                @endforeach
              @endif
              </p>
          </div>
       @endif

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