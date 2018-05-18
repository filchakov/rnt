<html lang="en"> <!--<![endif]-->
<head>

<?php
$callbackname = 'initMap'.time();
?>
<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>Rently</title>

    <!-- Templates core CSS -->
    <link href="/assets/css/quize.css?time={{time()}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfYXS6FZ3bzivyhj3roTHrbQE_f-017VY&libraries=places&callback={{$callbackname}}" defer></script>


    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=408291709570737";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>
<body class="index" id="to-top">
<section class="subscribe-section" id="section-3">

    <div class="container">

        @yield('content')

    </div> <!-- /.container -->

</section> <!-- /.subscribe-section -->

@yield('script')

</body>
</html>