<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="post">
        @csrf
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
				<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='button' onclick="location.href='/register';" value="Sign up"></input></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<br>

	

	<br>

    {{session('msg')}}

	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

</body>
</html>
