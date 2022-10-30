<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The cheap, fast way to send money abroad" />
    <meta name="keywords"
        content="wise, cheap, fast money, send money, money, abroad, fast way to send money abroad" />
    <meta name="author" content="Abbycode" />
    <link rel="shortcut icon" href="{{ asset('assets/img/brand_flag.svg') }}" />
    <title>@yield('title') - Wise</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/icomoon.css') }}" />

    <!-- Mian and Login css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body class="login-bg">

    @yield('content')

    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            Copyright Wise {{ Date('Y') }}.
        </div>
    </footer>
</body>

</html>
