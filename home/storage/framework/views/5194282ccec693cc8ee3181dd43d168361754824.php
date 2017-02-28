

<?php $__env->startSection('title', '售后平台--订单'); ?>

<?php $__env->startSection('content'); ?>

    <div id="main" class="bit_main_content">
        <div class="main-gradient"></div>
        <div class="wf-wrap">
            <div class="wf-container-main">
                <div id="content" class="content" role="main">
                    <div class="main-outer-wrapper ">
                        <div class="bit_row">
                            <div class="twelve columns no-sidebar-content ">
                                <div class="bit_row">
                                    <div class="content-wrapper twelve columns ">
                                        <section data-fixheight="" class="qfy-row-1-58a2eba74f515822491 section     no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_npyzy" style='margin-bottom:0px;border-radius:0px;color:#666666;'>
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>
                                            <div class="container">
                                                <div class="row wpb_row">

                                                    <div class="qfy-column-1-58a2eba74f86c638840 qfy-column-inner  vc_span12  text-default small-screen-default fullrow" data-dw="1/1" data-fixheight="">
                                                        <div style=";position:relative;;" class="column_inner "><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;"><div id="" data-loading="" data-loading-w="" data-open="1" data-post="post" data-cate=" " m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_posts_grid_i4et3" class="qfy-element  UUID-POSTS-58a2eba755965829386 wpb_teaser_grid wpb_content_element  wpb_grid columns_count_1 columns_count_1 wpb_teaser_grid_post " style="">
                                                                    <style>@media  only screen and (max-width: 760px) {.UUID-POSTS-58a2eba755965829386 .post_blog .blog-media{width:100%!important;}}</style> <div class="wpb_wrapper">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="teaser_grid_container " style=";clear:both;" data-type="post" data-cate=" " data-pcate="">
                                                                                <input type="text" id="search" placeholder="用户名或手机号" style="margin-left: 10px;">
                                                                                <input type="button" id="button" class="login" value="搜索" style="cursor: pointer;background: #b2c2e0;color: #FFFFFF;margin-bottom: 9px;width: 60px; height: 40px;">
                                                                                <ul style="min-height:60px;" class="wpb_thumbnails wpb_thumbnails-fluid vc_clearfix post_blog" data-layout-mode="fitRows">
                                                                                    <?php foreach($order as $val): ?>
                                                                                        <li data-postid="6494" class="isotope-item vc_span12 grid-cat-2" style="max-width:99.8%;margin-bottom:10px;padding-bottom:10px;border-bottom:1px solid #e5e5e5;">
                                                                                            <div style="">
                                                                                                <div class="post-thumb blog-media wf-td" style="overflow:hidden;width:200px;padding-right:10px;vertical-align:top;">
                                                                                                    <a href="javascript:void (0)" class=""><img data-t-id="8621" style="border:1px solid #cccccc;" class="vc_box_outline  ag_image" src="Picture/ahr0cdovlzu3nwu1yjm1yzrlztcuddczlnfpzmvpewuuy29tl3fmes1jb250zw50l3vwbg9hzhmvmjaxni8wni8wmzy4mtq2mgm3ogi5zgmxngu5ngvimdzjnmqxztm5mi00mdb4mzawlmpwzw_p_p100_p_3d_p_p100_p_3d.jpg" width="200" height="110" alt="white-and-gray-apartment-L-i3hH96" description="" data-title="white-and-gray-apartment-L-i3hH96" title="" src-img="" /><i></i></a>
                                                                                                </div>
                                                                                                <div class="blog-content wf-td" style="word-break:break-all">

                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;margin-top: 5px;">
                                                                                                        <span> <span class="post_date">订单编号：<span data-date="<?php echo $val->order_number?>" class="post_date_text"><?php echo $val->order_number?></span></span> </span>
                                                                                                    </div>
                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
                                                                                                        <span> <span class="post_date">维修商品：<span data-date="<?php echo $val->type_name?>" class="post_date_text"><?php echo $val->type_name?></span></span> </span>
                                                                                                    </div>
                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
                                                                                                        <span> <span class="post_date">用户地址：<span data-date="<?php echo $val->user_address?>" class="post_date_text"><?php echo $val->user_address?></span></span> </span>
                                                                                                    </div>
                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
                                                                                                        <span> <span class="post_date">用户手机：<span data-date="<?php echo $val->user_phone?>" class="post_date_text"><?php echo $val->user_phone?></span></span> </span>
                                                                                                    </div>
                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
                                                                                                        <span> <span class="post_date">发布时间：<span data-date="<?php echo $val->order_time?>" class="post_date_text"><?php echo $val->order_time?></span></span> </span>
                                                                                                    </div>
                                                                                                    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
                                                                                                        <span> <span class="post_date">订单状态：
                                                                                                                <?php if($val->order_state==0){
                                                                                                                ?>
                                                                                                                <span data-date="<?php echo $val->order_id?>" ids="<?php echo $val->order_id?>" class="post_date_text"><a
                                                                                                                            href="javascript:void(0);" class="order" style="color:green;">待接单</a></span>
                                                                                                                <?php }else if($val->order_state==1){ ?>
                                                                                                                <span data-date="" class="post_date_text" style="color:red;">待完成</span>
                                                                                                                <?php }else{?>
                                                                                                                <span data-date="" class="post_date_text">已完成</span>
                                                                                                                <?php }?>
                                                                                                            </span> </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> </li> <?php endforeach; ?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .ul li{
                                                                                list-style: none;
                                                                                float: left;
                                                                                display: block;
                                                                                width: 20px;
                                                                                padding-left: 5px;
                                                                                text-align: center;
                                                                                cursor: pointer;
                                                                            }
                                                                            .ul li:hover{
                                                                                background: #b2c2e0;
                                                                            }
                                                                        </style>
                                                                        <div class="ul"><?php echo $order->links(); ?></div>
</div> <div class="clear"></div>
<div class="list_hidden_btn" style="display:none;" data-slider="0" data-params="W3ZjX2J0bl9lbGVtZW50IGRfdD0iMSIgbGlzdF9vcGVuPSIxIiB2Y2lkPSJVVUlELVBPU1RTLTU3YmU0ZmQxYzg2Njk3NDcyODMiIGJ0bl90aXRsZV9vcGVuPSIxIiBib3R0b21fYnRuX3RpdGxlX29wZW49IjAiIGxpc3Rfb3Blbl9zbGlkZXI9IjAiIHRvcGJ0bl90aXRsZT0iIiB0b3BidG5fdGl0bGVfbWFyZ2ludG9wPSIwIiB0b3BidG5fdGl0bGVfbWFyZ2lucmlnaHQ9IjAiIHRvcGJ0bl90aXRsZV9mYW1pbHk9IiIgdG9wYnRuX3N0eWxlPSJxZnktY3VzdG9tIiB0b3BidG5fY3VzdG9tX2JhY2tncm91bmQ9IiNmZmYiIHRvcGJ0bl9jdXN0b21fdGV4dD0iIzMzMyIgdG9wYnRuX2N1c3RvbV9ib3JkZXI9IiMzMzMiIHRvcGJ0bl9vdXRsaW5lX2N1c3RvbV9jb2xvcj0iIzY2NiIgdG9wYnRuX291dGxpbmVfY3VzdG9tX2hvdmVyX2JhY2tncm91bmQ9IiNmZmYiIHRvcGJ0bl9vdXRsaW5lX2N1c3RvbV9ob3Zlcl90ZXh0PSIjZGQzMzMzIiB0b3BidG5fY3VzdG9tX2hvdmVyX2JvcmRlcj0iI2RkMzMzMyIgdG9wYnRuX2N1c3RvbV9ib3JkZXJfc2l6ZT0iMiIgdG9wYnRuX3NoYXBlPSJzcXVhcmUiIHRvcGJ0bl9jb2xvcj0iZ3JleSIgdG9wYnRuX3NpemU9Inh4cyIgdG9wYnRuX2FkZF9pY29uPSJ0cnVlIiB0b3BidG5faV9hbGlnbj0ibGVmdCIgdG9wYnRuX2lfdHlwZT0iZm9udGF3ZXNvbWUiIHRvcGJ0bl9pX2ljb25fZm9udGF3ZXNvbWU9ImdseXBoaWNvbi1pY29uLXJlbW92ZSIgdG9wYnRuX2lfaWNvbl9waXhlbGljb25zPSJ2Y19waXhlbF9pY29uIHZjX3BpeGVsX2ljb24tYWxlcnQiIHRvcGJ0bl90aHVtYl9ub3RlXzE9IiIgdG9wYnRuX3RpdGxlX3NpemU9IjMwIiB0b3BidG5fdGl0bGVfZm9udHdlaWdodD0iIiB0b3BidG5fdGl0bGVfdG9wPSIyIiB0b3BidG5fdGl0bGVfbGVmdD0iMzAiIHRvcGJ0bl9pY29uX3NpemU9IjIyIiB0b3BidG5faWNvbl9sZWZ0PSIiIHRvcGJ0bl9pY29uX3RvcD0iLTciIGJvdHRvbWJ0bl90aXRsZT0i6L+U5Zue5YiX6KGoIiBib3R0b21idG5fdGl0bGVfbWFyZ2ludG9wPSIwIiBib3R0b21idG5fdGl0bGVfbWFyZ2luYm90dG9tPSI0MCIgYm90dG9tYnRuX3RpdGxlX2ZhbWlseT0iIiBib3R0b21idG5fc3R5bGU9Im91dGxpbmUiIGJvdHRvbWJ0bl9jdXN0b21fYmFja2dyb3VuZD0iIzU1NSIgYm90dG9tYnRuX2N1c3RvbV90ZXh0PSIjZmZmIiBib3R0b21idG5fY3VzdG9tX2JvcmRlcj0iIzU1NSIgYm90dG9tYnRuX291dGxpbmVfY3VzdG9tX2NvbG9yPSIjNjY2IiBib3R0b21idG5fb3V0bGluZV9jdXN0b21faG92ZXJfYmFja2dyb3VuZD0iIzQ2NDY0NiIgYm90dG9tYnRuX291dGxpbmVfY3VzdG9tX2hvdmVyX3RleHQ9IiNmZmYiIGJvdHRvbWJ0bl9jdXN0b21faG92ZXJfYm9yZGVyPSIjNDY0NjQ2IiBib3R0b21idG5fY3VzdG9tX2JvcmRlcl9zaXplPSIyIiBib3R0b21idG5fc2hhcGU9InNxdWFyZSIgYm90dG9tYnRuX2NvbG9yPSJibGFjayIgYm90dG9tYnRuX3NpemU9Im1kIiBib3R0b21idG5fYWxpZ249ImNlbnRlciIgYm90dG9tYnRuX21vYmlsZWFsaWduPSIiIGJvdHRvbWJ0bl9idXR0b25fYmxvY2s9ImZhbHNlIiBib3R0b21idG5fYWRkX2ljb249ImZhbHNlIiBib3R0b21idG5faV9hbGlnbj0ibGVmdCIgYm90dG9tYnRuX2lfdHlwZT0iZm9udGF3ZXNvbWUiIGJvdHRvbWJ0bl9pX2ljb25fZm9udGF3ZXNvbWU9ImZhIGZhLWFkanVzdCIgYm90dG9tYnRuX2lfaWNvbl9waXhlbGljb25zPSJ2Y19waXhlbF9pY29uIHZjX3BpeGVsX2ljb24tYWxlcnQiIGJvdHRvbWJ0bl90aHVtYl9ub3RlXzE9IiIgYm90dG9tYnRuX3RpdGxlX3NpemU9IiIgYm90dG9tYnRuX3RpdGxlX2ZvbnR3ZWlnaHQ9IiIgYm90dG9tYnRuX3RpdGxlX3RvcD0iIiBib3R0b21idG5fdGl0bGVfbGVmdD0iIiBib3R0b21idG5faWNvbl9zaXplPSIiIGJvdHRvbWJ0bl9pY29uX2xlZnQ9IiIgYm90dG9tYnRuX2ljb25fdG9wPSIiIGVsX2ZpbGUxPSIiIGVsX2ZpbGU0PSIiIGVsX2ZpbGUyPSIiIGVsX2ZpbGUzPSIiIHZjaWQ9IlVVSUQtUE9TVFMtNThhMmViYTc1NTk2NTgyOTM4NiIgXQ=="><div class="list_hiddencontent"></div><div class='backbtn' style='margin-top:0px;margin-bottom:40px;'><div class="vc_btn3-container vc_btn3-center"><button onclick="backlistbtn(this)" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-black">返回列表</button></div>
                                                                        </div></div>
                                                                </div>
                                                            </div></div></div><style>.qfy-column-1-58a2eba74f86c638840>.column_inner:hover{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-media{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-overlay{}@media  only screen and (min-width: 768px){.qfy-column-1-58a2eba74f86c638840>.column_inner{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840{};}@media  only screen and (max-width: 768px){.qfy-column-1-58a2eba74f86c638840 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840 {};}</style>        </div>
                                            </div>
                                            <style>
                                                @media  only screen and (min-width: 768px){
                                                    section.section.qfy-row-1-58a2eba74f515822491{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:42px;margin-top:39px;}section.section.qfy-row-1-58a2eba74f515822491 > .container{max-width:1024px;margin:0 auto;}}@media  only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-1-58a2eba74f515822491{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:42px;margin-top:22px;}}
                                            </style>
                                        </section>                             </div>


                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div><!-- END .page-wrapper -->
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>


                </div>

            </div><!-- .wf-container -->
        </div><!-- .wf-wrap -->
    </div>

    <script>
        $("#button").click(function () {
            var search=$("#search").val();
            if(search!=''){
                window.location.href='ordersearch?search='+search
            }
        });
        $(".order").click(function () {
            var _this=$(this);
            var id=_this.parent('span').attr('ids');
            if(id!=''){
                $.ajax({
                    type: "get",
                    url: "jieorder",
                    data: {order_id:id},
                    success: function(msg){
//                        alert(msg);
                        if(msg==0){
                            location.href='getorder'
                        }else{
                            location.href='re_login'
                        }
                    }
                });
//                window.location.href='jieorder?orderid='+id
            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>