

<?php $__env->startSection('title', '服务咨询详情页'); ?>

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
										<section data-fixheight="" class="qfy-row-1-58a2ef79bd84c237455 section     no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_quco8" style='margin-bottom:0px;border-radius:0px;color:#666666;'>
											<div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>
											<div class="container">
												<div class="row wpb_row">
													<div class="qfy-column-1-58a2ef79bdc14726868 qfy-column-inner  vc_span12  text-Default small-screen-Default fullrow" data-dw="1/1" data-fixheight=""><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner "><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;">
																<div m-padding="0px 0px 21px 0px" p-padding="0px 0px 21px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-67152 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;margin-top:10px;padding-bottom:21px;">

																	<div class="wpb_wrapper">
																		<?php foreach($data as $val): ?>
																			<div style="text-align: center;"><span style="font-size:22px;"><span style="font-family: 微軟正黑體;"><span style="color: rgb(0, 0, 0);"><?php echo e($val->advice_title); ?></span></span></span></div>
																	</div>
																</div>
																<style>@media  only screen and (max-width: 768px) {.single_image_text-58a2ef79bec90660 .head{font-size:16px!important;}.single_image_text-58a2ef79bec90660 .content{font-size:16px!important;}}</style>

																<div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;background-repeat: no-repeat;" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element bitImageControlDiv"><a class="bitImageAhover  ">

																		<div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_left">
																			<div class="wpb_wrapper"><span></span><img width="620" height="413" src="http://tcsadmin.完美世界.top/backend/web/<?php echo e($val->advice_img); ?>" class="front_image  attachment-full" alt="7279-1-620x-u" title="" description="" data-title="7279-1-620x-u" src-img="" style=''/></div>
																		</div>

																	</a>
																	<div m-padding="8px 0px 9px 0px" p-padding="8px 0px 9px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-56777 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:8px;padding-bottom:9px;">
																		<div class="wpb_wrapper">
																			<div m-padding="8px 0px 9px 0px" p-padding="8px 0px 9px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-56777 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:8px;padding-bottom:9px;">
																				<div class="wpb_wrapper">

																					<div class="entry-content post_excerpt	" style="color:#494e56;font-size:12px;">
																						<p><?php echo e($val->advice_con); ?></p>
																						<br />
																					</div>

																				</div>
																			</div>


																			<style>@media  only screen and (max-width: 768px) {.single_image_text-58a2ef79bf6e0692 .head{font-size:16px!important;}.single_image_text-58a2ef79bf6e0692 .content{font-size:16px!important;}}</style>

																		<?php /*这里写分享到*/ ?>
																		<?php /*这里写分享到*/ ?>
<!--PC和WAP自适应版-->
<div id="SOHUCS" sid="<?php echo e($val->advice_id); ?>" ></div> 
<script type="text/javascript"> 
(function(){ 
var appid = 'cysRTWVXJ'; 
var conf = 'a6b79b507268bb06e5bedbadd43b0baf'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
																		</div>
																	</div>
																</div></div></div>
														<?php endforeach; ?>
														<center><button class="btn vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-black">返回列表</button></center>
														<style>.qfy-column-1-58a2ef79bdc14726868>.column_inner:hover{}.qfy-column-1-58a2ef79bdc14726868>.column_inner:hover>.background-media{}.qfy-column-1-58a2ef79bdc14726868>.column_inner:hover>.background-overlay{}@media  only screen and (min-width: 768px){.qfy-column-1-58a2ef79bdc14726868>.column_inner{padding-left:40px;padding-right:40px;padding-top:40px;padding-bottom:40px;}.wpb_row .vc_span_class.qfy-column-1-58a2ef79bdc14726868{};}@media  only screen and (max-width: 768px){.qfy-column-1-58a2ef79bdc14726868 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a2ef79bdc14726868 {};}</style>        </div>
												</div>
												<style>
													@media  only screen and (min-width: 768px){
														section.section.qfy-row-1-58a2ef79bd84c237455{padding-left:0px;padding-right:0px;padding-top:20px;padding-bottom:0px;margin-top:17px;}section.section.qfy-row-1-58a2ef79bd84c237455 > .container{max-width:1024px;margin:0 auto;}}@media  only screen and (max-width: 768px){
														.bit-html section.section.qfy-row-1-58a2ef79bd84c237455{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:0px;margin-top:0px;}}
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
	</div><!-- #main -->

<script>
	$(".btn").click(function(){
		location.href = "list";
	})
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>