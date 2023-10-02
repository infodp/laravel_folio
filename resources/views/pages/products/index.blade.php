@php
    $products = \App\Models\Product::all();
@endphp
<style>
    table, th, td {
        border: 1px solid black;
    }
    th {
        background-color: #7c9cb0;
    }
</style>
<table>
    <thead>
        <th>ID</th>
        <th>DESCRIPTION</th>
        <th>STOCK</th>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td><a href="/products/{{$product->id}}">{{$product->id}}</a></td>
            <td>{{$product->description}}</td>
            <td>{{$product->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>