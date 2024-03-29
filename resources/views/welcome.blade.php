@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

  <title>Content Lounge</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    {{--  <app></app>  --}}
  </div>
  @yield('vue')
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?></script>
</body>
</html>