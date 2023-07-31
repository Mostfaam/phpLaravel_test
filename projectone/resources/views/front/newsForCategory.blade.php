@extends('layout')
@section('title',"أخبار $category->name  ")
@section("content")
<div class="container" style="padding-top: 20px">
    <div class="row">
        @forelse($newsForCategory as $item)

            <div class="col-md-4">
                <div class="card">
                    <img src="{{$item->images}}" height="200px" class="card-img-top" alt="{{$item->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        @php
                            $words = str_word_count($item->body, 1);
                            $firstTenWords = array_slice($words, 0, 10);
                            $excerpt = implode(' ', $firstTenWords);
                        @endphp

                        <p class="card-text">{{$excerpt}}</p>
                    </div>
                    <a href="{{route("news.selected.show",$item->id)}}" class="stretched-link"></a>
                </div>
            </div>
        @empty
          لا يوجد أخبار
        @endforelse
    </div>
</div>

@endsection
