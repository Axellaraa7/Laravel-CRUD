<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="{{ asset('css/index.js') }}"></script>
</head>

<body>
  <header>
    @section('header')
    @show
  </header>
  <main>
    @section('main')
    @show
  </main>
  <footer>
    @section('footer')
    @show
  </footer>

</body>

</html>
