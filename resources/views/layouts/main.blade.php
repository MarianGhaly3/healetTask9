<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
    @include('includes.nav')
    </header>
    <!-- end header section -->


    @yield('content')


    <!-- info section -->
    @include('includes.info')
    <!-- end info_section -->

    <!-- footer section -->
    @include('includes.footer')
    <!-- end footer section -->

    <!-- JS Scripts section -->
    @include('includes.scripts')
    <!-- end JS Scripts section -->

</body>

</html>