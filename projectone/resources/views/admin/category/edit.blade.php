@extends("layout", ["isAdmin"=>true]);
@section('title',"تعديل التصنيف")
@section('content')
    <form method="post" action="{{route("admin.classification.update",$category->id)}}" enctype="multipart/form-data">
        @csrf
        @method("put")


        <div class="form-group">
            <label class="form-label" for="name">الاسم:</label>
            <input class="form-control" type="text" id="name" name="name"
                   value="{{$category->name}}"
                   required>

        </div>

        <div class="form-group">
            <label class="form-label" for="body">الوصف :</label>
            <textarea class="form-control" type="text" id="description" name="description"  required rows="5">{{$category->description}} </textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="body">الصورة :</label>
            <img src="{{$category->image}}"width="100px" >
            <input class="form-control" type="file" id="img" name="imgs" >
        </div>


        <input class="btn  btn-primary" type="submit" value="تعديل">

    </form>


@endsection
