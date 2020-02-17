<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1 mx-auto">Fruit stock</span>
    </nav>
    @yield('content')
  </body>
</html>
