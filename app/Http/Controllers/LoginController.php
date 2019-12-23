<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/14
 * Time: 21:30
 */
namespace App\Http\Controllers;

use App\Http\Model\Login;

class LoginController extends Controller{
    public function login(){
        return view('login');

    }

    public function login_check(){
        $param = $_POST;
        $res = Login::login_check($param);
        if ($res == '登录成功'){
            return view('index',['name'=>session()->get('user_name')]);
        }else{
            return view('login');
        }

    }
}