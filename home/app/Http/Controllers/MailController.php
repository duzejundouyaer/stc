<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
class MailController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send()
    {
     
        
        $data['name'] = htmlspecialchars(Input::get('iphorm_64_1'));
      //  print_r($data['name']);die;
        $data['email'] = htmlspecialchars(Input::get('iphorm_64_3'));
        $data['phone'] = htmlspecialchars(Input::get('iphorm_64_2'));
        $data['discont'] = htmlspecialchars(Input::get('iphorm_64_4'));
        $result = DB::table('tcs_message')->insert($data);
        $datas = "您收到客户".$data['name']."的留言"."\r\n"."留言内容为：".$data['discont']."\r\n"."联系方式：".$data['phone']."\r\n"."邮箱：".$data['email']."\r\n"."请尽快与客户取得联系";
        if($result)
        {
            $flag = Mail::raw($datas,function ($message)
            {
                $to = '412275200@qq.com';
                $message->from('2538013391@qq.com','TCS售后平台');
                $message->subject('TCS售后服务平台');
                $message->to($to);

            });
            if($flag)
            {
                echo "<script>alert('留言成功');location.href='map'</script>";
            }else
            {
                echo "<script>alert('留言失败');location.href='map'</script>";
            }
    }}
}
?>
