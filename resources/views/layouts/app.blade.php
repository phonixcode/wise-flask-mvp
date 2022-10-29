<!doctype html>
<html lang="en">

<head>
   @include('partials.__head')
</head>

<body class="full-screen">

    @include('partials.__loader')

    <!-- BEGIN .app-wrap -->
    <div class="app-wrap">

        @include('partials.__nav')

        <!-- BEGIN .app-container -->
        <div class="app-container">
            @include('partials.__sidebar')
            
            @yield('content')
        </div>
        <!-- END: .app-container -->

        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            Copyright Wise {{ Date('Y') }}.
        </footer>
        <!-- END: .main-footer -->

    </div>
    <!-- END: .app-wrap -->

    @include('partials.__script')
</body>

</html>
