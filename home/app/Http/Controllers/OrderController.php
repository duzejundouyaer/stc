<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class OrderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * 订单页面
     */
    public function Index()
    {
        $order=DB::table('tcs_order')
            ->join('tcs_fault','tcs_order.fault_id','=','tcs_fault.fault_id')
            ->orderBy('tcs_fault.fault_id', 'desc')
            ->paginate(4);
        return view('order.order',['order'=>$order]);
    }
    //订单查询
    public function OrderSearch()
    {
        $search=Input::get('search');
        if(preg_match("/^1[34578]{1}\d{9}$/",$search))
        {
            $where="user_phone='$search'";
        }
        else
        {
            $where="user_name like '%$search%'";
        }
        $order = DB::table("tcs_fault")
            ->join('tcs_order', 'tcs_fault.fault_id', '=', 'tcs_order.fault_id')
            ->whereRaw($where)
            ->orderBy('tcs_fault.fault_id', 'desc')
            ->paginate(2);
        return view('order.order',['order'=>$order]);
    }
    //厂家接单
    public function JieOrder(){
        $man_id=Session::get('man_id');
        if($man_id==''){
            echo 1;
        }else{
            $order_id=Input::get('order_id');
            $data=DB::insert('insert into tcs_man_order (man_id,order_id) values(?,?)',[$man_id, $order_id]);
            DB::table('tcs_order')
                ->where('order_id', $order_id)
                ->update(array('order_state' => 1));
            if($data){
                echo 0;
            }else{
                echo 1;
            }
        }
    }
}
?>
