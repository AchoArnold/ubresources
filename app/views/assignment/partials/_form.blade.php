<div class="form-group">
 {{Form::label('content','Content')}}
 {{HTML::decode(Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Please enter the contents of the article','required' => 'true', 'size'=>'40x20','id' =>  'assignment-body')))}}
</div>

<div class="form-group">
 {{Form::label('given_at','Given At')}}
 {{Form::text('given_at',null, array('class'=>'form-control', 'placeholder' => 'The time at which the assignment was given', 'maxlength' => '100', 'required' => 'true'))}}
</div>


<div class="form-group">
 {{Form::label('due_at','Due At')}}
 {{Form::text('due_at',null, array('class'=>'form-control', 'placeholder' => 'The time at which the assignment is due', 'maxlength' => '100', 'required' => 'true'))}}
</div>

<div class="form-group">
 {{Form::label('course_id','Course code')}}
 {{Form::text('course_id',null, array('class'=>'form-control', 'placeholder' => 'Course codes separated by a comma "," ', 'maxlength' => '100', 'required' => 'true'))}}
</div>