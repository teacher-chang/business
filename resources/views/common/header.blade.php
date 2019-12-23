<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>业务综合管理系统</title>
    <link rel="stylesheet" href="{{asset('css/public.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <!--<link rel="stylesheet" href="{{asset('css/app.css')}}"/>-->
    <script src="{{asset('js/jquery.js')}}"></script>
</head>
<body>
<!--头部-->
<header class="publicHeader">
    <h1>业务综合管理系统</h1>

    <div class="publicHeaderR">
        <p><span>下午好！</span><span style="color: #fff21b"> {{$name}}</span> , 欢迎你！</p>
        <a href="{{url('login')}}">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
