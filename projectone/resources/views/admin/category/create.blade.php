@extends("layout",["isAdmin"=>true])
@section("title","انشاء تصنيف")
@section('content')

    <form method="post" action="{{route("admin.classification.store")}}" enctype="multipart/form-data">
        @csrf

        <h4>صفحة إنشاء تصنيف</h4>

        <div class="form-group">
            <label class="form-label" for="name">الاسم:</label>
            <input class="form-control" type="text" id="name" name="name" required>
        </div>

        <br>
        <label class="form-label" for="body">الصورة :</label>
        <input class="form-control" type="file" id="img" name="imgs" required>

        <br>
        <label class="form-label" for="essential">الوصف</label>
        <input class="form-control" type="text" id="description" name="description">

        <br>
        <input class="btn btn-primary" type="submit" value="إنشاء">
    </form>

@endsection
