@extends('layout')
@section("title",$newsItem->title)
    @section("content")
       <div> <img src="{{$newsItem->images}}" height="200px" width="600px">
           <h3>{{$newsItem->title}}</h3>
           <p>{{$newsItem->body}}</p>
           الناشر : {{$writer->name}}<br>
           وقت كتابة الخبر :{{$newsItem->created_at}}
       </div>
<div STYLE="padding-top: 50px">
    <h4>الأخبار العاجلة</h4>
    @forelse($urgentNewsA as $newsItem2)
        <div class="col-md-4">
            <div class="card">
                <img src="{{$newsItem2->images}}" height="200px" class="card-img-top" alt="{{$newsItem2->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$newsItem2->title}}</h5>
                    @php
                        $words = str_word_count($newsItem2->body, 1);
                        $firstTenWords = array_slice($words, 0, 10);
                        $excerpt = implode(' ', $firstTenWords);
                    @endphp

                    <p class="card-text">{{$excerpt}}</p>
                </div>
                <a href="{{route("news.selected.show",$newsItem2->id)}}" class="stretched-link"></a>
            </div>
        </div>


    @empty
        <h6>لا يوجد أي أخبار عاجلة </h6>
    @endforelse

</div>
    @endsection
