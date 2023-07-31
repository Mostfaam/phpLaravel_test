@extends("layout", ["isAdmin"=>true]);
@section('title',"تعديل الخبر")
@section('content')
    <form method="post" action="{{route("admin.news.update",$news->id)}}" enctype="multipart/form-data">
        @csrf
        @method("put")


    <div class="form-group">
        <label class="form-label" for="name">العنوان:</label>
        <input class="form-control" type="text" id="name" name="title"
               value="{{$news->title}}"
               required>

    </div>

    <div class="form-group">
        <label class="form-label" for="body">الخبر :</label>
        <textarea class="form-control" type="text" id="body" name="body"  required rows="5">{{$news->body}} </textarea>
    </div>

    <div class="form-group">
        <label class="form-label" for="body">الصورة :</label>
        <img src="{{$news->images}}"width="100px" >
        <input class="form-control" type="file" id="img" name="imgs" >
    </div>


    <div class="form-group">
        <label class="form-label" for="category" >التصنيف :</label>
        <select id="category_id" name="category_id" class="form-control" >
            @foreach($categories as $category )

            <option value="{{$category->id}}"{{($news->category==$category->id)? 'selected':'' }}>{{$category->name}} </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">  <label class="form-label" for="essential"  > أساسي</label>
        <input class=" form-check-inline" type="checkbox" id="essential" name="essential" {{($news->essential )?'checked':''}} value="true" >
    </div>


    <input class="btn  btn-primary" type="submit" value="إرسال">

    </form>


@endsection
