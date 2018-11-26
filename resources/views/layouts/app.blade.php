<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application Development" />
    <meta name="keywords" content="Todo List" />
    <meta name="author" content="Dai Trung Duong Luong" />
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo List</title>
</head>
<body>
@include('inc.navbar')
<div class="container mt-3">
    @include('inc.messages')
    @yield('content')
</div>

<footer id="footer" class="text-center">
    <p>Copyright 2017 &copy; Todo List</p>
</footer>


</body>
</html>
