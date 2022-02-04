<h1>Route check</h1>
{{-- @dump($movies) --}}
<ul>
    @foreach ($movies as $movie)
        <li>
            <p>Titolo: {{$movie["title"]}}</p>
            <p>Titolo originale: {{$movie["original_title"]}}</p>
            <p>Nazionalit&agrave;: {{$movie["nationality"]}}</p>
            <p>Data di uscita: {{$movie["date"]}}</p>
            <p>Rating: {{$movie["vote"]}}</p>
        </li>
    @endforeach
</ul>