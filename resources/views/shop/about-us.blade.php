@extends('layouts.app')
@section('title', $title)

@section('content')
  <h1>{{ $title }}</h1>
  <p>{{ $description }}</p>

  {{-- Example of rendering raw HTML --}}
  {!! $rawHtml !!}

  @php
    $year = date('Y');
  @endphp

  <footer>© {{ $year }} MyStore Team</footer>
@endsection
