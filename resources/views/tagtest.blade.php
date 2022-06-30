<html>
    <body>
        @foreach($tags as $tag)
        <p>{{$tag->id}} {{$tag->tag_name}}</p>
        @endforeach
</body>
    </html>
