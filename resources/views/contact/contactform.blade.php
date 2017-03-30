<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>New Contact Form Submitted!</h1>
<p>Name: {{ $newmessage->name}}</p>
<p>Email: {{ $newmessage->email}}</p>
<p>Message: {{ $newmessage->message}}</p>
</body>
</html>