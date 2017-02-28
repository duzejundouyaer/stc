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
class ManController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * 服务商个人中心d
     */
    public function Index(){
        $man_id=Session::get('man_id');
//        if($man_id==''){
//            return view('re_login.re_login');
//        }else{
        $order=DB::select('select *  from tcs_order inner join tcs_fault on tcs_order.fault_id = tcs_fault.fault_id where order_id in (select order_id from tcs_man_order where man_id=1)');
//            print_r($order);die;
        return view('man.index',['order'=>$order]);
//        }
    }
    public function OrderState(){
        $order_id=Input::get('order_id');
        $data=DB::table('tcs_order')
            ->where('order_id', $order_id)
            ->update(array('order_state' => 2));
        if($data){
            echo 0;
        }else{
            echo 1;
        }
    }
}
?>
