<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    {{-- @yield adalah untuk memanggil layout --}}
    <title>@yield('title')</title>

    <link rel="icon" href="https://res.cloudinary.com/dyqjckfhh/image/upload/v1721479645/favicon_mjmerf.ico" type="image/x-icon">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    {{-- @push('namespace:app')

    @endpush --}}
  </head>

  <body>
    <!-- Navigation -->
    @include('includes.navbar')

    <!-- Page Content -->
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
