<div class="text-right">
  <div>
    {{HTML::link('gist/create', 'New Article', array('class' => 'btn btn-success ', 'target' =>'_blank'))}}
    @if (Request::segment(2) && Request::segment(2) != 'create')
    	{{HTML::link(Request::url().'/edit', 'Edit', array('class' => 'btn btn-default'))}}
    	{{Form::open(array('method' =>'DELETE',  'route' => ['gist.destroy', $gist->gist_uri] , 'class' => "navbar-right inline-form"))}}
    		{{Form::submit('Delete', array('id'=>'Delete', 'class' => 'btn btn-default'))}}
		{{ Form::close() }}
    @endif
  </div>
</div>