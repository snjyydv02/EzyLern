<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  {{-- 🔹 Title --}}
  <title>@yield('meta_title', 'EzyLern – Learn Smarter')</title>

  {{-- 🔹 Standard Meta --}}
  <meta name="description" content="@yield('meta_description', 'Best online learning platform with industry-ready skills.')">
  <link rel="canonical" href="@yield('canonical', url()->current())">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/fav-icon/icon_logo.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/fav-icon/icon_logo.png') }}">


  {{-- 🔹 Open Graph Meta --}}
  <meta property="og:title" content="@yield('og_title', 'EzyLern – Learn Smarter')">
  <meta property="og:description" content="@yield('og_description', 'Explore professional courses and grow your career with EzyLern.')">
  <meta property="og:image" content="@yield('og_image', asset('assets/images/default-og.jpg'))">
  <meta property="og:url" content="@yield('og_url', url()->current())">
  <meta property="og:type" content="website">
  <!-- Favicon -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/venobox/venobox.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all">


  <!-- new add cdn  -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



</head>

<body>

  {{-- Header --}}
  @include('partials.header')

  {{-- Page Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.footer')

  <!-- JS Files -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  <!-- Add other JS files here -->

  {{-- Page-Specific Scripts --}} @yield('scripts')
</body>

</html>