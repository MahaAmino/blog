<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body >
    <nav class="navbar bg-light" >
        <img src="/assets/imgs/hap.png" alt="" width="200px" height="72px">
        <ul>
            <li><button type="button" class="btn btn-outline-info"><a href="/" >POSTS</a></button></li>
            <li><button type="button" class="btn btn-outline-warning"><a href="">USERS</a></button></li>
        </ul>
        <button class="btn btn-dark">Log Out</button>
    </nav>

    <div class="content">
        @yield('content')
    </div>
    <footer class="bg-light">💛 May your heart be filled with happiness today and always 💛</footer>
    <script href="/assets/js/bootstrap.min.js"></script>
</body>
</html>

