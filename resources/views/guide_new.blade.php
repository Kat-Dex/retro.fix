<!DOCTYPE html>
<html>
<head>
 <title>Create guide</title>
</head>
<body>
<h1>Time to create a guide!</h1>
<p>Author: {{ Auth::user()->name }}</p>
<form method="POST" action="{{action([App\Http\Controllers\GuideController::class, 'store'])}}">
    @csrf
<input type="hidden" name="user_name" value="{{Auth::user()->name}}">
<label for="guide_title">Title:</label>
<input type="text" name="guide_title" id="guide_title" maxlength="100" size="100"><br><br>
<label for="guide_tags">Tags:</label>
<input type="text" name="guide_tags" id="guide_tags" placeholder="For multiple tags, separate them with a comma(,)" maxlength="200" size="200">
<br><br>
<label for="guide_description">Description:</label><br><br>
<textarea rows="10" cols="200" name="guide_description"></textarea>
<br><br>
<label>Steps:</label>
<br><br>
<div>
    <input type="file" name="images[]">
    <br><br>
    <textarea rows="10" cols="200" name="texts[]"></textarea>
    <br><br>
    <button type="button" onclick="addSection()">Add</button>
</div>
<div id="divy">
</div>
<br><br>
<button type="submit">Publish it!</button>
</form>
<script type="text/javascript">
    function addSection(){
        var element = document.getElementById("divy");
        var pic = document.createElement("input");
        pic.type="file";
        pic.name="images[]";
        var text = document.createElement("textarea");
        text.rows="10";
        text.cols="200";
        text.name="texts[]";
        var remove = document.createElement("button");
        remove.type="button";
        remove.onclick = function(){
            element.innerHTML="";
        };
        remove.innerText="Remove";
        element.appendChild(document.createElement("br"));
        element.appendChild(document.createElement("br"));
        element.appendChild(pic);
        element.appendChild(document.createElement("br"));
        element.appendChild(document.createElement("br"));
        element.appendChild(text);
        element.appendChild(document.createElement("br"));
        element.appendChild(document.createElement("br"));
        element.appendChild(remove);
    }

</script>
</body>
</html>
