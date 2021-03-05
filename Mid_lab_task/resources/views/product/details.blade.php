@extends('layout.nav_bar')

@section('main_content')
    <fieldset>
        <table>
            <tr>
                <td> Product id: </td>
                <td>{{ $product['id'] }}</td>
            </tr>
            <tr>
                <td> Product name: </td>
                <td>{{ $product['product_name'] }}</td>
            </tr>
            <tr>
                <td> Category: </td>
                <td> {{ $product['category'] }} </td>
            </tr>
            <tr>
                <td> Available quantity: </td>
                <td> {{ $product['quantity'] }} </td>
            </tr>
            <tr>
                <td> Unit price: </td>
                <td> {{ $product['unit_price'] }} </td>
            </tr>
            <tr>
                <td> Status: </td>
                <td> {{ $product['status'] }} </td>
            </tr>
        </table>
    </fieldset>

@endsection