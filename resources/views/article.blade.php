<!DOCTYPE html>
<html>
<head>
 <title>{{$guide->guide_title}}</title>
</head>
<body>
    <h1>{{$guide->guide_title}}</h1>
    <h2>Tags: {{$guide->guide_tags}}</h2>
    <h3>By: {{$guide->user_name}}</h3>
    <h3>Description</h3>
    <p>{{$guide->guide_description}}</p>
    <h3>Steps</h3>
    <img src="{{$guide->guide_image}}">
    <p>{{$guide->guide_contents}}</p>
    <button type="button" onclick="checkComments({{$guide->id}})">Check Comments</button>

    <script>
        function checkComments(guideID){
            window.location.href="/guide/"+guideID+"/comments";
        }
    </script>
</body>
</html>
