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

  <div id="app">
    <div id="main" class="layout-horizontal">
      <header class="mb-5">
        @include('includes.header')
        @include('includes.navbar')
      </header>
      @yield('content')
      {{-- @include('includes.footer') --}}
    </div>
  </div>

  @stack('prepend-script')
  <script src="{{ url('src/assets/js/pages/dashboard.js') }}"></script>
  @include('includes.script')
  @include('sweetalert::alert')
  @livewireScripts
  @stack('addon-script')

</body>
</html>