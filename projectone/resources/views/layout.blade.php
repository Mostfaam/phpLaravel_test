<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <base href="{{url('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="panel/css/custom.css">
    <link rel="stylesheet" href="/front/css/carousel.css">
    <title>@yield('title')</title>
</head>

<body>

<!-- هيدر -->
<header class="header_" >
@if(@$isAdmin)
    @include('admin.header')

@else
    @include('front.header')
@endif
</header>
<div class="container">

    @yield('content')
</div>
<!-- فوتر -->
<footer class="bg-light text-center py-3">
    <div class="container">
        <p>&copy; 2023. All Rights Reserved.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- تضمين ملفات جافا سكريبت اللازمة -->
<script  src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
