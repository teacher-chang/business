<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/21
 * Time: 20:32
 */
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Provider extends Model{
    static public function provider_save($data){
        $provider_sn = 'p'.date('Ymd').rand(1000,9999);
        $arr = [
            'provider_sn' => $provider_sn,
            'provider_name' => $data['provider_name'],
            'provider_phone' => $data['provider_phone'],
            'desc' => $data['desc'],
            'create_time' => date('Y-m-d')
        ];
        $res = DB::table('provider_info')
            ->insert($arr);
        return $res;

    }

    static public function provider_list(){
        $res = DB::table('provider_info')
            ->where('del_flag',0)
            ->get();
        return $res;
    }

    static public function provider_update($data){
        $res = DB::table('provider_info')
            ->where('id',$data)
            ->first();
        return $res;
    }

    static public function provider_edit($data){
        $arr = [
            'provider_name' => $data['provider_name'],
            'provider_phone' => $data['provider_phone'],
            'desc' => $data['desc']
        ];
        $res = DB::table('provider_info')
            ->where('id',$data['id'])
            ->update($arr);
        return $res;

    }

    static public function provider_del($data){
        $arr = ['del_flag'=>1];
        $res = DB::table('provider_info')
            ->where('id',$data)
            ->update($arr);
        return $res;

    }
}