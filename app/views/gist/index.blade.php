@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Get updated with what's happening in the university of Buea">
@stop
@section('header')
    <h1>Gist</h1>
          <p>Get updated with what's happening in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
@stop

@section('content')
	<article class="gist-post">
   <h3>Official School Reopening</h3>
   <p class="post-date">Posted on 9<sup>th</sup> October 2013</p>
   <p>The official reopening date for the start of classes this  2013/2014 academic year is the <strong>14<sup>th</sup> of October 2013</strong>. Matriculation shall take place three weeks later on the 2<sup>nd</sup> of November. Please do check out the  official school calender at <a href="http://ubuea.cm/ub-academic-calendar/r">http://ubuea.cm/ub-academic-calendar/</a> for the dates of other important events
   </p>
   <div class="social-buttons">
     <ul>
       <li><a href="">Twitter</a></li>
       <li><a href="">Google+</a></li>
       <li><a href="">facebook</a></li>
     </ul>
   </div>
   </article>
@stop