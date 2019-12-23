@include('common/header')

@include('common/section')

        <div class="right">
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>用户管理页面</span>
            </div>
            <div class="search">
                <span>用户名：</span>
                <input type="text" placeholder="请输入用户名"/>
                <input type="button" value="查询"/>
                <a href="{{url('user_add')}}">添加用户</a>
            </div>
            <!--用户-->
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="20%">用户名称</th>
                    <th width="20%">联系方式</th>
                    <th width="30%">备注</th>

                    <th width="30%">操作</th>
                </tr>
                @foreach($lists as $list)
                <tr>
                    <td>{{$list->user_name}}</td>
                    <td>{{$list->user_phone}}</td>
                    <td>{{$list->desc}}</td>
                    <td>
                        <a href="{{url('user_update',['id'=>$list->id])}}"><img src="img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="{{url('user_del',['id'=>$list->id])}}" class="removeUser"><img src="img/schu.png" alt="删除" title="删除"/></a>
                    </td>
                </tr>
               @endforeach
            </table>

        </div>
    </section>


    <footer class="footer">
    </footer>

<script src="js/jquery.js"></script>
<script src="js/js.js"></script>
<script src="js/time.js"></script>

</body>
</html>