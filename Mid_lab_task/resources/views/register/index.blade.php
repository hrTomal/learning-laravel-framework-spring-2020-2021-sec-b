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
					<td><input type="text" name="email"></td>
				</tr>
                <tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password"></td>
				</tr>
				
				<!-- <tr>
					<td>Role: </td>
					<td><input type="text" name="role"></td>
				</tr> -->

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
    
</body>
</html>