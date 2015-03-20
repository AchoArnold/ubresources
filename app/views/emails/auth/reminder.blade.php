<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			<p>
				To reset your password, fill the following form : {{HTML::link('password/reset/'.$token, URL::to('password/reset', array($token)) ) }}
			</p>
			<p>
				Alternatively, you can copy and past the following link on your browser:<br>
				<br>
				{{ URL::to('password/reset', array($token)) }}.
			</p>
			<br>
			Thanks
		</div>
	</body>
</html>