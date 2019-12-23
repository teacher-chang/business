
@include('common/header')

@include('common/section')

<div class="right">
    <img class="wColck" src="img/clock.jpg" alt=""/>
    <div class="wFont">
        <h2>{{$name}}</h2>
        <p>欢迎来到业务综合管理系统!</p>
        <span id="hours"></span>
    </div>
</div>

@include('common/footer')