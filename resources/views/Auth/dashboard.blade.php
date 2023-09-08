<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <header class='header'>
        <h2>Planet</h2>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
        <li><a href="">More</a></li>
        <li id="user"><a href="">Hi <span>{{Session::get('name')[0]}}</span> </a>
            <div class="sub">
                <div class="box">
                    <h2>{{Session::get('name')}}</h2>
                    <p>{{Session::get('email')}}</p>
                    <a href="" id="logout">Logout</a>
                    <a href="" id="dash">Dashboard</a>
    
                </div>
            </div>
        </li>
    </header>
</body>
</html>