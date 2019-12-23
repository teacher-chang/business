<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/27
 * Time: 22:06
 */
namespace App\Http\Controllers;
use App\Http\Model\User;

class UserController extends \Illuminate\Routing\Controller{
    public function user_list()
    {
        $param = $_POST;
        $res = User::user_list($param);
            return view('user_list', ['lists' => $res,'name'=>session()->get('user_name')]);

    }

    public function user_add(){
            return view('user_add',['name'=>session()->get('user_name')]);
    }

    public function user_save(){
        $param = $_POST;
        $res = User::user_save($param);
        if ($res){
            return redirect('user_list');
        }
    }

    public function user_update($id){
        $res = User::user_update($id);
        return view('user_update',['msg'=>$res,'name'=>session()->get('user_name')]);

    }

    public function user_edit(){
        $param = $_POST;
        $res = User::user_edit($param);
        if ($res){
            return redirect('user_list');
        }
    }

    public function user_del($id){
        $res = User::user_del($id);
            return redirect('user_list');
    }

}