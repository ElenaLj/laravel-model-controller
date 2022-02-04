@extends('layouts.foundation')

@section('pageTitle')
    Home
@endsection

@section('mainContent')
<ul class="container">
    @foreach ($movies as $movie)
        <li class="cards">
            <p><strong>{{$movie["title"]}}</strong></p>
            <p><em>{{$movie["original_title"]}}</em></p>
            <div class="details">
                <p>Nazionalit&agrave;: {{$movie["nationality"]}}</p>
                <p>Data di uscita: {{$movie["date"]}}</p>
                <p>Rating: {{$movie["vote"]}}</p>
            </div>
        </li>
    @endforeach
</ul>    
@endsection
