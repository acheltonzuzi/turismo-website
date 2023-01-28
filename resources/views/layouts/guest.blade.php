<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body data-spy="scroll">
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    

    @livewireScripts
     <!-- Scripts -->
     <script src="{{asset('assets/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
     <script src="{{asset('assets/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
     <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
     <script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
     <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
     <script src="{{asset('assets/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
     <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
     <script src="{{asset('assets/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
     <script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>