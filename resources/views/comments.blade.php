<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
    <!-- <form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'store'])}}">
    @csrf
    <label>Display name:</label>
    <input type="radio" name="comment_name" id="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" checked><label for="{{ Auth::user()->name }}">{{ Auth::user()->name }}</label>
    <input type="radio" name="comment_name" id="Anonymous" value="Anonymous"><label for="Anonymous">Anonymous</label><br><br>
    <textarea rows="5" cols="100" name="comment_contents" placeholder="Write a new comment..."></textarea>
    <br><br>
    <button type="submit">Create a new comment!</button>
    </form> -->
    <button type="submit" onclick="newComment({{$guide_id}})">Create a new comment!</button>
    <button type="button" onclick="backGuide({{$guide_id}})">Go back to guide</button>
    @foreach($comments as $comment)
    <br><br>
    <div>
        <p><strong>{{$comment->comment_name}}</strong> {{$comment->created_at}}</p>
        <p>{{$comment->comment_contents}}</p>
    </div>
    @endforeach
    <script>
        function newComment(guideID){
            window.location.href="/guide/"+guideID+"/comments/create";
        }
        function backGuide(guideID){
            window.location.href="/guide/"+guideID;
        }
    </script>
</body>
</html>
