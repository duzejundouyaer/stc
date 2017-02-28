@extends('_layouts.master')

@section('title', '售后平台首页')

@section('content')
    <style>
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体"; }
        .main{width:1000px;height:333px;margin:0 auto;overflow:hidden;}
        .holder{overflow:hidden;width:320px;height:333px;float:left;position:relative;background-color:#000;margin-right:1px;}
        .holder .image{position:absolute;left:-100px;}
        .holder span{font-size:27px;color:#dedede;font-weight:700;padding:4px;position:absolute;top:120px;left:4px;}
        .holder .text{padding:20px;display:none;line-height:26px;position:absolute;top:180px;font-size:16px;color:#fff;width:340px;}
    </style>

	<div class="main-gradient"></div>
		<div class="wf-wrap">
			<div class="wf-container-main">
				<div id="content" class="content" role="main">
					<div class="main-outer-wrapper ">
						<div class="bit_row">
							<div class="twelve columns no-sidebar-content ">
								<div class="bit_row">
									<div class="content-wrapper twelve columns ">
										<section data-fixheight="" class="qfy-row-1-58a2eba74f515822491 section     no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_npyzy" style="margin-bottom:0px;border-radius:0px;color:#666666;">
											<div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>
											<div class="container">
												<div class="row wpb_row">
													<div class="qfy-column-1-58a2eba74f86c638840 qfy-column-inner  vc_span12  text-default small-screen-default fullrow" data-dw="1/1" data-fixheight="">
														<div style=";position:relative;;" class="column_inner ">
															<div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>
															<div class="column_containter" style="z-index:3;position:relative;">
																<div id="" data-loading="" data-loading-w="" data-open="1" data-post="post" data-cate=" " m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_posts_grid_i4et3" class="qfy-element  UUID-POSTS-58a2eba755965829386 wpb_teaser_grid wpb_content_element  wpb_grid columns_count_1 columns_count_1 wpb_teaser_grid_post " style="">
																	<style>@media only screen and (max-width: 760px) {.UUID-POSTS-58a2eba755965829386 .post_blog .blog-media{width:100%!important;}}</style>
																	<div class="wpb_wrapper">
																		<div class="teaser_grid_container " style=";clear:both;" data-type="post" data-cate=" " data-pcate="">
																			<ul style="min-height:60px;" class="wpb_thumbnails wpb_thumbnails-fluid vc_clearfix post_blog" data-layout-mode="fitRows">
																				@foreach($man_info as $val)

																						<div style="">
																							

                                                                                            <div class="holder notactive" style="margin-bottom: 30px;margin-left: 10px;">
                                                                                                <a href="details?id={{$val->man_id}}" class="bitImageAhover   link_image" title="{{$val->man_name}}"><img class="image" src="{{$val->man_img}}" width="500px"  height="348px"/></a>
                                                                                                <div class="text">网点名称：<?php if(strlen($val->man_name) > 9){ 
$str = mb_substr($val->man_name,0,9);
$br_str = mb_substr($val->man_name,9);
echo $str. "</br>". $br_str;
}else{ echo $val->man_name;} ?>网点位置：<?php if(strlen($val->man_address) > 9){ 
$str = mb_substr($val->man_address,0,9);
$br_str = mb_substr($val->man_address,9);
echo $str;
echo "</br>";
echo $br_str;
}else{ echo $val->man_address;} ?><br/>发布日期：{{date('Y-m-d',$val->man_addtime)}}</div>
                                                                                            </div>
																						</div>
                                                                                @endforeach

																			</ul>
																		</div>
																	</div>
																	<div class="clear"></div>
																	<div class="list_hidden_btn" style="display:none;" data-slider="0" data-params="">
																		<div class="list_hiddencontent"></div>
																		<div class="backbtn" style="margin-top:0px;margin-bottom:40px;">
																			<div class="vc_btn3-container vc_btn3-center">
																				<button onclick="backlistbtn(this)" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-black">返回列表</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<style>.qfy-column-1-58a2eba74f86c638840>.column_inner:hover{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-media{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-1-58a2eba74f86c638840>.column_inner{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840{};}@media only screen and (max-width: 768px){.qfy-column-1-58a2eba74f86c638840 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840 {};}</style>
												</div>
											</div>
											<style>
												@media only screen and (min-width: 768px){
													section.section.qfy-row-1-58a2eba74f515822491{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:42px;margin-top:39px;}section.section.qfy-row-1-58a2eba74f515822491 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
													.bit-html section.section.qfy-row-1-58a2eba74f515822491{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:42px;margin-top:22px;}}
											</style>
										</section>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<!-- END .page-wrapper -->
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<!-- .wf-container -->
		</div>
		<!-- .wf-wrap -->
    <script>
        $(document).ready(function(){
            $('.holder').hover(function(){
                $(this).removeClass('.notactive');
                $('.notactive').stop().animate({'width':'290px'},400);
                $(this).find('img').stop().animate({'top':'-165px'},400);
                $(this).stop().animate({'width':'380px'},400);
//                $(this).find('span').css({'background-color':'#000'});
                $(this).find('.text').fadeIn(300);
            },function(){
                $('.notactive').stop().animate({'width':'320px'},400);
                $(this).addClass('.notactive');
                $(this).find('.text').hide();
                $(this).find('img').stop().animate({'top':'0px'},500);
                $(this).stop().animate({'width':'320px'},400);
                $(this).find('span').css({'background-color':'#333', 'color':'#dedede'});
            });
        });
    </script>
@endsection
