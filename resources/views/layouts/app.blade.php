<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'MyStore')</title>

  {{-- Global CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('styles')
</head>
<body>
  @include('partials.header')

  <main class="container">
    @yield('content')
  </main>

  @include('partials.footer')

  {{-- Global JS --}}
  <script src="{{ asset('js/plugin.js') }}"></script>
  @yield('scripts')
</body>
</html>
