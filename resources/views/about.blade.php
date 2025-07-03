<!DOCTYPE html>
<html>
<head>
     <title> {{ $title }}</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

li a.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('news') }}">News</a></li>
  <li><a href="{{ route('contact') }}">Contact</a></li>
  <li><a class="active" href="{{ route('about') }}">About</a></li>
</ul>

<h1>About Page</h1>
<p>This page contains information about us and our mission.</p>

</body>
</html>
