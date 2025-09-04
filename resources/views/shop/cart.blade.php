@extends('layouts.app')
@section('title', 'Shopping Cart')

@section('content')
  <h1>Your Shopping Cart</h1>

  @if(count($cart))
    <table border="1" cellpadding="5">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $item)
          <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['qty'] }}</td>
            <td>${{ $item['price'] }}</td>
            <td>${{ $item['qty'] * $item['price'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>Your cart is empty.</p>
  @endif

  <br>
  <a href="{{ route('shop.products') }}">Continue Shopping</a>
@endsection
