<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
@include('includes.head')
<body class="hold-transition skin-blue sidebar-mini">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- Add your site or application content here -->

@include('includes.mainNav')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        @auth
        <h1>{{$pageTitle}} </h1><a href="{{ url()->previous() }}">Back</a>
        @endauth
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')


    </section>
    <!-- /.content -->
</div>
<footer class="main-footer">
    @include('includes.footer')
</footer>
@include('includes.controlSidebar')


<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.embed.ly/player-0.1.0.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>



























