@section('side-nav')
<div class="col-md-3">
<div class="list-group side-nav">
    <a href="{{URL::to('gist')}}" class="list-group-item
    @if (Request::is('gist*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Gist</a>
    <a href="{{URL::to('timetables')}}" class="list-group-item
    @if (Request::is('timetable*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Timetables</a>
      <a href="{{URL::to('assignment')}}" class="list-group-item
      @if (Request::is('assignment*'))
        active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
      @else
        ">
      @endif
      Assignments</a>
    <a href="{{URL::to('past-questions')}}" class="list-group-item
    @if (Request::is('past-questions*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Past Questions</a><!--
    <a href="{{URL::to('results')}}" class="list-group-item
    @if (Request::is('results*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Results</a>-->
    <a href="{{URL::to('gpa-calculator')}}" class="list-group-item
    @if (Request::is('gpa-calculator*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    GPA Calculator</a>
    <a href="{{URL::to('course-outline')}}" class="list-group-item
    @if (Request::is('course-outline*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Course Outline</a>
    <a href="{{URL::to('useful-links')}}" class="list-group-item
    @if (Request::is('useful-links*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Useful Links</a>
    <a href="{{URL::to('contribute')}}" class="list-group-item
    @if (Request::is('contribute*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Contribute</a>
    <a href="{{URL::to('help-desk')}}" class="list-group-item
    @if (Request::is('help-desk*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Help Desk</a>
  </div>
  </div>
@stop