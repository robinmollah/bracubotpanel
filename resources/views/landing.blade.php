<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BRACU Messenger Bot</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('vendor/css/fa/all.min.css') }}" rel="stylesheet" type="text/css"> <!-- fontaweseom -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">

</head>

<body>

<div class="overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('mp4/bg.mp4') }}" type="video/mp4">
</video>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <h1 class="mb-3">BRACU MessengerBot Coming Soon!</h1>
                    <p class="mb-5">We're working hard to finish the development of this site. Our target launch date is
                        <strong>August 2019</strong>! Stay with us to know more about the update!</p>
                    <a href="{{ route('login') }}" class="btn btn-info" style="display: block" role="button">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="list-unstyled-item">
            <a href="https://www.facebook.com/bracubot/">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="list-unstyled-item">
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/coming-soon.min.js') }}"></script>

</body>

</html>
