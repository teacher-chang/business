<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/16
 * Time: 16:47
 */
namespace App\Http\Controllers;
use App\Http\Model\Admin;
use App\Http\Model\Provider;
use App\Http\Model\User;

class AdminController extends Controller
{
    public function order_list()
    {
        $res = Admin::order_list();
        $ret = Admin::order_count();
        $rest = Admin::order_sum();
        $rests =Provider::provider_list();
        return view('order_list',['lists'=>$res,'order_count'=>$ret,'order_sum'=>$rest,'providers'=>$rests,'name'=>session()->get('user_name')]);
        }

    public function order_add()
    {
        $res = User::user_list();
        $ret = Provider::provider_list();
        return view('order_add',['users'=>$res,'providers'=>$ret,'name'=>session()->get('user_name')]);
    }
    public function order_save(){
        $param = $_POST;
        $res = Admin::order_save($param);
        if ($res){
           return redirect('order_list');
        }
    }
    public function order_update($id){
        $res = Admin::order_update($id);
        return view('order_update',['msg'=>$res,'name'=>session()->get('user_name')]);
    }
    public function order_edit(){
        $data = $_POST;
        $res = Admin::order_edit($data);

        return redirect('order_list');


    }

    public function order_delete($id){
        $res = Admin::order_delete($id);
        if ($res){
            return redirect('order_list');
        }
    }

    public function end_list(){
        $res = Admin::end_list();
        $ret = Admin::end_count();
        $rest = Admin::end_sum();
        $rests = Provider::provider_list();
        return view('end_list',['lists'=>$res,'end_count'=>$ret,'end_sum'=>$rest,'providers'=>$rests,'name'=>session()->get('user_name')]);
    }

    public function order_finish($id)
    {
        $res = Admin::order_finish($id);
        if ($res) {
            return redirect('order_list');
        }

    }

    public function order_search(){
        $param = $_POST;
        $res = Admin::order_search($param);
        $ret = Admin::order_count();
        $rest = Admin::order_sum();
        $rests =Provider::provider_list();
        return view('order_list',['lists'=>$res,'order_count'=>$ret,'order_sum'=>$rest,'providers'=>$rests,'name'=>session()->get('user_name')]);


    }



}