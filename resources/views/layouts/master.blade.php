<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        @include('layouts.top_nav')

        @include('layouts.aside')

        <div class="content-wrapper">

            @yield('header')

            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('layouts.footer')
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{ URL::asset('js/adminlte.js') }}"></script>
    <script src="{{ URL::asset('js/app.js')}}"></script>

    @yield('script')

</body>

</html>
