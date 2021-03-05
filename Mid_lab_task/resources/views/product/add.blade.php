@extends('layout.nav_bar')

@section('main_content')
    <fieldset>
        <legend> Add new product</legend>
        <form method="post">
            @csrf
            <table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="id"></td>
				</tr>
                <tr>
					<td>Product Name: </td>
					<td><input type="text" name="product_name"></td>
				</tr>
                <tr>
					<td>Category: </td>
					<td>
						<select name='category'>
							<option value="medical"> Medical </option>
							<option value="stationary"> Stationary </option>
							<option value="grocery"> Grocery </option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Quantity: </td>
					<td><input type="text" name="quantity"></td>
				</tr>
                <tr>
					<td>Unit Price: </td>
					<td><input type="text" name="unit_price"></td>
				</tr>
                <tr>
					<td>Status: </td>
                    <td> 
						<select name='status'>
							<option value="available"> Available </option>
							<option value="upcomming" > Upcomming </option>
						</select>	
					</td>					    
				</tr>
                <tr>
                <tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add product"></td>
				</tr>

                </tr>
        </form>
	{{session('msg')}}

	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </fieldset>
	
@endsection