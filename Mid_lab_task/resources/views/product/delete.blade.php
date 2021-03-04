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
					<td><input type="text" name="product_name" value="{{ $product['product_name'] }}" readonly></td>
				</tr>
                <tr>
					<td>Category: </td>
					<td><input type="text" name="category" value="{{ $product['category'] }}" readonly></td>
				</tr>
                <tr>
					<td>Quantity: </td>
					<td><input type="text" name="quantity" value="{{ $product['quantity'] }}" readonly></td>
				</tr>
                <tr>
					<td>Unit Price: </td>
					<td><input type="text" name="unit_price" value="{{ $product['unit_price'] }}" readonly></td>
				</tr>
                <tr>
					<td>Status: </td>
                    <td><input type="text" name="status" value="{{ $product['status'] }}" readonly></td>					    
				</tr>
                <tr>
                <tr>
					<td></td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>

                </tr>
        </form>
    </fieldset>


@endsection