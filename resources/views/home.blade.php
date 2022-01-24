@extends('layouts.main')

@section('content')
  
  <div class="container">
    <h2>Home</h2>
    <h3 class="py-4">Movies List</h3>

    <div class="wrapper d-flex flex-wrap">
      @foreach ($movies as $movie )
        <div class="card" style="width: calc(100% / 5 - 20px); padding: 10px 20px; margin: 10px;">
          <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
            <p class="card-text">Questo film ha ricevuto un voto pari a: <strong>{{$movie->vote}}</strong> ed è stato rilasciato il <strong>{{$movie->date}}</strong> </p>
          </div>
        </div>
      @endforeach
    </div>

  </div>

@endsection