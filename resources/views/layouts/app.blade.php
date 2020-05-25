<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>gearArchive</title>
</head>
<body>
  <div id="app">
    @yield('content')
  </div>
  @yield('script')
</body>
</html>