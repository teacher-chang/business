﻿@include('common/header')

@include('common/section')

    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>账单管理页面 >> 订单添加页面</span>
        </div>
        <div class="providerAdd">
            <form action="{{url('order_save')}}" method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div class="">
                    <tr>
                        <td>
                            <label for="project_name">项目名称：</label>
                            <input type="text" name="project_name" id="project_name" required/>
                        </td>
                        <td>
                            <label for="order_source">订单来源：</label>
                            <select name="order_source" id="">
                                @foreach($providers as $provider)
                                <option value="{{$provider->provider_name}}">{{$provider->provider_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </div>
                <div >
                    <tr>
                        <td>
                            <label for="order_amount">订单金额：</label>
                            <input type="text" name="order_amount" id="order_amount" required/>
                        </td>
                        <td>
                            <label for="order_time">接单时间：</label>
                            <input type="date" name="order_time" id="order_time" required/>
                        </td>
                </div>
                <div >
                    <tr>
                        <td>
                            <label for="delivery_time">交付时间：</label>
                            <input type="date" name="delivery_time" id="delivery_time" required/>
                        </td>
                        <td>
                            <label for="deposit_income">定金收入：</label>
                            <input type="text" name="deposit_income" id="deposit_income" required/>
                        </td>
                </div>
                <div >
                    <tr>
                        <td>
                            <label for="developer">开发人员：</label>
                            <select name="developer" id="">
                                @foreach($users as $user)
                                <option value="{{$user->user_name}}">{{$user->user_name}}</option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <label for="bill_amount">出单金额：</label>
                            <input type="text" name="bill_amount" id="bill_amount" />

                        </td>
                    </tr>
                </div>
                <div >
                    <tr>
                        <td>
                            <label for="bill_time">出单时间：</label>
                            <input type="date" name="bill_time" id="bill_time" />
                        </td>
                        <td>
                            <label for="agent_delivery_time">代理交付时间：</label>
                            <input type="date" name="agent_delivery_time" id="agent_delivery_time" />
                        </td>
                    </tr>
                <div>
                    <tr>
                        <td>
                            <label for="deposit_expenditure">定金支出：</label>
                            <input type="text" name="deposit_expenditure" id="deposit_expenditure" />
                        </td>
                    </tr>
                </div>

                </div>

                <div class="providerAddBtn">
                    <!--<a href="#">保存</a>-->
                    <!--<a href="billList.html">返回</a>-->
                    <input type="submit" value="保存" />
                    <input type="button" value="返回" onclick="history.back(-1)"/>
                </div>
            </form>
        </div>

    </div>
@include('common/footer')
