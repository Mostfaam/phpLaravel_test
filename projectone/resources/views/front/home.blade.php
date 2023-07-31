@extends('layout')
@section("title","الصفحة الرئيسية")
@section('content')
    @php
    $i=0
@endphp    @foreach($news as $newsItem1)
        @if($newsItem1->essential)
{{$i++}}
        @endif
    @endforeach
@if($i!=0)
<div class="container" style="padding-top: 20px">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide bg-secondary" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
 <div class="carousel-inner">@endif
                    @foreach($news as $index => $newsItem)
                      <a href="{{route("news.selected.show",$newsItem->id)}}">    <div class="carousel-item
                      @if($index === 0) active @endif">
                            @if($newsItem->essential)
                                @php
                                    $words = str_word_count($newsItem->body, 1);
                                    $firstTenWords = array_slice($words, 0, 10);
                                    $excerpt = implode(' ', $firstTenWords);
                                @endphp

                                <div >
                                        <img src="{{$newsItem->images}}" class="d-block" height="300px" width="100%" alt="">
                                    <div class="text">
                                        <h4>{{$newsItem->title}}</h4>
                                        <p>{{$excerpt}}</p>
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            @endif
                        </div>
         </a>



     @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


        <div class="container" style="padding-top: 20px">
            <div class="row">
                @foreach($classification as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{$item->image}}" height="200px" class="card-img-top" alt="{{$item->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                            </div>
                            <a href="{{route("news.category.show",$item->id)}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



@endsection
