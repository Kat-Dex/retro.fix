<!DOCTYPE html>
<html>
    <head>
        <title>Guide search results</title>
    </head>
    <body>
    <h2>Guide search results: </h2>
    @foreach ($guides as $guide)
    <div>
    <h3><a href="/guide/{{$guide->id}}">{{$guide->guide_title}}</a></h3>
    <p>{{$guide->guide_description}}</p>
    <p>Tags: {{$guide->guide_tags}}</p>
    </div>
    @endforeach
    </body>
</html>
