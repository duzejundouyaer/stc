

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
        爱服务
    </title><meta name="renderer" content="webkit" /><link href="/ifwcss/reset.css" type="text/css" rel="stylesheet" /><link href="/ifwcss/style.css" type="text/css" rel="stylesheet" />
    <script src="/ifwjs/jquery.js" type="text/javascript"></script>
    <script src="/ifwjs/js.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/adscript.js"></script>
    <script src="/ifwjs/common.js" type="text/javascript"></script>
    <script src="/ifwjs/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function addFavorite(url, title) {
            try {
                window.external.addFavorite(url, title);
            } catch (e) {
                try {
                    window.sidebar.addPanel(title, url, "");
                } catch (e) {
                    alert("加入收藏失败，请使用Ctrl+D进行添加");
                }
            }
        }
    </script>


</head>
<body onload="showdiv()">
<div id="body">
    <!-------------header---------------------->
    <div class="bgcolor_f3 lh32" style="position: fixed; width: 100%; z-index: 1001">
        <div class="box lh32 margin_auto">
            <div class="fr color_666">
                <ul class="nav_global">
                    <li>爱服务网络：</li>
                    <li><span style="border-top-color:#06e">家电网</span></li>
                    <li><a href="http://home.51ifw.com/" style="border-bottom-color: #f80">家居网</a></li>
                    <li><a href="http://jiazheng.51ifw.com" style="border-bottom-color: #2d0">家政网</a></li>
                </ul>
            </div>
            <span class="fl">您好，欢迎来到爱服务！</span>
            <span id="lbllore"><a href="/Passport/Login.aspx" class="a2 fl margin_10l">[登录]</a> <a href="/Passport/Reg.aspx" class="a2 fl margin_10l">[免费注册]</a></span>
            <div class="fl" style="padding: 5px 0 0 20px">
                <!-- WPA Button Begin -->
                <script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNTQ2NV8yMDI1MjRfNDAwMDg1ODg4OV8"></script>
                <!-- WPA Button End -->
            </div>
        </div>
    </div>
    <div class="space_30"></div>
    <!-------------header--end-------------------->
    <!---------------------search--------------------->
    <div class="ly_box">
        <div class="fl logo_box" style="margin-top: 5px">
            <p><a href="/"><img src="/ifwimages/logo.gif"  alt=""/></a></p>
            <p>家电、家居、家政服务交易平台</p>
        </div>
        <div class="fl search_box margin_30t">

            <div class="sc lh40">
                <a href="javascript:void(0);" target="_blank" onclick="this.href='/Service/SearchServiceSite.aspx?search='+$('#lsearch').val();"><span class="fr display_inline_block lh40 padding_10l padding_10r" title="搜索">
                        <input type="submit" class="border_0 display_inline_block lh40 btn2 pointer" value="" /></span></a>
                <span class="display_block lh40 padding_15l bgcolor_f3 btn1 fl">网点搜索</span>
                <input type="text" class="border_0 input_search bgcolor_ff" id="lsearch"/>
            </div>
            <div class="line_height_30">
                <script type="text/javascript" src="/system/adscript.aspx?p=21"></script></div>
            <div class="space_5" style="height:5px">&nbsp;</div>

        </div>
        <div class="contact_box fr margin_30t">
        </div>
    </div>
    <div class="clear"></div>
    <div class="space_10"></div>
    <!---------------------search----end----------------->
    <!-------------------nav--------------------->
    <div class="nav">
        <div class=" ly_box">
            <span class="fl padding_40l display_block color_white f14 bold classify_btn">全部服务分类</span>
            <ul class="title_nav">
                <li class="fl"><a href="/"><span class="color_white bold f14 list display_block pointer tc">首页</span></a></li>
                <span id="ctl00_lbldd"><li class="fl"><a href="/Service/Service_Order.aspx"><span class="color_white bold f14 list display_block pointer tc">服务订单</span></a></li></span>

                <li class="fl"><a href="/Service/Service_bs.aspx"><span class="color_white bold f14 list display_block pointer tc">同城网点</span></a></li>
                <li class="fl"><a href="/Service/ServiceSite.aspx?parentCode=01&address=北京市"><span class="color_white bold f14 list display_block pointer tc">服务网点</span></a></li>


                <li class="fl"><a href="/Brand/WtBrand.aspx"><span class="color_white bold f14 list display_block pointer tc">联保商家</span></a></li>
                <li class="fl"><a href="/mall/"><span class="color_white bold f14 list display_block pointer tc">商城</span></a></li>

                <li class="fl"><a href="/Service/PurchaseNeed.aspx"><span class="color_white bold f14 list display_block pointer tc">采购需求</span></a></li>

                <li class="fl"><a href="/News/MessageInfo.aspx"><span class="color_white bold f14 list display_block pointer tc">服务资讯</span></a></li>
                <li class="fl"><a href="/urlbbs/index.aspx" target="_blank"><span class="color_white bold f14 list display_block pointer tc">培训交流</span></a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <!-------------------nav---end------------------>

    <div class="ly_box">
        <div class="space_10"></div>
        <div class="fl bnr_box">
            <a href="MessageDetails.aspx?id=237" target="_blank">
                <img src="/upload/information/201401/2515104775.jpg" class="border_ls fl" width="320" height="248" style="_height:258px;"/>
            </a>
				<span class="fl display_inline_block width515 margin_10l border_ls">
					<div class="space_20"></div>
					<div class="tc f18 color_black">
						<a href="MessageDetails.aspx?id=237" target="_blank">爱服务网二期即将上线</a>
					</div>
					<div class="space_10"></div>
					<div class="padding_30l padding_30r line_height_22">
						爱服务家电服务交易平台二期即将上线,该平台上线后，可以有效解决中小型家电企业及电商的售后安装维修问题，为老百姓的生活提供...<a href="MessageDetails.aspx?id=237" target="_blank">[查看全文]</a>
					</div>
					<div class="space_20"></div>
					<div class="rn_title lh30 color_black f12 margin_20l padding_15l yahei bold">
					最近更新
					</div>
					<div class="space_10"></div>
					<div class="padding_30l padding_30r">
						<span class="display_inline_block width210 line_height_22"> &bull; <a href='MessageDetails.aspx?id=658' target='_blank'>樱雪、新飞、巧太太、美菱、欧意...</a> <br /> &bull; <a href='MessageDetails.aspx?id=656' target='_blank'>线上渠道“双11”成家电厂商“消...</a> <br /> &bull; <a href='MessageDetails.aspx?id=637' target='_blank'>2013彩电线上渠道零售额达176亿...</a> <br /> &bull; <a href='MessageDetails.aspx?id=636' target='_blank'>如何让公共文化服务"触手可及"</a> <br /></span><span class="display_inline_block width210 line_height_22"> &bull; <a href='MessageDetails.aspx?id=635' target='_blank'>胜利黄河供应公司加强物资配送质...</a> <br /> &bull; <a href='MessageDetails.aspx?id=634' target='_blank'>谷歌加速发展当日送达物流服务：...</a> <br /> &bull; <a href='MessageDetails.aspx?id=633' target='_blank'>全自动洗衣机故障代码</a> <br /> &bull; <a href='MessageDetails.aspx?id=632' target='_blank'>洗衣机六线定时器接线技巧</a> <br /></span>
					</div>
					<div class="space_10"></div><div class="space_05"></div><div class="size_0" style="_height:5px;"></div>
				</span>
        </div>
        <!------------------login------------------>

        <form action="/passport/login.aspx?action=submit" method="post" id="formLogin">
            <div class="login_box fr">
                <div class="space_05"></div>
                <div class="f20">用户登录</div>
                <div class="space_10"></div>
                <div class="border_de lh40">
                    <span class="display_inline_block lh40 login_btn1"></span>
                    <input type="text" name="txtUserName" id="txtUserName" class="border_0 lh40 vt padding_10l input" />
                </div>
                <div class="space_20"></div>
                <div class="border_de lh40">
                    <span class="display_inline_block lh40 login_btn2"></span>
                    <input type="password" name="txtPassword" class="border_0 lh40 vt padding_10l input" />
                </div>
                <div class="space_10"></div>
                <div class="space_05"></div>
                <div>
                    <span class="fr"><a href="/Passport/Reg.aspx?type=2" class="a2">[用户注册]</a> <a href="/Passport/Reg.aspx?type=1" class="a2">[服务商注册] </a></span>
                    <input type="checkbox" id="checkbox1" /><label for="checkbox1" class="margin_10l">记住密码</label>
                </div>
                <div class="space_10"></div>
                <div class="space_05"></div>
                <div><a class="display_inline_block tc color_white f20 login_btn3 pointer" onclick="$('#formLogin').submit()">登录</a></div>
            </div>
        </form>



        <!-------------------login--end------------------>
    </div>
    <div class="clear"></div>
    <div class="space_10"></div>
    <div class="newslist ly_box">
        <div class="fl nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=1" target="_blank">更多>></a></span>
                    家电服务
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_1.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=630'>贮水式电热水器新技术介绍</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=629' target='_blank' >太阳热水器水箱保温技术介绍</a> <br /> &bull; <a href='MessageDetails.aspx?id=628' target='_blank' >贮水式电热水器技术概述</a> <br /> &bull; <a href='MessageDetails.aspx?id=617' target='_blank' >Google 32亿美元收购智能家居创业公司Nest...</a> <br /> &bull; <a href='MessageDetails.aspx?id=615' target='_blank' >家用电器安装维修服务规范标准</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fl margin_20l margin_20r nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=2" target="_blank">更多>></a></span>
                    家政服务
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_2.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=557'>搬家打包技巧</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=551' target='_blank' >搬家的技巧</a> <br /> &bull; <a href='MessageDetails.aspx?id=550' target='_blank' >家庭搬家常识</a> <br /> &bull; <a href='MessageDetails.aspx?id=339' target='_blank' >移动互联推动家政服务洗牌 新兴家政公司一路爆红</a> <br /> &bull; <a href='MessageDetails.aspx?id=307' target='_blank' >月薪八九千月嫂预定不到</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fr nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=3" target="_blank">更多>></a></span>
                    家居服务
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_3.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=616'>“整合风”劲吹泛家居</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=600' target='_blank' >家居行业服务再升级</a> <br /> &bull; <a href='MessageDetails.aspx?id=598' target='_blank' >新房里的甲醛除异味法</a> <br /> &bull; <a href='MessageDetails.aspx?id=596' target='_blank' >整体衣柜选购保养全攻略</a> <br /> &bull; <a href='MessageDetails.aspx?id=590' target='_blank' >美的集团进军智能家居 概念股市场激活</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="clear"></div><div class="space_05"></div>
        <div class="fl nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=4" target="_blank">更多>></a></span>
                    保洁服务
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_4.gif" />
                </div>
                <div class="space_20"></div>
                
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fl margin_20l margin_20r nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=5" target="_blank">更多>></a></span>
                    电脑维修
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_5.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=359'>17岁高中辍学创业者发明新型计算机</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=312' target='_blank' >百度全资收购糯米 今年一季度完成交易</a> <br /> &bull; <a href='MessageDetails.aspx?id=301' target='_blank' >超高清平板电脑搜罗</a> <br /> &bull; <a href='MessageDetails.aspx?id=300' target='_blank' >4000元买i7四核 一周笔记本降价排行</a> <br /> &bull; <a href='MessageDetails.aspx?id=283' target='_blank' >联想宣布以23亿美元收购IBM x86服务器业务</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fr nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=6" target="_blank">更多>></a></span>
                    手机维修
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_6.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=441'>2014年，移动创业要注意这些市场变化</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=348' target='_blank' >谷歌的现实、摩托的无奈与联想的接盘</a> <br /> &bull; <a href='MessageDetails.aspx?id=344' target='_blank' >iPod之父将成谷歌硬件业务核心</a> <br /> &bull; <a href='MessageDetails.aspx?id=331' target='_blank' >小米今年将继续投放春晚广告 时间长达一分钟</a> <br /> &bull; <a href='MessageDetails.aspx?id=323' target='_blank' >苹果推AppStore新春活动：为中国区独家定制</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
    </div>
    <div class="clear"></div><div class="space_05"></div>
    <div class="newslist ly_box">
        <div class="fl nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=7" target="_blank">更多>></a></span>
                    配送服务
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_7.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=636'>如何让公共文化服务"触手可及"</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=635' target='_blank' >胜利黄河供应公司加强物资配送质量管理</a> <br /> &bull; <a href='MessageDetails.aspx?id=634' target='_blank' >谷歌加速发展当日送达物流服务：拓展收入来源</a> <br /> &bull; <a href='MessageDetails.aspx?id=624' target='_blank' >唐山市加快城市共同配送试点服务体系建设为群众解决“...</a> <br /> &bull; <a href='MessageDetails.aspx?id=623' target='_blank' >天猫家装百城升级 免费配送上门安装</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fr nwbox2">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song margin_20l margin_20r padding_10l border_bottom3">
                    <span class="fr f12 "><a href="MessageList.aspx?type=8" target="_blank">更多>></a></span>
                    家电资讯
                </h6>
                <div class="space_10"></div>
                <table class="margin_20l">
                    <tr>

                        <td width="75"><img src="/Upload/information/201411/1316144706.jpg" class="border_de" width="74" height="60"/></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=656">线上渠道“双11”成家...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=656">［详情］</a>
                            </div>
                        </td>

                        <td width="75"><img src="/Upload/information/201404/0814090550.jpg" class="border_de" width="74" height="60"/></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=637">2013彩电线上渠道零售...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=637">［详情］</a>
                            </div>
                        </td>

                        <td width="75"><img src="/Upload/information/201402/0100234775.jpg" class="border_de" width="74" height="60"/></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=353">“前任红利”消失，梅...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=353">［详情］</a>
                            </div>
                        </td>

                    </tr>
                    <tr><td colspan="6"><div class="space_10"></div></td></tr>
                    <tr>
                        <td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=349' target='_blank' >习近平农历马年前夕向全国各族人...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=346' target='_blank' >马年新春微博互动量大幅提升</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=322' target='_blank' >老板电器去年净利增44%行业洗牌...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=321' target='_blank' >用互联网跟卖场砍价</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=320' target='_blank' >2013热门电视深解析</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=319' target='_blank' >大众点评张涛：2014将更加激进 ...</a><br /></td><td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=317' target='_blank' >老板卷款跑路 7亿网贷案揭底</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=315' target='_blank' >微软：稳步推进“设备与服务”转...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=314' target='_blank' >小贴士：低温对智能手机造成的影...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=313' target='_blank' >传苹果开始测试下一代Apple TV ...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=289' target='_blank' >大容量洗衣机选购指南</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=288' target='_blank' >净水企业售后不容乐观</a><br /></td><td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=276' target='_blank' >如何防止洗衣机生锈</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=268' target='_blank' >自烤食物洁净安全   选好烤箱是...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=244' target='_blank' >价格战已到最惨时 岁末超实惠电...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=243' target='_blank' >预测2016年全球4K电视出货量达30...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=242' target='_blank' >2014空调业欲演中外品牌两极分化...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=239' target='_blank' >冰箱业将呈现四大趋势：健康最被...</a><br /></td>
                    </tr>
                </table>
                <div class="space_10"></div><div class="space_05"></div>
            </div>
            <div class="bottombg2"></div>
        </div>
    </div>
    <div class="clear"></div><div class="space_05"></div>
    <div class="newslist ly_box">
        <div class="fl nwbox">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song padding_40l padding_40r">
                    <span class="fr f12 "><a href="MessageList.aspx?type=9" target="_blank">更多>></a></span>
                    维修技术
                </h6>
                <div class="tc">
                    <img src="/ifwimages/news_8.gif" />
                </div>
                <div class="space_20"></div>
                <div class="padding_40l f14 bold color_black yahei"><a href='MessageDetails.aspx?id=633'>全自动洗衣机故障代码</a> <div class="space_10"></div></div><div class="line_height_22 padding_30l padding_10r"> &bull; <a href='MessageDetails.aspx?id=632' target='_blank' >洗衣机六线定时器接线技巧</a> <br /> &bull; <a href='MessageDetails.aspx?id=631' target='_blank' >全自动洗衣机维修方法</a> <br /> &bull; <a href='MessageDetails.aspx?id=627' target='_blank' >冰堵的形成和处理方法</a> <br /> &bull; <a href='MessageDetails.aspx?id=626' target='_blank' >冰箱检修最基本的步骤</a> <br /></div>
                <div class="space_20"></div>
            </div>
            <div class="bottombg"></div>
        </div>
        <div class="fr nwbox2">
            <div class="subbox border_ccc">
                <h6 class="f18 color_blue2 normal song margin_20l margin_20r padding_10l border_bottom3">
                    <span class="fr f12 "><a href="MessageList.aspx?type=10" target="_blank">更多>></a></span>
                    行业资讯
                </h6>
                <div class="space_10"></div>
                <table class="margin_20l">
                    <tr>

                        <td width="75"><img src="/Upload/information/201503/0816315521.jpg" class="border_de" width="74" height="60" /></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=658">樱雪、新飞、巧太太、...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=658">［详情］</a>
                            </div>
                        </td>

                        <td width="75"><img src="/Upload/information/201402/1512411127.png" class="border_de" width="74" height="60" /></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=439">“留守妇女”艰辛创业...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=439">［详情］</a>
                            </div>
                        </td>

                        <td width="75"><img src="/Upload/information/201402/1512310724.jpg" class="border_de" width="74" height="60" /></td>
                        <td width="150" class="padding_10l padding_10r vt">
                            <div class="bold yahei color_black"><a href="MessageDetails.aspx?id=438">网购7日无理由退货 网...</a></div>
                            <div class="space_05"></div>
                            <div class="color_999 line_height_22">
                                <a href="MessageDetails.aspx?id=438">［详情］</a>
                            </div>
                        </td>

                    </tr>
                    <tr><td colspan="6"><div class="space_10"></div></td></tr>
                    <tr>
                        <td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=437' target='_blank' >TCL推TV+家族式电视</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=429' target='_blank' >维修价格居高不下 家电售后维修...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=427' target='_blank' >燃气热水器应该如何保养</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=426' target='_blank' >2014年 空气能热水器走向“高精...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=409' target='_blank' >习近平复信村官引巨大反响 无悔...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=407' target='_blank' >习近平向俄媒表达中国改革决心</a><br /></td><td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=404' target='_blank' >家居卖场“3·15”或迎火热销售...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=400' target='_blank' >广东降马年首场雪 低温阴雨天气...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=352' target='_blank' >除夕不打烊 京东马上要上市</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=351' target='_blank' >股市大年三十“红包”行情落空 ...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=347' target='_blank' >Facebook股价创历史新高 创始人...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=345' target='_blank' >打车APP烧钱背后：是否昙花一现...</a><br /></td><td class="padding_10r line_height_200 vt" colspan="2" height="25"> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=343' target='_blank' >不用打车软件40分钟三次被拒载</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=342' target='_blank' >腾讯阿里火拼打车或违规：返现被...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=341' target='_blank' >盛大游戏步巨人后尘：私有化运作...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=328' target='_blank' >Facebook三年内流失80%用户?...</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=327' target='_blank' >可穿戴还远未达智能医疗本质</a><br /> <span class="sign overflow_hidden display_inline_block"></span> <a href='MessageDetails.aspx?id=326' target='_blank' >阿里进手游 双马竞争胜负未知</a><br /></td>
                    </tr>
                </table>
                <div class="space_10"></div><div class="space_05"></div>
            </div>
            <div class="bottombg2"></div>
        </div>
    </div>
    <div class="clear"></div><div class="space_30"></div>

    <div id="foot">
        <div class="">
            <!------------footer----------->
            <div class="ly_box footer">
                <div class="space_20"></div>
                <div class="fl code padding_20t padding_30l">
                    <img src="/ifwimages/code.gif" /></div>
                <div class="list fl">
                    <ul>
                        <li class="bold f14 padding_10b">关于爱服务</li>
                        <li class="line_height_22"><a href="/AboutFooter/AboutIfw.aspx?type=1&index=0" target="_blank">关于我们</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AboutIfw.aspx?type=2&index=1" target="_blank">联系我们</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AboutIfw.aspx?type=3&index=2" target="_blank">诚聘英才</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AboutIfw.aspx?type=4&index=3" target="_blank">法律声明</a></li>
                    </ul>
                </div>
                <div class="list fl">
                    <ul>
                        <li class="bold f14 padding_10b">新手上路</li>
                        <li class="line_height_22"><a href="/AboutFooter/AfterServer.aspx?type=5&index=0" target="_blank">如何注册</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AfterServer.aspx?type=6&index=1" target="_blank">如何交易</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AfterServer.aspx?type=7&index=2" target="_blank">安全保障</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AfterServer.aspx?type=8&index=3" target="_blank">常见问题</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/AfterServer.aspx?type=9&index=4" target="_blank">服务收费</a></li>
                    </ul>
                </div>
                <div class="list fl">
                    <ul>
                        <li class="bold f14 padding_10b">招商加盟</li>
                        <li class="line_height_22"><a href="/AboutFooter/PayType.aspx?type=10&index=0" target="_blank">加盟介绍</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/PayType.aspx?type=11&index=1" target="_blank">加盟条件</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/PayType.aspx?type=12&index=2" target="_blank">加盟方案</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/PayType.aspx?type=13&index=3" target="_blank">服务支持</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/PayType.aspx?type=14&index=4" target="_blank">招商问答</a></li>
                    </ul>
                </div>
                <div class="list fl">
                    <ul>
                        <li class="bold f14 padding_10b">服务商服务</li>
                        <li class="line_height_22"><a href="/AboutFooter/FeatureServer.aspx?type=15&index=0" target="_blank">服务商入住</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/FeatureServer.aspx?type=16&index=1" target="_blank">微信入口</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/FeatureServer.aspx?type=17&index=2" target="_blank">资料下载</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/FeatureServer.aspx?type=18&index=3" target="_blank">收费参考</a></li>

                    </ul>
                </div>
                <div class="list fl">
                    <ul>
                        <li class="bold f14 padding_10b">商城服务</li>
                        <li class="line_height_22"><a href="/AboutFooter/PostType.aspx?type=19&index=0" target="_blank">三包政策</a></li>
                        <li class="line_height_22"><a href="/AboutFooter/PostType.aspx?type=20&index=1" target="_blank">支付方式</a></li>
                    </ul>
                </div>
                <div class="inf fl line_height_22">
                    www.51ifw.com<br />
                    coryright@2013-2016<br />
                    客户服务热线：400-085-8889<br />
                    佛山市顺德区安然威客网络科技有限公司<br />
                    <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备130080877号-1</a>
                </div>
                <div class="clear"></div>
                <div class="space_30"></div>
            </div>
            <!------------footer----end------->
        </div>
    </div>
    <script type="text/javascript">
        $(".allsort").hoverForIE6({ current: "allsorthover", delay: 200 });
        $(".allsort .item").hoverForIE6({ delay: 150 });
    </script>

    <script type='text/javascript'>
        $(function () {
            var url = window.location.href;

            if ($(".title_nav li span").length == 9) {
                if (url.indexOf("Service_Order") > 0) {
                    $(".title_nav li span").eq(1).addClass('on');
                    return;
                }
                if (url.indexOf("Purchase") > 0) {
                    $(".title_nav li span").eq(6).addClass('on');
                    return;
                }
                if (url.indexOf("Service_bs") > 0 || url.indexOf("seller_explicit") > 0) {
                    $(".title_nav li span").eq(2).addClass('on');
                    return;
                }
                if (url.indexOf("WtBrand") > 0) {
                    $(".title_nav li span").eq(4).addClass('on');
                    return;
                }
                if (url.indexOf("mall") > 0 || url.indexOf("Mall") > 0) {
                    $(".title_nav li span").eq(5).addClass('on');
                    return;
                }
                if (url.indexOf("ServiceSite") > 0 || url.indexOf("SearchServiceSite") > 0) {
                    $(".title_nav li span").eq(3).addClass('on');
                    return;
                }

                if (url.indexOf("Message") > 0) {
                    $(".title_nav li span").eq(7).addClass('on');
                    return;
                }
            } else {
                if (url.indexOf("Service_bs") > 0 || url.indexOf("seller_explicit") > 0) {
                    $(".title_nav li span").eq(1).addClass('on');
                    return;
                }
                if (url.indexOf("WtBrand") > 0) {
                    $(".title_nav li span").eq(2).addClass('on');
                    return;
                }
                if (url.indexOf("mall") > 0 || url.indexOf("Mall") > 0) {
                    $(".title_nav li span").eq(3).addClass('on');
                    return;
                }
                if (url.indexOf("ServiceSite") > 0 || url.indexOf("SearchServiceSite") > 0) {
                    $(".title_nav li span").eq(4).addClass('on');
                    return;
                }
                if (url.indexOf("Newbie") > 0) {
                    $(".title_nav li span").eq(5).addClass('on');
                    return;
                }
                if (url.indexOf("Message") > 0) {
                    $(".title_nav li span").eq(6).addClass('on');
                    return;
                }

            }
            $(".title_nav li span").eq(0).addClass('on');
        });
    </script>
</div>
</body>
</html>
