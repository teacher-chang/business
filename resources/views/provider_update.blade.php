@include('common/header')

@include('common/section')

    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>供应商管理页面 >> 供应商添加页面</span>
        </div>
        <div class="providerAdd">
            <form action="{{url('provider_edit')}}" method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div>
                    <input type="hidden" name="id" value="{{$msg->id}}">
                    <label for="provider_name">供应商名称：</label>
                    <input type="text" name="provider_name" value="{{$msg->provider_name}}"/>
                    <span >*请输入供应商名称</span>
                </div>
                <div>
                    <label for="provider_phone">联系方式：</label>
                    <input type="text" name="provider_phone" value="{{$msg->provider_phone}}"/>
                    <span>*请输入联系电话</span>
                </div>
                <div>
                    <label for="describe">备注：</label>
                    <input type="text" name="desc" value="{{$msg->desc}}"/>
                </div>
                <div class="providerAddBtn">
                    <!--<a href="#">保存</a>-->
                    <!--<a href="providerList.html">返回</a>-->
                    <input type="submit" value="保存" onclick="history.back(-1)"/>
                    <input type="button" value="返回" onclick="history.back(-1)"/>
                </div>
            </form>
        </div>

    </div>
@include('common/footer')
