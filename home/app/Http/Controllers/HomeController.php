<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*
     * 首页页面
     */
    public function Index()
    {
        $man_id = Session::get('man_id');
        // //轮播图展示
        // $image = DB::table('tcs_images')->orderBy('images_sort', 'DESC')->limit(2)->get();
        // $info = DB::table('tcs_man')->where(['man_id'=>$man_id])->get();
        // $man_info = [];
        // foreach($info as $val)
        // {
        //     $man_info = $val;
        // }

        //return view('home.index',['image'=>$image,'man_info'=>$man_info]);
        return view('home.index');

    }


    /*
     * 退出
     */
    public function Quit(Request $request)
    {
        if($request->session()->get('man_id'))
        {
            $request->session()->forget('man_id');
            $request->session()->flush();
        }
        echo 1;
    }



    /*
     * 立即下单
     */
    public function Order(Request $request){

        if($request->isMethod('post')){

            $user_name =htmlentities($request->input('user_name'),ENT_QUOTES, 'UTF-8');
            $user_phone =htmlentities($request->input('user_phone'),ENT_QUOTES, 'UTF-8');
            $user_address =htmlentities($request->input('user_address'),ENT_QUOTES, 'UTF-8');
            $type_name =htmlentities($request->input('type_name'),ENT_QUOTES, 'UTF-8');
            $fault_details =htmlentities($request->input('fault_details'),ENT_QUOTES, 'UTF-8');
            $time = date('Ymd h:i:s');
            $order_number = date('Y-m-d').rand(11111,99999);

            $res = DB::table('tcs_fault')->insertGetId([
                'user_name' => $user_name ,
                'user_phone' => $user_phone ,
                'user_address' => $user_address,
                'fault_details'=>$fault_details,
                'type_name'=>$type_name,
            ]);

            if($res) {
                $re = DB::table('tcs_order')->insertGetId([
                    'fault_id' => $res,
                    'order_time' => $time,
                    'order_number' => $order_number,
                ]);
                if($re){
                    return redirect('home');
                }
            }
        }else{
            return view('home.order');
        }
    }


    //首页搜搜
    public function search(){
        $search=Input::get("search");
        if(is_numeric($search)){
            $data = DB::table("tcs_fault")
                ->join('tcs_order', 'tcs_fault.fault_id', '=', 'tcs_order.fault_id')
                ->where('order_number',$search)
                ->paginate(2);
          
                if($data){
                    return view('order.order',['order'=>$data]);
                }else{
                    echo "<script>alert('查询没有此项');location.href='home'</script>";
                }

        }else{
            $date=DB::table("tcs_man")
                ->where("man_name",'like','%'.$search.'%')
                ->get();
            if($date){
                echo 1;die;

            }else{
                echo "<script>alert('查询没有此项');location.href='home'</script>";

            }
        }

    }


    /*
     * 百度地图
     */
    public function Map(){
        return view('home.map');
    }
}
?>
