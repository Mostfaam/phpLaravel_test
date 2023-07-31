<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تضمين Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">
    <title>خدماتنا</title>
</head>
<body>
<header >
    <nav  class=" navbar navbar-expand-lg navbar-light bg-primary-subtle">
        <div class="container ">
            <a class="navbar-brand" href={{route("front.home")}}><img class="mb-4 align-items-center rounded-circle"  src="/im.jpg" alt="" width="100" height="100" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("front.home")}}"> الرئيسية  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("about")}}">حول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("service")}}">خدماتنا </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact")}}">تواصل معنا</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

</header>

<div class="container py-5 text-center">
    <h2 class="mb-4">ما نقدمه</h2>
    <p class="lead">نقدم مجموعة من الخدمات المتنوعة لتلبية احتياجاتك:</p>
    <ul class="list-group">
        <li class="list-group-item">تغطية أحداث عاجلة</li>
        <li class="list-group-item">تحليلات وتقارير موضوعية</li>
        <li class="list-group-item">مقابلات حصرية مع الشخصيات البارزة</li>
        <li class="list-group-item">تغطية رياضية شاملة</li>
        <li class="list-group-item">مقالات ومحتوى تحليلي</li>
        <li class="list-group-item">أخبار ترفيهية وثقافية</li>
    </ul>
</div>

<footer class="bg-dark text-white py-3">
    <div class="container text-center">
        <p>جميع الحقوق محفوظة &copy; 2023. موقع الأخبار العالمي</p>
    </div>
</footer>

<!-- تضمين Bootstrap JS وأي ملفات أخرى للسكربت -->
<script src="/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
