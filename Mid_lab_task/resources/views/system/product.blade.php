@extends('layout.nav_bar')

@section('nav_bar')
    <button onclick="location.href='/system/product_management/existing_products';"> Existing Products </button>
    <button onclick="location.href='/system/product_management/upcoming_products';"> Upcoming Products </button>
    <button onclick="location.href='/system/product_management/add_product';"> Add Products </button>
    <br><br><br>
@endsection

@section('main_content')

<fieldset>
<legend>Dashboard:</legend>
    <table border='1'>
        <tr>
            <td>Product Status</td>
            <td>Number of products: </td>
        </tr>
        <tr>
            <td>Upcomming products: </td>
            <td>{{ $data['upcomming_product_counter'] }}</td>
        </tr>
        <tr>
            <td>Available products: </td>
            <td>{{ $data['available_product_counter'] }}</td>
        </tr>
    </table>
</fieldset>

@endsection