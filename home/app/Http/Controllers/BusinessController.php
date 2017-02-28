<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Input;


class BusinessController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*
     * 联保商家 页面
     */
    public function index(){
        $data=DB::select("select * from tcs_man");
        //print_r($data);die;
        return view('business/index',['data'=>$data]);
    }
    /*
     * 联保商家详情页
     */
    public function details(){
        $id=Input::get("id");
        $data=DB::table('tcs_man')->where("man_id",$id)->get();
        return view("business/details",['data'=>$data]);
    }
}