@include('common/header')

@include('common/section')

    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>供应商管理页面</span>
        </div>
        <div class="search">
            <span>供应商名称：</span>
            <input type="text" placeholder="请输入供应商的名称"/>
            <input type="button" value="查询"/>
            <a href="{{url('provider_add')}}">添加供应商</a>
        </div>
        <!--供应商操作表格-->
        <table class="providerTable" cellpadding="0" cellspacing="0">
            <tr class="firstTr">
                <th width="20%">供应商编码</th>
                <th width="10%">供应商名称</th>
                <th width="10%">联系方式</th>
                <th width="10%">创建时间</th>
                <th width="20%">描述</th>
                <th width="30%">操作</th>
            </tr>
            @foreach($lists as $list)
            <tr>
                <td>{{$list->provider_sn}}</td>
                <td>{{$list->provider_name}}</td>
                <td>{{$list->provider_phone}}</td>
                <td>{{$list->create_time}}</td>
                <td>{{$list->desc}}</td>
                <td>
                    <a href="{{url('provider_update',['id'=>$list->id])}}"><img src="img/xiugai.png" alt="修改" title="修改"/></a>
                    <a href="{{url('provider_del',['id'=>$list->id])}}" ><img src="img/schu.png" alt="删除" title="删除"/></a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>

@include('common/footer')
