@extends("layout",["isAdmin"=>true])
@section('title',"انشاء خبر")
@section("content")
    <form method="post" action="{{route("admin.news.store")}}" enctype="multipart/form-data">
        @csrf

        <h4>صفحة إنشاء خبر</h4>



        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label class="form-label" for="name">العنوان:</label>
            <input class="form-control" type="text" id="name" name="title"
                   value="{{old('title')}}"
                   required>

        </div>

<div class="form-group">
    <label class="form-label" for="body">الخبر :</label>
    <textarea class="form-control" type="text" id="body" name="body" required rows="5"></textarea>
</div>

<div class="form-group">
    <label class="form-label" for="body">الصورة :</label>
    <input class="form-control" type="file" id="img" name="imgs" required>
</div>


<div class="form-group">
    <label class="form-label" for="category">التصنيف :</label>
    <select id="category_id" name="category_id" class="form-control">
        @foreach($categories as $category )
            <option value="{{$category->id}}">  {{$category->name}} </option>
        @endforeach
    </select>
</div>

      <div class="form-group">  <label class="form-label" for="essential">أساسي</label>
          <input class=" form-check-inline" type="checkbox" id="essential" name="essential" value="true" >
      </div>


        <input class="btn  btn-primary" type="submit" value="إرسال">

    </form>

@endsection

