<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'e-commerce-shop')</title>

  {{-- CSS عام --}}
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  @yield('styles')
</head>

<body>
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

 
  <script src="{{ asset('js/script.js') }}"></script>
  @yield('scripts')
</body>
</html>
