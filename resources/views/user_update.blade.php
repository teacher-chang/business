@include('common/header')

@include('common/section')

    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>用户管理页面 >> 用户修改页面</span>
        </div>
        <div class="providerAdd">
            <form action="{{url('user_edit')}}" method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div>
                    <input type="hidden" name="id" value="{{$msg->id}}">
                    <div>
                        <label for="user_name">用户名称：</label>
                        <input type="text" name="user_name" value="{{$msg->user_name}}"/>
                        <span >*请输入用户名称</span>
                    </div>
                    <div>
                        <label for="user_phone">联系方式：</label>
                        <input type="text" name="user_phone" value="{{$msg->user_phone}}"/>
                    </div>
                    <div>
                        <label for="userRemi">备注：</label>
                        <input type="text" name="desc" value="{{$msg->desc}}"/>
                    </div>
                </div>

                <div class="providerAddBtn">
                    <!--<a href="#">保存</a>-->
                    <!--<a href="userList.html">返回</a>-->
                    <input type="submit" value="保存" onclick="history.back(-1)"/>
                    <input type="button" value="返回" onclick="history.back(-1)"/>
                </div>
            </form>
        </div>

    </div>
</section>
<footer class="footer">
</footer>
<script src="js/time.js"></script>

</body>
</html>