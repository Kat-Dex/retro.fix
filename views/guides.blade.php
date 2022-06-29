<!DOCTYPE html>
<html>
<head>
 <title>Guides</title>
</head>
<body>
@foreach ($guides as $guide)
<div>
    <h3>{{$guide->guide_title}}</h3>
    <p>{{$guide->guide_description}}</p>
    <p>Tags: {{$guide->guide_tags}}</p>
</div>
@endforeach
</body>
</html>
