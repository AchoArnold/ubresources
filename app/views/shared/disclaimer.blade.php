@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="About Us at UBresources">
@stop
@section('header')
   <h1>Disclaimer</h3>
   <p>Where we stand with respect to the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</p>
@stop

@section('content')
	<h3>The content of this website is provided in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
    </h3>

    <h3>
      Any content found on this entire site SHOULD NOT is not in any way associated with the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}
      </h3>
@stop