@include('common/header')

@include('common/section')

        <div class="right">
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>订单管理页面</span>
            </div>
            <form action="{{url('order_search')}}" method="post" class="search">
                    <span>项目名称：</span>
                    <input type="text" name="pro_name" placeholder="请输入商品的名称"/>
                    <span>项目来源：</span>
                    <select name="order_source" >
                        <option value="">--请选择--</option>
                        @foreach($providers as $provider)
                        <option value="{{$provider->provider_name}}">{{$provider->provider_name}}</option>
                        @endforeach
                    </select>

                    <input type="submit" value="查询" style="width: 60px;font-size: small"/>
                    <a href="{{url('order_add')}}">添加订单</a>
                </form>



            <!--账单表格 样式和供应商公用-->
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">订单编号</th>
                    <th width="20%">项目名称</th>
                    <th width="10%">项目来源</th>
                    <th width="8%">接单金额</th>
                    <th width="10%">开发人员</th>
                    <th width="8%">定金收入</th>
                    <th width="10%">交付时间</th>
                    <th width="10%">接单时间</th>
                    <th width="14%">操作</th>
                </tr>
                @foreach($lists as $list)
                <tr>
                    <td>{{$list->order_sn}}</td>
                    <td>{{$list->project_name}}</td>
                    <td>{{$list->order_source}}</td>
                    <td>{{$list->order_amount}}</td>
                    <td>{{$list->developer}}</td>
                    <td>{{$list->bill_amount}}</td>
                    <td>{{$list->order_time}}</td>
                    <td>{{$list->delivery_time}}</td>
                    <td>
                        <a href="{{url('order_update',['id'=>$list->id])}}"><img src="img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="{{url('order_delete',['id'=>$list->id])}}" class="removeBill1"><img src="img/schu.png" alt="删除" title="删除"/></a>
                        @if($list->finish_flag ==0)
                        <a href="{{url('order_finish',['id'=>$list->id])}}">完成</a>
                        @else
                        已完成
                            @endif
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" >
                        订单总数：<span style="color: red;font-weight: bold;">{{$order_count}}</span>单
                    </td>
                    <td colspan="5">订单总额：<span style="color: red;font-weight: bold;">{{$order_sum}}</span>元</td>
                </tr>
                <tr>
                    <td colspan="9" class="pagination">
                        {!!$lists->links()!!}
                    </td>
                </tr>
            </table>
        </div>
@include('common/footer')
   <!-- </section>



    <footer class="footer">
    </footer>

<script src="js/jquery.js"></script>
<script src="js/js.js"></script>
<script src="js/time.js"></script>

</body>
</html>