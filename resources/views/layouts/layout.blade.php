<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('head')

</head>

<?php


?>

<header>
  <nav>
    <ul>
      <li><img src="/images/Logo.png" alt="image"></li>
      @yield('link')
    </ul>
  </nav>
</header>

<body>
  @yield('content')
</body>

</html>