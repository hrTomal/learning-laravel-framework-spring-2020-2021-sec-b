@extends('layout.nav_bar')

@section('main_content')

<fieldset>
<legend>Available Products</legend>
    <table border="1">
            <tr>
                <td>Product id</td>
                <td>Product Name</td>
                <td>Category</td>
                <td>Quantity</td>
                <td>Unit price</td>
                <td>Operations</td>

            </tr>

            @for($i=0; $i < count($list); $i++)
            <tr>
                <td>{{ $list[$i]['id'] }}</td>
                <td>{{ $list[$i]['product_name'] }}</td>
                <td>{{ $list[$i]['category'] }}</td>
                <td>{{ $list[$i]['quantity'] }}</td>
                <td>{{ $list[$i]['unit_price'] }}</td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a> |
                </td>
            </tr>
            @endfor
    </table>
</fieldset>
@endsection