@extends('layouts.app')
@section('title','Products')

@section('content')
  <h1>Product List</h1>

  @unless(count($products))
    <p>No products available at the moment.</p>
  @else
    <ul>
      @foreach($products as $product)
        <li>
          #{{ $loop->index + 1 }} - {{ $product['name'] }}

          @if($loop->first)
            <span>(First Product)</span>
          @endif

          @if($product['on_sale'])
            <span class="badge">On Sale</span>
          @endif

          <p>{{ $product['description'] }}</p>
          <p>Price: ${{ $product['price'] }}</p>
          <a href="{{ route('shop.product', $product['id']) }}">View Details</a>
        </li>
      @endforeach
    </ul>
  @endunless
@endsection
