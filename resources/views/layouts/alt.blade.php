<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @livewireStyles
  @stack('addon-style')

</head>
<body>

  @yield('content')

  @stack('prepend-script')
  <script src="{{ url('src/assets/js/pages/dashboard.js') }}"></script>
  @include('includes.script')
  @livewireScripts
  @stack('addon-script')

</body>
</html>