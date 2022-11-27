<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  @stack('prepend-style')
  <link rel="stylesheet" href="{{ url('src/assets/css/main/app.css') }}">
  <link rel="stylesheet" href="{{ url('src/assets/css/main/app-dark.css') }}">
  {{-- <link rel="shortcut icon" href="{{ url('src/assets/images/logo/favicon.svg') }}" type="image/x-icon"> --}}
  <link rel="shortcut icon" href="{{ url('frontend/images/favicon.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ url('src/assets/css/shared/iconly.css') }}">
  <link rel="stylesheet" href="frontend/styles/main.css">
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
  <script src="{{ url('src/assets/js/bootstrap.js') }}"></script>
  <script src="{{ url('src/assets/js/app.js') }}"></script>
  <script src="{{ url('src/assets/js/pages/horizontal-layout.js') }}"></script>

  <script src="{{ url('src/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('src/assets/js/pages/dashboard.js') }}"></script>
  <script src="{{ url('frontend/vendors/sweetalert/sweetalert2.js') }}"></script>
  <script src="{{ url('frontend/scripts/main.js') }}"></script>
  @livewireScripts
  @stack('addon-script')

</body>
</html>