<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Input;


class ConsultationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public  function  index(){
        $data=DB::table('tcs_advice')->paginate(3);
        return view("consultation/list",["arr"=>$data]);
    }
    /*
     * 咨询详情页
     */
    public function details(){
        $id=Input::get("id");
        $data=DB::table('tcs_advice')->where("advice_id",$id)->get();
        return view("consultation/show",['data'=>$data]);
    }
}
