<!DOCTYPE html>
<html>
<head>
 <title>Guides</title>
</head>
<body>
<button type="button" onclick="searchGuide()">Search for guides!</button>
@foreach ($guides as $guide)
<div>
    <h3><a href="/guide/{{$guide->id}}">{{$guide->guide_title}}</a></h3>
    <p>{{$guide->guide_description}}</p>
    <p>Tags: {{$guide->guide_tags}}</p>
</div>
@endforeach
<script>
    function searchGuide(){
        window.location.href="search";
    }
</script>
</body>
</html>
