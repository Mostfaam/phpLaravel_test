@extends("layout",['isAdmin'=>true])
@section('title','عرض التصنيفات')
@section('content')
    <table class="table">
        <tr>
            <td>الاسم</td>
            <td>الصورة</td>
            <td></td>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><img src="{{$category->image}}" alt="" width="100px"></td>
                <td>
                    <a href="{{route("admin.classification.edit",$category->id)}}" class="btn btn-success" >تعديل</a>
                    <form action="{{route("admin.classification.destroy",$category->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="99">
                    لا يوجد تصنيفات
                </td>
            </tr>
        @endforelse
    </table>

@endsection
