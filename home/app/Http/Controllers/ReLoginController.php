<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation;

class ReLoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * 厂家登录页面
     */
    public function Index(){
        return view('re_login.re_login');
    }

    /**
     * 厂家登录
     */
    public function Login(){
        $phone=Input::get('phone');
        $pwd=md5(Input::get('pwd'));
        $data=DB::table('tcs_man')->where('man_phone', $phone)->where('man_pwd',$pwd)->where('man_examine','1')->first();
        $man_id=$data->man_id;
        $man_phone=$data->man_phone;
//        echo $man_id.$man_phone;die;
        if($data){
            Session::put('man_id',$man_id);
            Session::put('man_phone',$man_phone);
            echo 0;
        }else{
            echo 1;
        }
    }



    //验证手机号码唯一性
    public function Unique()
    {
        $phone=Input::get('phone');
        $data=DB::table('tcs_man')->where('man_phone', $phone)->get();
        if(!$data)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }



    //服务商注册
    public function Register()
    {
        $phone = Input::get('phone');
        $pwd = Input::get('pwd');
        $time = time();
        $data=DB::insert('insert into tcs_man (man_phone,man_pwd,man_addtime) values(?,?,?)',[$phone, md5($pwd),$time]);
        if($data)
        {
            $ser=DB::table('tcs_man')->where('man_phone', $phone)->where('man_pwd',md5($pwd))->where('man_examine','0')->first();
            $last_id=$ser->man_id;

            $arr=array(
                "msg"=>1,
                "id"=>$last_id
            );
            echo json_encode($arr);
        }
        else
        {
            echo "<script>alert('注册失败');location.href='re_login';</script>";
        }
    }


    //完善信息页面
    public function complete()
    {
        $id=Input::get('id');
        return view('complete.complete',['id'=>$id]);
    }


    //完善信息入库
    public function addComplete(Request $request)
    {
        $id = Input::get('id');
        $data['man_desc'] = Input::get('man_desc');
        $data['man_name'] = Input::get('man_name');
        $data['man_username'] = Input::get('man_username');
        $data['is_all'] =  empty(Input::get('natureAll')) ? 0 : 1;
        $nature = Input::get('nature');
        $data['user_nature'] = implode('/',$nature);
        $data['man_address'] = Input::get('prov').'-'. Input::get('city').'-'.Input::get('dist').'-'.Input::get('man_address');
        $images = $_FILES['logo'];
        $arr = pathinfo($images['name']);
        $type = $arr['extension'];
        $time = date("Y/m/d", time());
        $path = "upload/$time";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            $images_name = date('Ymd') . rand(10000, 99999);

            $name = "$path/" . "$images_name" . "." . "$type";
            move_uploaded_file($images['tmp_name'], $name);
            $data['man_img']=$name;
        }
        $res = DB::table('tcs_man')
            ->where('man_id',$id)
            ->update($data);
        if($res)
        {
            echo "<script>location.href='home'</script>";
        }
        else
        {
            return view('complete/complete',['id'=>$id]);
        }
    }
}

