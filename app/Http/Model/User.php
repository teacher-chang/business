<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/28
 * Time: 20:56
 */
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model{
    static public function user_save($data){
        $arr = [
            'user_name'=>$data['user_name'],
            'user_phone'=>$data['user_phone'],
            'desc'=>$data['desc']
        ];
        $res = DB::table('user_info')
            ->insert($arr);
        return $res;

    }

    static public function user_list(){
        $res = DB::table('user_info')
            ->where('del_flag',0)
            ->get();
        return $res;
    }

    static public function user_update($id){
        $res = DB::table('user_info')
            ->where('id',$id)
            ->first();
        return $res;
    }

    static public function user_edit($data){
        $arr = [
            'user_name'=>$data['user_name'],
            'user_phone'=>$data['user_phone'],
            'desc'=>$data['desc']
        ];
        $res = DB::table('user_info')
            ->where('id',$data['id'])
            ->update($arr);
        return $res;
    }

    static public function user_del($id){
        $arr = [
            'del_flag'=>1
        ];
        $res = DB::table('user_info')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }
}