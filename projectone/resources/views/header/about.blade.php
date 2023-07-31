<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تضمين Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">
    <title>about</title>
</head>
<body>
<header >
    <nav  class=" navbar navbar-expand-lg navbar-light bg-primary-subtle " STYLE="height: 100px">
        <div class="container ">
            <a class="navbar-brand" href={{route("about")}}><img class="mb-4 align-items-center rounded-circle"  src="/im.jpg" alt="" width="75" height="75" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("front.home")}}"> الرئيسية  </a>
                    </li>
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
    <h2 class="mb-4">حول</h2>
    <p class="lead">مرحبًا بك في موقعنا الإخباري! نسعى جاهدين لتزويدك بأحدث وأدق الأخبار من جميع أنحاء العالم.</p>
    <p>يعمل فريقنا المكون من الصحفيين والمراسلين المخلصين بلا كلل لتقديم المعلومات المحدثة لك حول مواضيع مختلفة بما في ذلك السياسة والرياضة والترفيه والمزيد.</p>
    <p>ابقَ مطلعًا وقم بزيارة موقعنا بانتظام للحصول على أحدث التحديثات الإخبارية.</p>
    <a href="{{route("front.home")}}" class="btn btn-primary mt-4">العودة</a>
</div>



<!-- تضمين Bootstrap JS وأي ملفات أخرى للسكربت -->
<script src="/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
