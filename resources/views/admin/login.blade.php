<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	Hello
	<form method="POST" action="{{ route('admin.login') }}">
		@csrf
		<input type="email" name="email">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>
</body>
</html>