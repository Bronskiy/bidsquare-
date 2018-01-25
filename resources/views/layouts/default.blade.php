<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>

<body>
    <!--page wrapper-->
    <main id="wrapper" class="d-flex flex-column container">
        <header class="container">
          @include('includes.header')
        </header>
        <!--[2] Home Section-->
        @yield('content')




        <footer>
        @include('includes.footer')
      </footer>

    </main>
    <!--connecting js files-->
    <!--modernizr.js-->
    <script type="text/javascript" src="{{ asset('assets/js/modernizr-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <a href="#" id="toTop"><span id="toTopHover"><i class="fa fa-angle-up" aria-hidden="true"></i></span></a>
</body>

</html>
