<!DOCTYPE html>
<html>
    <head>
        <title>Search for guides</title>
    </head>
    <body>
        <h2>Search for guides!</h2>
        <form method="POST" action="{{ action([App\Http\Controllers\GuideController:: class, 'search'])}}">
            @csrf
            <label for="guide_tags">Search tags:</label>
            <input list="tags" name="guide_tags" id="guide_tags">
            <datalist id="tags">
                @foreach($tags as $tag)
                <option value="{{$tag->tag_name}}">
                @endforeach
            </datalist>
            <input type="submit" value="Search">
        </form>
</body>
</html>
