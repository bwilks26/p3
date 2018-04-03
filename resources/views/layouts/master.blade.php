<!doctype html>
<html>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='/css/billSplitter.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>


<section>
    @yield('form')
</section>

<footer>
    &copy; {{ date('Y') }} Bryan Wilks
</footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

@stack('body')

</body>
</html>