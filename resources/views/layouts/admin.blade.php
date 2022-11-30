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
    @include('includes.admin.sidebar')
    <div id="main" class="layout-navbar">
      @include('includes.admin.navbar')
      <div id="main-content">
        @yield('content')
        {{-- @include('includes.footer') --}}
      </div>
    </div>
  </div>

  @stack('prepend-script')
  @include('includes.script')
  @livewireScripts
  @stack('addon-script')

</body>
</html>