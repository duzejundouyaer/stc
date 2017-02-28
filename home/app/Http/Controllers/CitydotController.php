<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;


class CitydotController extends BaseController
{
    public function index()
    {
        //查询所有网点信息
        $man_info = DB::table("tcs_man")->get();
       // dd($man_info);
        return view('citydot/citydot',['man_info'=>$man_info]);
    }


    //详情页
    public function details()
    {
        $id=Input::get("id");
       // print_r($id);die;
        $details_info = DB::select("select * from tcs_man where man_id='$id'");
//        print_r($details_info);die;
        return view('citydot/details',['details_info'=>$details_info]);
    }

}
