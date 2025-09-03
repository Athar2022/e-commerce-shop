@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
  <h1>Contact Us</h1>
  <p>If you have any questions or concerns, please reach out to us.</p>

  <form action="#" method="POST">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>

    <button type="submit">Send</button>
  </form>
@endsection
