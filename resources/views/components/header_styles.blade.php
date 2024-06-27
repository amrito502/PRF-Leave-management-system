<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PRF Leave Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/perfect-scrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/style.css') }}">
        <link defer="" rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/animate.css') }}">




        <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
        <script defer="" src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script defer="" src="{{ asset('assets/js/tippy-bundle.umd.min.js') }}"></script>
        <script defer="" src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/highlight.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    </head>

    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
