@extends('../layouts/master')

@secion('header')
	@if(isset($breed))
		{{ HTML::link('/', 'Back to the over view') }}
	@endif
	<h2>
		All @if(isset($breed)) {{ $breed->name }} @endif Cats
		{{ HTML::link('cats/create', 'Add a new cat', array('class'=>'btn btn-primary pull-right'))}}
	</h2>
@stop

@section('content')
	@foreach($cats as $cat)
		<div class="cat">
			<a href="{{url('cats/'.$cat->id)}}">
				<strong> {{{$cat->name}}} </strong> - {{{$cat->breed->name}}}
			</a>
		</div>
	@endforeach
@stop