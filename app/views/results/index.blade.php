@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="First Semester Results for the academic year 2014/2015 University of Buea">
@stop

@section('header')
  <h1>Results</h1>
  <p>Easily view your results online as soon as they are released no matter where you are.
	</p>
@stop

@section('content')

	@if (! Auth::user()->profile)
		<div class="text-center">
			<h1>
				Please complete your profile so we can determine your results based on your profile information.
			</h1>
			<a href="{{URL::to('account/edit')}}" class="btn btn-warning btn-lg">Edit Profile <span class="glyphicon glyphicon-hand-right"></a>
		</div>

	@else

		@if ( count($courses))
			<h3 class="text-center">First semester results for <em>{{Auth::user()->profile->name}}</em> with matriculation number: <b><span class="text-info">{{Auth::user()->profile->matriculation}}</span></b></h3>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Course Code</th>
		            <th>Course Title</th>
		            <th>Credit Value</th>
		            <th>CA Mark</th>
						<th>Exam Mark</th>
						<th>Total</th>
						<th>Grade</th>
					</tr>
				</thead>
				<tbody>
					@foreach($courses as $course)
						<tr>
							<td>{{ $course->short_name }}</td>
							<td>{{ $course->name }}</td>
							<td>{{ $course->credit_value }}</td>
							<td>{{ $course->ca }}</td>
							<td>{{ $course->exam }}</td>
							<td>{{ $course->ca + $course->exam }}</td>
							<td>{{ $course->grade }}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		@else
			<h1 class="text-center">
				Sorry we do not have your results
				<br>
				<span class="text-danger">yet!</span>
			</h1>
		@endif
	@endif
@stop