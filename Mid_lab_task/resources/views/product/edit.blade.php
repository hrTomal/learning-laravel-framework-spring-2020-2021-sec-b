@extends('layout.nav_bar')

@section('main_content')
    <fieldset>
        <form method="post">
            @csrf
            <table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="id" value="{{ $product['id'] }}" readonly></td>
				</tr>
                <tr>
					<td>Product Name: </td>
					<td><input type="text" name="product_name" value="{{ $product['product_name'] }}" ></td>
				</tr>
                <tr>
					<td>Category: </td>
					<td>
						<select name='category'>
							<option value="medical" @if($product['category'] == 'medical') selected @endif> Medical </option>
							<option value="stationary" @if($product['category'] == 'stationary') selected @endif> Stationary </option>
							<option value="grocery" @if($product['category'] == 'grocery') selected @endif> Grocery </option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Quantity: </td>
					<td><input type="text" name="quantity" value="{{ $product['quantity'] }}" ></td>
				</tr>
                <tr>
					<td>Unit Price: </td>
					<td><input type="text" name="unit_price" value="{{ $product['unit_price'] }}" ></td>
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
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>

                </tr>
        </form>
    </fieldset>


@endsection