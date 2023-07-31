<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تضمين Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">
    <title>اتصل بنا</title>
</head>
<body>
<header >
    <nav  class=" navbar navbar-expand-lg navbar-light bg-primary-subtle " style="height: 100px">
        <div class="container ">
            <a class="navbar-brand" href={{route("front.home")}}><img class="mb-4 align-items-center rounded-circle"  src="/im.jpg" alt="" width="75" height="75" ></a>
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
    <h2 class="mb-4">نحن هنا لمساعدتك</h2>
    <p class="lead">إذا كان لديك أي أسئلة أو استفسارات، يُرجى الاتصال بنا عبر الطرق التالية:</p>
    <ul class="list-group">
        <li class="list-group-item">رقم الهاتف: 0123456789</li>
        <li class="list-group-item">البريد الإلكتروني: info@example.com</li>
        <li class="list-group-item">عنوان: شارع الأخبار، المدينة، البلد</li>
    </ul>
</div>

<footer class="bg-dark text-white py-3">
    <div class="container text-center">
        <p>جميع الحقوق محفوظة &copy; 2023. موقع الأخبار العالمي</p>
    </div>
</footer>

<!-- تضمين Bootstrap JS وأي ملفات أخرى للسكربت -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
