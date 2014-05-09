<h3>Errors and Suggestions || UB resources</h3>
<ul>
	<li>From : {{$email}}</li>
	<li>Name: @if(isset($name)){{$name}} @endif</li>
	<li>Telephone: @if(isset($telephone)){{$telephone}} @endif</li>
	<li>Message: <br/>
		<p>
			{{$mail_content}}
		</p>
	</li>
</ul>