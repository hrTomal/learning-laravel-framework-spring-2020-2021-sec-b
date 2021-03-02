@extends('layout.nav_bar')

@section('page_title')
<h1>Welcome To Physical store Dashboard</h1>
@endsection

@section('nav_bar')
<br>
<button onclick="location.href='/system/sales/physical_store/sales_log';"> View Sales Log </button>
<button onclick="location.href='/logout';"> Logout </button>
<br><br>
@endsection

@section('main_content')
<fieldset>
<legend>Dashboard:</legend>
    <table border='1'>
        <tr>
            <td>Description</td>
            <td>Total</td>
        </tr>
        <tr>
            <td>Nummber of items sold today: </td>
            <td>{{ $data['physical_counter'] }}</td>
        </tr>
        <tr>
            <td>Nummber of items sold in last 7 days:</td>
            <td>{{ $data['physical_counter_7'] }}</td>
        </tr>
        <tr>
            <td>Most sold item: </td>
        </tr>
        <tr>
            <td>Average sale amount per month: </td>
        </tr>
    </table>
    </fieldset>

    <form method="post">
        @csrf
        <fieldset>
            <legend>Customer Info:</legend>
            <table>
                <tr>
                    <td>Customer Name: </td>
					<td><input type="text" name="customer_name" value="{{old('customer_name')}}"></td>
                </tr>
                <tr>
                    <td>Address: </td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
                </tr>
                <tr>
                    <td>Phone: </td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
                </tr>
                <tr>
                    <td>Product id: </td>
					<td><input type="text" name="product_id" value="{{old('product_id')}}"></td>
                </tr>
                <tr>
                    <td>Product Name: </td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
                </tr>
                <tr>
                    <td>Unit price: </td>
					<td><input type="text" name="unit_price" value="{{old('unit_price')}}"></td>
                </tr>
                <tr>
                    <td>Quantity: </td>
					<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
                </tr>
                <tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
            </table>
        </fieldset>
    </form>

    {{ session('stored') }}

@endsection