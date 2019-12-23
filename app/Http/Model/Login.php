<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/16
 * Time: 16:03
 */
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model{
    static public function login_check($data){
        $res = DB::table('admin_account')
            ->where('name',$data['username'])
            ->get();
        if ($res){
            $res = DB::table('admin_account')
                ->where('password',$data['password'])
                ->where('name',$data['username'])
                ->get();
            if ($res) {
                session()->put('user_name',$data['username']);
                return '登录成功';
            }else{
                return '密码错误';
            }
        }else{
            return '用户名不存在';
        }
    }
}