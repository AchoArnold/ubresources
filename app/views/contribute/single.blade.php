@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
      <meta name="description" content="Easily contribute to the UBresources website">
@stop

@section('header')
           <h1>Contribute</h1>
           <p>
            	@unless($tab == 'errors')
             		Help our database of {{$tab}} grow by submitting yours here
             	@else
             		Join us in making this website more enriching and error free
             	@endif
             	<br />
             	Its amazing how others can benefit from your contribution.
           </p>
@stop

@section('content')
    <div>
      <ul class="nav nav-tabs nav-justified">
       <li @if($tab == 'past questions')class='active'@endif>
       		{{HTML::link('contribute/past-questions', 'Past Questions')}}
       	</li>
       <li @if($tab == 'timetables')class='active'@endif>
       		{{HTML::link('contribute/timetables', 'Timetables' )}}
       	</li>
       <li @if($tab == 'course outlines')class='active'@endif>
       		{{HTML::link('contribute/course-outlines', 'Course Outline')}}
       	</li>
       <li @if($tab == 'errors')class='active'@endif>
       		{{HTML::link('contribute/errors', 'Errors and Suggestions')}}
       	</li>
      </ul>
    </div>

	@if(Session::has('error'))
          <div class="alert alert-danger fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <p>
    			@foreach (Session::get('error')->all() as $error)
                          <div>
                            {{ $error }}
                          </div>
                  @endforeach
          </p>
       </div>
	@endif

	@if (Session::has('message'))
  			<div class="alert alert-success fade in">
      		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         	<strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
				{{Session::get('message')}}
 			</div>
 	@endif


  @unless($tab == 'errors')
		<h3>Instructions</h3>
		  <ul>
		    <li>To ensure that you don't submit a file which has already been submitted check the list of submitted {{{$tab}}} {{HTML::link($link,'here')}}</li>
		    <li>Please submit your question papers in <strong>odf, doc, or docx</strong> format so that it can easily be edited if need be <em>(Please  Please do not submit files in pdf format!)</em></li>
		    <li>Any document submitted is bounded by the <a href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License version 1.3 or later</a></li>
		  </ul>
		  <h3>How to submit</h3>
		  <ul>
		  <li>You can submit question papers by sending it as an email attachment to <a href="support@ubresources.com" target="_blank">support@ubresources.com</a> or</li>
		  <li>You can also use our <a data-toggle="modal" href="#basicUploadModal"> Basic Uploader</a></li>
		</ul>
		
  @else
	<div class="error-form">
        {{Form::open( array('method' => 'post', 'url' => Request::url()))}}
    	   <div class="form-group">
    	    {{Form::label('Email Address (optional)')}}
    	    {{Form::email('email',null, array('class'=>'form-control', 'placeholder' => 'Enter your email address here', 'maxlength' => '32'))}}
    	  </div>
    	  <div class="form-group">
      	{{Form::label('Description')}}
      	{{HTML::decode(Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Please enter your message briefly', 'maxlength' => '500', 'required' => 'true', 'size'=>'30x7', 'oninput'=> "toggle_button(this,'submit-message')")))}}
    	  </div>
          <div class="text-center">
    	    {{Form::submit('Submit message', array('id'=>'submit-message','disabled'=>'true', 'class' => 'btn btn-success'))}}
          </div>
	 {{Form::close()}}
  	</div>
  @endif

  @unless($tab == 'errors')
      <div class="modal fade" id="basicUploadModal" tabindex="-1" role="dialog" aria-labelledby="basicUploadModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="modal-title text-center">Please submit your {{$tab}}  here</h3>
            </div>
            <div class="modal-body">
              {{Form::open(array('id'=>'upload_form',  'files'=> true,'onsubmit' => 'validate_upload(event)','method' => 'post', 'url' => Request::url()))}}
                <div class="form-group  has-feedback">
                  {{Form::label('Full Name (required)', null, array('class' => 'control-label'))}}
                  {{Form::text('name',null, array('pattern'=>'[a-z A-Z]+','class'=>'form-control', 'placeholder' => 'Your full name goes here', 'maxlength' => '32', 'required' => 'true'))}}
                </div>
                <div class="form-group has-feedback">
                  {{Form::label('Email Address (optional)', null, array('class' => 'control-label'))}}
                  {{Form::email('email',null, array('class'=>'form-control', 'placeholder' => 'Enter your email address here', 'maxlength' => '32'))}}
                </div>
                <div class="form-group has-feedback">
                  {{Form::label('Select file to upload (required)', null, array('class' => 'control-label'))}}
                  {{Form::file('upload_file', array('class'=>'form-control', 'data-max-size' =>"5120", 'required' => 'true'))}}
                  <p class="help-block">Please read instructions before submitting the file</p>
                </div>
                <div class="checkbox">
                  <label>
                    {{Form::checkbox('terms',null,true,array('id'=>'terms'))}}
                    I agree to the <a href="http://www.gnu.org/copyleft/fdl.html">terms and conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Upload File<span class="glyphicon glyphicon-upload"></span></button>
                </div>
              {{Form::close()}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
	@endif
@stop