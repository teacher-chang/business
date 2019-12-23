<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/17
 * Time: 18:37
 */
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model{
    //订单管理
    static public function order_save($data){
        $order_sn = 'sn'.date('Ymd').rand(10000,99999);
        $arr = [
            'order_sn' => $order_sn,
            'project_name' => $data['project_name'],
            'order_source' => $data['order_source'],
            'order_amount' => $data['order_amount'],
            'order_time' => $data['order_time'],
            'delivery_time' => $data['delivery_time'],
            'developer' => $data['developer'],
            'bill_amount' => $data['bill_amount'],
            'bill_time' => $data['bill_time'],
            'agent_delivery_time' => $data['agent_delivery_time'],
            'deposit_income' => $data['deposit_income'],
            'deposit_expenditure' => $data['deposit_expenditure']
        ];
        $res = DB::table('order_info')
             ->insert($arr);
        return $res;
    }
    static public function order_list(){
        $res = DB::table('order_info')
             ->where(['del_flag'=>0])
             ->orderBy('id','desc')
             ->paginate(8);
        return $res;
    }
    static public function order_update($id){
        $res = DB::table('order_info')
             ->where('id',$id)
             ->first();
        return $res;
    }
    static public function order_edit($data){
        $arr = ['project_name' => $data['project_name'],
                'order_source' => $data['order_source'],
                'order_amount' => $data['order_amount'],
                'order_time' => $data['order_time'],
                'delivery_time' => $data['delivery_time'],
                'developer' => $data['developer'],
                'bill_amount' => $data['bill_amount'],
                'bill_time' => $data['bill_time'],
                'agent_delivery_time' => $data['agent_delivery_time'],
                'deposit_income' => $data['deposit_income'],
                'deposit_expenditure' => $data['deposit_expenditure']
        ];
        $res = DB::table('order_info')
             ->where('id',$data['id'])
             ->update($arr);
        return $res;

    }
    static public function order_delete($id){
        $arr = ['del_flag'=>1];
        $res = DB::table('order_info')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }

    static public function order_count(){
        $res = DB::table('order_info')
            ->where('del_flag',0)
            ->count();
        return $res;
    }

    static public function order_sum(){
        $res = DB::table('order_info')
            ->where('del_flag',0)
            ->sum('order_amount');
        return $res;
    }

    static public function end_list(){
        $res = DB::table('order_info')
            ->where('finish_flag',1)
            ->paginate(8);
        return $res;
    }

    static public function order_finish($id){
        $arr = ['finish_flag'=>1];
        $res = DB::table('order_info')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }

    static public function  end_count(){
        $res = DB::table('order_info')
            ->where('finish_flag',1)
            ->count();
        return $res;
    }

    static public function end_sum(){
        $res = DB::table('order_info')
            ->where('finish_flag',1)
            ->sum('order_amount');
        return $res;
    }

    static public function order_search($data){
        $arr = [];
        if ($data['pro_name']!=''){
           $arr['project_name']=$data['pro_name'];
        }
        if ($data['order_source']!=''){
            $arr['order_source']=$data['order_source'];
        }
        $res = DB::table('order_info')
            ->where($arr)
            ->paginate(8);
        return $res;
    }
}