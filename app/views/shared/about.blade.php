@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="About Us at UBresources">
@stop
@section('header')
   <h1>What is this?</h3>
   <p>Who are we and what is this website for</p>
@stop

@section('content')
	<h2>What is UB Resources?</h2>
  	<p>UB resources is a website with the sole goal of providing students in  the {{HTML::link('http://www.ubuea.cm','University Of Buea')}} with  some basic but very useful resources which are essential to complete the learning experience.</p>
  	<h2>How has it been realised?</h2>
  	<p>UB resources was started by  the {{HTML::link('//elitepogrammingclub.tk', 'Elite Programming Club', array('target'=>'_blank'))}} but it is open source and its source code can be found on  {{HTML::link('//github.com','link to github')}}.
  		The list of  all the contributors  coupled with their specific contributions to this website project can be found at {{HTML::link('//github.com', 'link to contributors')}}</p>
  	<p>This website is developed using the twitter {{HTML::link('http://www.getbootstrap.com','bootstrap framework')}} and {{HTML::link('//laravel.com', 'Laravel')}}.<br/>
  	This website is hosted for free by {{HTML::link('//secret-ninja.fr', 'Secret Ninja')}} </p>
@stop