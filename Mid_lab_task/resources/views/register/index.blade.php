<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <h1>Registration Page</h1>
</head>
<body>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Register </legend>
			<table>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
                <tr>
					<td>User Name: </td>
					<td><input type="text" name="user_name" value="{{old('user_name')}}"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Confirm Password: </td>
					<td><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"></td>
				</tr>
				<tr>
					<td>Full Name: </td>
					<td><input type="text" name="full_name" value="{{old('full_name')}}"></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>Country: </td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>
				<tr>
					<td>City: </td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
				</tr>
				<tr>
					<td>Company: </td>
					<td><input type="text" name="company" value="{{old('citcomapnyy')}}"></td>
				</tr>
				<tr>
					<td>Role</td>
					<td>
						<select name='role'>
							<option value="Admin"> Admin </option>
							<option value="Accountant"> Accountant </option>
                            <option value="Customer"> Customer </option>
                            <option value="Sales"> Sales and Marketing </option>
                            <option value="Vendor"> Vendor </option>
                            <option value="Partner"> Partner </option>
                            
						</select>
					</td>
				</tr>	               
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	{{session('msg')}}

	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    
</body>
</html>