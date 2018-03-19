<!doctype html>
<html>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='/css/billsplitter.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    {{--<a href='/'><img src='/images/splitter.png' id='logo' alt='Bill Splitter'></a>--}}
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

@stack('body')

</body>
</html>