<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ACG艺术留学培训班,ACG艺术留学教育培训,武汉艺术专业出国留学是武汉ACG国际艺术教育中心的武汉其他培训课程，咨询电话：027-86730762。" />
    <meta name="keywords" content="作品集,如何申请艺术院校,作品集培训" />
    <title>TCS---服务商信息完善</title>
    <script src="register/js/jquery-1.8.0.min.js"></script>
    <script src="register/js/all.js"></script>
    <script type="text/javascript" src="register/js/layer.js" charset="UTF-8"></script>
    <link href="register/css/share.css" rel="stylesheet"/>
    <link href="register/css/index.css" rel="stylesheet"/>
</head>
<body><style>
    .b_nav a{
        color: #333;
    }
    .b_nav a:hover{
        color: #FF7300;
    }
    .imgInto{
        position: absolute;
        bottom: 0;
        left: 15px;
    }
    .other{
        margin-left: 20px;;
        margin-top: -29px;

    }
    .imgInto p{
        color: white;
    }
    .other a{
        color: #333;
    }
    .other a:hover{
        color: #FF7300;
    }
    .share{
        position: absolute;
        bottom: 0px;
        right: 0;
    }
</style>

<div class="main1">
    <section class="Yang">
        <header id="header" class="homeHeader">
            <div class="cent">
                服务商信息完善        </div>
        </header>
        <div id="navShadow" class="popShadow"></div>    <div class="mt20"></div>
    </section>    </section>
    <div class="bgf6">

        <section>
            <div class="nxqalbum">
                <img src="./register/images/7.jpg" data-original="" class="nxqtopimg sw_loading" />
                <div style="position: absolute;width: 100%;height: 40px;bottom:0;left: 0;background: rgba(0,0,0,0.5)">
                    <div class="imgInto">
                        <p>TCS---售后服务平台</p>
                        <p>电话：027-86730789</p>                </div>
                </div>

            </div>

        </section>
        <section class="bg1">
            <div class="InsDetails">
                <div class="InsD_title">
                    <div class="clearfix">
                        <h3 class="f18 lh25">服务商信息</h3>
                    </div>
                </div>
                <div class="InsD_table">
                    <form action="addComplete" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">服务商名称</td>
                            <td class="orange">
                                <input  style="border: solid #009ba6 1px;border-radius: 5px;" type="text" id="man_name"  name="man_name"  placeholder="服务商名称">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">联系人</td>
                            <td class="orange">
                                <input  style="border: solid #009ba6 1px;border-radius: 5px;" type="text" id="man_name"  name="man_name"  placeholder="联系人姓名">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">服务商logo</td>
                            <td class="orange">
                                <input style="border: solid #009ba6 1px;border-radius: 5px;" type="file" name="logo" id=""/>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">选择地址</td>
                            <td class="orange">
                                <select  class="prov" style="border: solid #009ba6 1px;border-radius: 5px;" name="prov">
                                    <option value="北京市">--请选择--</option>
                                    <option value="北京市">--北京市--</option>
                                    <option value="山西">--山西--</option>
                                </select>
                                <select class="city" style="border: solid #009ba6 1px;border-radius: 5px;" name="city" >
                                    <option value="海淀">--请选择--</option>
                                    <option value="海淀">--海淀--</option>
                                    <option value="大同">--大同--</option>
                                </select>
                                <select class="dist" style="border: solid #009ba6 1px;border-radius: 5px;" name="dist" >
                                    <option value="上地">--请选择--</option>
                                    <option value="上地">--上地--</option>
                                    <option value="浑源">--浑源--</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">服务性质</td>
                            <td class="orange">
                                <ul style="list-style: none;height: 160px;margin-right: 50px;">
                                    <li><input type="checkbox" name="natureAll" class="all" value="1">全部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;<input type="checkbox" name="nature[]" class="nature" value="大家电" >大家电</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="厨卫家电">厨卫家电
                                        <input type="checkbox" name="nature[]" class="nature" value="生活电器">生活电器</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="净化设备">净化设备
                                        <input type="checkbox" name="nature[]" class="nature" value="个人护理">个人护理</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="影音电器">影音电器
                                        <input type="checkbox" name="nature[]" class="nature" value="手机数码">手机数码</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="办公设备">办公设备
                                        <input type="checkbox" name="nature[]" class="nature" value="健身器材">健身器材</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="中央空调">中央空调
                                        <input type="checkbox" name="nature[]" class="nature" value="冰箱">冰箱</li>
                                    <li><input type="checkbox" name="nature[]" class="nature" value="洗衣机">洗衣机&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="nature[]" class="nature" value="手机">手机</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 80px;font-size: 14px;"  class="blue">服务描述</td>
                            <td class="orange">
                                <textarea name="man_desc" id="" cols="30" rows="10" style="border: solid #009ba6 1px;border-radius: 5px;" placeholder="服务描述"></textarea>
                            </td>
                            <input type="hidden" name="id" value="{{$id}}">
                        </tr>
                        <tr>
                            <td class="orange" colspan="2" align="center">
                                <input style="border: solid #009ba6 3px;border-radius: 5px;width: 80px;height: 30px;color: brown" type="submit" value="提交    " id=""/>
                            </td>
                        </tr>
                    </table>
                        </form>
                </div>
            </div>

            <style>
                .addr{
                    display: inline-block;
                    color: #333;
                    margin-left: 10px;
                    float: left;
                    vertical-align: middle;
                    height: 30px;

                }
                .addr:hover{
                    color: #FF7300;
                }
                .addr1{
                    display: inline-block;margin-top: -5px;float: left;
                    font-size: 16px;color: #666;margin-left: 10px;
                }
                .addr1:hover{
                    color: #FF7300;
                }
                .callMe{
                    float: right;
                    display: inline-block;
                    height: 30px;
                    width: 75px;
                    background: #FF7300;
                    line-height: 30px;
                    text-align: center;
                    color: white;
                    border-radius: 3px;
                    margin-right: 10px;
                    margin-top: 3px;
                }
                .user-wrapper{
                    position: relative;
                    height: 54px;
                }
                .bg1 .feedbackCard{
                    border-bottom: 1px solid #E2E2E2;
                    padding-bottom: 10px;
                    margin-bottom: 10px;
                }
                .feedbackCard .user-pic {
                    position: absolute;
                    width: 54px;
                    height: 54px;
                    vertical-align: top;
                }
                .feedbackCard .user-pic .imgbox {
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                }
                .imgbox {
                    max-width: 4rem;
                    position: relative;
                }
                .imgbox img {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -moz-transform: translate(-50%,-50%);
                    vertical-align: middle;
                    border: 0;

                }
                .feedbackCard .user-info-text {
                    margin-left:70px;
                    font-size: .24rem;
                    color: #999;
                    vertical-align: middle;
                    height: 54px
                overflow: hidden;
                    padding-top: 9px;

                }
                .feedbackCard .userInfo {
                    margin-bottom: .12rem;
                    font-size: .24rem;
                }
                weak, small {
                    color: #666;
                }
                .feedbackCard .score {
                    margin-bottom: .4rem;
                    font-size: .24rem;
                }
                .feedbackCard .stars {
                    font-size: .28rem;
                    margin-right: .2rem;
                    vertical-align: bottom;
                }
                .stars {
                    display: inline-block;
                    color: #f90;
                }
                .stars i {
                    margin-right: .2em;
                    vertical-align: 0rem;
                }
                .text-icon {
                    font-family: base_icon;
                    display: inline-block;
                    vertical-align: middle;
                    font-style: normal;
                }
                .feedbackCard .serious-evaluation {
                    position: absolute;
                    width: 54px;
                    height: 54px;;
                    top: -.18rem;
                    right: .25rem;
                }
                .feedbackCard .serious-evaluation img {
                    width: 100%;
                    height: 100%;
                    vertical-align: middle;
                    border: 0;
                    margin-top: 10px;
                    padding-bottom: 10px;
                }
                .feedbackCard .comment {
                    margin-top: .3rem;
                }
                .feedbackCard .comment {
                    margin-bottom: .22rem;
                    font-size: .3rem;
                }
                .feedbackCard .pics {
                    margin-bottom: .26rem;
                }
                .text-icon.icon-star-gray{
                    color: #E2E2E2;
                    content: '★';
                }

                .text-icon {
                    font-family: base_icon;
                    display: inline-block;
                    vertical-align: middle;
                    font-style: normal;
                    margin-right: .1rem;
                    font-size: .36rem;
                }
                .color-weaker {
                    color: #999!important;
                }
                .pull-right {
                    float: right!important;
                    margin-right: 10px;
                }
            </style>
        </section>


    </div>
</div>

</div>

</body>
<script>
    //全选全不选
    $(".all").click(function(){
        if(this.checked == true)
        {
            $(".nature").each(function(){
                this.checked = true;
            })
        }
        else
        {
            $(".nature").each(function(){
                this.checked = false;
            })
        }
    })
</script>
</html>
