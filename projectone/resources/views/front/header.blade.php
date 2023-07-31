<nav class=" navbar navbar-expand-lg navbar-light bg-primary-subtle" style="height: 100px">
    <div class="container ">
        <a class="navbar-brand" href={{route("front.home")}}><img class="mb-4 align-items-center rounded-circle"
                                                                  src="/im.jpg" alt="" width="75" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route("front.home")}}"> الرئيسية </a>
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
