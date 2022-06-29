<!DOCTYPE html>
<html>
<head>
 <title>Welcome!</title>
</head>
<body>
<p>Signed in as <strong>{{ Auth::user()->name }}</strong> <a>Log out</a></p>
<h1>Welcome, {{ Auth::user()->name }}!</h1>
<h2>Need some help? Or are you making a guide today?</h2>
<ul>
<li><a href="/guide">I need help!</a></li>
<li><a href="/guide/create">Ready to help!</a></li>
<li><a href="/guide/edit">Let me correct my guide!</a></li>
</ul>
</body>
</html>
