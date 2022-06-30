<html>
    <head><title>New comment</title></head>
<body>
    <h3>New comment for: {{$guide->guide_title}}</h3>
<form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'store'])}}">
    @csrf
    <label>Display name:</label>
    <input type="hidden" name="guide_id" value="{{$guide->id}}">
    <input type="radio" name="comment_name" id="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" checked><label for="{{ Auth::user()->name }}">{{ Auth::user()->name }}</label>
    <input type="radio" name="comment_name" id="Anonymous" value="Anonymous"><label for="Anonymous">Anonymous</label><br><br>
    <textarea rows="5" cols="100" name="comment_contents" placeholder="Write a new comment..."></textarea>
    <br><br>
    <button type="submit">Post it!</button>
    </form>
</body>
</html>
