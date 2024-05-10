@extends('layout.main')

@section('content')

  <div class="container d-flex flex-wrap">
    @foreach ($movies as $movie)
    <div class="card card_style" style="width: 18rem;">
      <div class="card-body">
        <img src="{{$movie->img}}" class="card-img-top w-100 h-75" alt="{{$movie->title}}">
        <h5 class="card-title">{{$movie->title}}</h5>
        <h5 class="card-title">{{$movie->original_title}}</h5>
        <h5 class="card-title">{{$movie->nationality}}</h5>
        <h5 class="card-title">{{$movie->date}}</h5>
        <h5 class="card-title">{{$movie->vote}}</h5>
      </div>
    </div>
    @endforeach
  </div>

@endsection