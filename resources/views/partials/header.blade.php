<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('shop.index') }}">Home</a></li>
                <li><a href="{{ route('shop.products') }}">Products</a></li>
                <li><a href="{{ route('shop.cart') }}">Cart</a></li>
                <li><a href="{{ route('shop.about') }}">About Us</a></li>
                <li><a href="{{ route('shop.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    <hr>
</body>

</html>