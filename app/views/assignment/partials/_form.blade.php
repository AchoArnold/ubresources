<div class="form-group">
 {{Form::label('title','Title')}}
 {{Form::text('title',null, array('class'=>'form-control', 'placeholder' => 'The title goes here', 'maxlength' => '100', 'required' => 'true'))}}
</div>
<div class="form-group">
 {{Form::label('content','Content')}}
 {{HTML::decode(Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Please enter the contents of the article','required' => 'true', 'size'=>'40x20', 'oninput'=> "toggle_button(this,'post-content')")))}}
</div>
<div class="text-center">
   {{Form::submit('Post Content', array('id'=>'post-content','disabled'=>'true', 'class' => 'btn btn-success'))}}
</div>