<div class=" navbar navbar-expand-lg navbar-light bg-primary-subtle" style="height: 100px">
    <div class="container ">
        <a class="navbar-brand" href={{route("admin.home")}}><img class="mb-4 align-items-center rounded-circle"
                                                                   src="/im.jpg" alt="" width="75" height="75">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</div>
<div class="side-panel bg-primary-subtle">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.news.index")}}">
                عرض الأخبار
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.news.create")}}">
                اضافة خبر
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.classification.create")}}">
                اضافة تصنيف
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.classification.index")}}">
                عرض التصنيفات
            </a>
        </li>
    </ul>
    <ul class="list-group w-100">
        <li class="list-group-item"><a href="{{route("admin.logout")}}" class="btn btn-outline-primary">تسجيل خروج</a>
        </li>
    </ul>
</div>
<button class="open-btn btn btn-primary" id="o_c_btn" onclick="toggleSidePanel(this)">فتح</button>
<script>
    function toggleSidePanel(button) {
        $('.side-panel').toggleClass('opened');
        $('#o_c_btn').text("اغلاق");
        // إضافة الكلاس "opened" للزر عند فتح الواجهة التنبثقية
        $(button).toggleClass('opened');

        // التحقق مما إذا كانت الواجهة مفتوحة لإزالة الكلاس "opened" عند إغلاقها
        if ($('.side-panel').css('right') == '0px') {
            $(button).removeClass('opened');
            $('.side-panel').removeClass("opened")
            var b = document.getElementById("o_c_btn");
            b.innerHTML = "فتح"

        }
    }
</script>
