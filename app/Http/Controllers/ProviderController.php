<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 2019/11/21
 * Time: 19:38
 */
namespace App\Http\Controllers;
use App\Http\Model\Provider;
class ProviderController extends Controller{
    public function provider_list()
    {
        $res = Provider::provider_list();
            return view('provider_list', ['lists' => $res,'name'=>session()->get('user_name')]);

        }


    public function provider_add(){
        return view('provider_add',['name'=>session()->get('user_name')]);
    }

    public function provider_save(){
        $param = $_POST;
        $res = Provider::provider_save($param);
        if ($res){
            return redirect('provider_list');
        }
    }

    public function provider_update($id){
        $res = Provider::provider_update($id);
        return view('provider_update',['msg'=>$res,['name'=>session()->get('user_name')]]);
    }

    public function provider_edit(){
        $param = $_POST;
        $res = Provider::provider_edit($param);
        if ($res){
            return redirect('provider_list');
        }

    }
    public function provider_del($id){
        $res = Provider::provider_del($id);
        return redirect('provider_list');

    }


}