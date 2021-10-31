<!DOCTYPE html>

<html lang="zh">
<head>
    <link rel="icon" href="https://www-potatost-user.oss-cn-hangzhou.aliyuncs.com/TopTenTeachers/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset("static/css/layout.css") }}">
</head>
<body class="Bg">

<div class="head">
    <center>
        <ul class="menu">
            <a href="{{ url("/") }}"><li>Home</li></a>
            <a href="{{ url("/User/") }}"><li>评选者入口</li></a>
            <a href="{{ url("/admin/") }}"><li>管理员入口</li></a>
        </ul>
    </center>

</div>

@yield('content')

</body>
</html>
