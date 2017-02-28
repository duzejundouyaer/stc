<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',"HomeController@Index");

// //井宏伟
// //联保商家
// Route::get('business',"BusinessController@index");
// //联保商家详情
// Route::any('details',"BusinessController@details");
// //咨询
// Route::get('list',"ConsultationController@index");
// //咨询详情页
// Route::get('list_details',"ConsultationController@details");
// //联系我们 接值
// Route::post('message','MailController@send');


// //靖发
// //客户下单页面
// Route::any('order',"HomeController@Order");
// //项目首页
// Route::get('home',"HomeController@Index");

// //百度地图
// Route::get('map','HomeController@Map');


// //王雪岗
// //订单页面
// Route::get('getorder',"OrderController@Index");
// //订单查询
// Route::get('ordersearch',"OrderController@OrderSearch");
// //厂家接单
// Route::get('jieorder',"OrderController@JieOrder");
// //厂家登录
// Route::get('re_login',"ReLoginController@Index");
// //厂家登录
// Route::get('manlogin',"ReLoginController@Login");
// //验证手机号唯一性
// Route::any('unique',"ReLoginController@Unique");
// //服务商注册
// Route::any('register',"ReLoginController@Register");
// //完善信息
// Route::any('complete',"ReLoginController@Complete");
// //完善信息入库
// Route::any('addComplete',"ReLoginController@addComplete");
// //首页搜索
// Route::any('search',"HomeController@search");
// //服务商个人中心
// Route::any('man','ManController@Index');
// //服务商修改状态
// Route::any('orderstate','ManController@OrderState');

// //王泽阳
// //同城网点
// Route::get('citydot','CitydotController@index');
// //同城网点详情页
// Route::any('details','CitydotController@details');
// //退出
// Route::get('quit','HomeController@quit');









