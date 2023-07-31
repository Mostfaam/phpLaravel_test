@extends("layout",['isAdmin'=>true])
@section('title','عرض الأخبار')
@section('content')
    <table class="table">
        <tr>
            <td>المعرف</td>
            <td>العنوان</td>
            <td>صورة</td>
            <td></td>
        </tr>
        @forelse($news as $newsItem)
            <tr>
                <td>{{$newsItem->id}}</td>
                <td>{{$newsItem->title}}</td>
                <td><img src="{{$newsItem->images}}" alt="" width="100px"></td>
                <td>
                    <a href="{{route("admin.news.edit",$newsItem->id)}}" class="btn btn-success" >تعديل</a>
                    <form action="{{route("admin.news.destroy",$newsItem->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="99">
                    لا يوجد أخبار
                </td>
            </tr>
        @endforelse
    </table>

@endsection
