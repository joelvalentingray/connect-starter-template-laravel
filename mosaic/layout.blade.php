<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script defer src="{{asset("js/app.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="{{asset("js/custom-sweet-alerts.js")}}"></script>
</head>
<body
    class="font-inter antialiased bg-slate-100 text-slate-600"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

<section id="main">
    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR PANEL -->
        <x-sidebar></x-sidebar>
        <!-- CONTAINER -->
        <div class="relative flex flex-col flex-1 overflow-auto">
            <!-- NAVIGATION HEADER -->
            <x-header></x-header>
            <!-- BANNER-Success/failure message -->
            <x-banner></x-banner>
            @yield("content")
        </div>
    </div>
</section>
</body>
</html>
