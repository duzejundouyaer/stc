

<?php $__env->startSection('title', '咨询详情页'); ?>

<?php $__env->startSection('content'); ?>

	<div id="main" class="bit_main_content">
		<div class="main-gradient"></div>
		<div class="wf-wrap">
			<div class="wf-container-main">
				<div id="content" class="content" role="main">
					<div class="main-outer-wrapper ">
					<?php foreach($details_info as $val): ?>
						<div class="bit_row ">
							<div class=" twelve columns  bitMainTopSider-wrapper ">
								<div class="bit_row">
									<div class="twelve columns ">
										<div class="bitMainTopSider wpb_row bitSider " bitdataaction="site_widget_container" bitdatamarker="bitMainTopSider" style="">
											<div class="bitMainTopSider_media" style="left: 0;position: absolute;top: 0;width: 100%;height:100%;z-index:1;"></div>
											<div class="bitMainTopSider_color" style="left: 0;position: absolute;top: 0;width: 100%;height:100%;z-index:2;"></div>
											<div class="bitMainTopSider_warp" style="position:relative;z-index:3;">
												<div style="">
													<div id="bit_breadcrumbs-2" style="margin-top:20px;margin-bottom:20px;;" class="bitMainTopSiderWidget widget_text site_tooler">
														<div class="breadcrumb" style="font-size:14px;">
															<a href="http://575e5b35c4ee7.t73.qifeiye.com/?page_id=5369&amp;categories=2" style="" class="breadcrumb-a">News</a>
															<span class="breadcrumb-separator" style="font-size:14px;"> / </span>
															<span class="breadcrumb-text" style="font-size:14px;"><?php echo e($val->man_name); ?></span>
														</div>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
								<div class="bit_row">
									<div class="content-wrapper twelve columns">
										<section data-fixheight="" class="qfy-row-1-58a3bfe7a7959953372 section     no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_fnxi4" style="margin-bottom:0px;border-radius:0px;color:#666666;">
											<div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>
											<div class="container">
												<div class="row wpb_row">
													<div class="qfy-column-1-58a3bfe7a7cca70120 qfy-column-inner  vc_span12  text-Default small-screen-Default fullrow" data-dw="1/1" data-fixheight="">
														<div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;;position:relative;;" class="column_inner ">
															<div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div>
															<div class="column_containter" style="z-index:3;position:relative;">
																<style>@media  only screen and (max-width: 760px) {#vc_header_58a3bfe7a849a843 .header_title{font-size:22px!important;}}</style>
																<div id="vc_header_58a3bfe7a849a843" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_header_yws7w" class="qfy-element minheigh1px wpb_text_column wpb_content_element " style="position: relative;;;background-repeat: no-repeat;;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;">
																	<div class="wpb_wrapper">
																		<h1 class="qfy_title center mobilecenter">
																			<div class="qfy_title_inner" style="display:inline-block;position:relative;max-width:100%;">
																				<div class="header_title" style="font-family:华文细黑;font-size:26px;font-weight:normal;font-style:normal;color:#000;">
																					<?php echo e($val->man_name); ?>

																				</div>
																				<br>
																				<div class="post-comment" style="color:#686868;font-size:14px;line-height:12px;">
																					<span> <span class="post_date">发布日期：<span data-date="<?php echo e(date('Y-m-d H:i:s',$val->man_addtime)); ?>" class="post_date_text"><?php echo e(date('Y-m-d',$val->man_addtime)); ?></span></span> </span>
																				</div>
																			</div><span style="clear:both;"></span></h1>
																	</div>
																</div>
																<div m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_column_text_t7twl" class="qfy-element qfy-text qfy-text-18784 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;margin-top:10px;margin-bottom:40px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;border-radius:0px;">
																	<div class="wpb_wrapper">
																		<div style="text-align: center;">
																			<span style="font-size:14px;"><span style="" class="qfy_no_editor pdate"></span></span>
																		</div>
																	</div>
																</div>
																<style>@media  only screen and (max-width: 768px) {.single_image_text-58a3bfe7a9644813 .head{font-size:16px!important;}.single_image_text-58a3bfe7a9644813 .content{font-size:16px!important;}}</style>
																<div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;background-repeat: no-repeat;" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_single_image_mgemc" class="qfy-element bitImageControlDiv">
																	<a class="bitImageAhover  ">
																		<div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
																			<div class="wpb_wrapper">
																				<span></span>
																				<img style="" src="uploads/<?php echo e($val->man_img); ?>" class="front_image  attachment-large" alt="<?php echo e($val->man_name); ?>" title="" description="" data-title="" src-img="" />
																			</div>
																		</div> </a>
																</div>
																<a class="bitImageAhover  "> </a>
																<div m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_column_text_oxibr" class="qfy-element qfy-text qfy-text-86105 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;margin-top:10px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;border-radius:0px;">
																	<div class="wpb_wrapper">
																		<div>
																			<span><span style="font-family: 宋体;"><span style="letter-spacing: 1px;"><span style="font-size: 15px;"><?php echo e($val->man_desc); ?> </span></span></span></span>
																		</div>
																	</div>
																</div>
																<br>
																<div class="post-comment" style="color:#686868;font-size:14px;line-height:12px;">
																	<br>
																	<span> <span class="post_date">服务性质：<span data-date="" class="post_date_text"><?php if($val->is_all){echo "全部";}else{echo $val->user_nature;}?></span></span> </span>

																	<br></div>
																<div class="post-comment" style="color:#686868;font-size:14px;line-height:12px;">
																	<br>
																	<span> <span class="post_date">成交笔数：<span data-date="" class="post_date_text"><?php echo e($val->order_num); ?></span></span> </span>
																	<br>
																</div>
																<div class="post-comment" style="color:#686868;font-size:14px;line-height:12px;">
																	<br>
																	<span> <span class="post_date">联系方式：<span data-date="" class="post_date_text"><?php echo e($val->man_phone); ?></span></span> </span>
																	<br>
																</div>
																<div class="post-comment" style="color:#686868;font-size:14px;line-height:12px;">
																	<br>
																	<span> <span class="post_date">位置：<span data-date="" class="post_date_text"><?php echo e($val->man_address); ?></span></span> </span>
																</div>
															</div>
														</div>
													</div>
													<style>.qfy-column-1-58a3bfe7a7cca70120>.column_inner:hover{}.qfy-column-1-58a3bfe7a7cca70120>.column_inner:hover>.background-media{}.qfy-column-1-58a3bfe7a7cca70120>.column_inner:hover>.background-overlay{}@media  only screen and (min-width: 768px){.qfy-column-1-58a3bfe7a7cca70120>.column_inner{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-1-58a3bfe7a7cca70120{};}@media  only screen and (max-width: 768px){.qfy-column-1-58a3bfe7a7cca70120 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a3bfe7a7cca70120 {};}</style>
												</div>
											</div>
											<style>
												@media  only screen and (min-width: 768px){
													section.section.qfy-row-1-58a3bfe7a7959953372{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:76px;margin-top:20px;}section.section.qfy-row-1-58a3bfe7a7959953372 > .container{max-width:1024px;margin:0 auto;}}@media  only screen and (max-width: 768px){
													.bit-html section.section.qfy-row-1-58a3bfe7a7959953372{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:40px;margin-top:0px;}}
											</style>
										</section>
									</div>
									<div class="clear"></div>
								</div>
								<div class="bit_row">
									<div class="twelve columns">
										<div class="bitMainBottomSider wpb_row bitSider " bitdataaction="site_widget_container" bitdatamarker="bitMainBottomSider" style="">
											<div class="bitMainBottomSider_media" style="left: 0;position: absolute;top: 0;width: 100%;height:100%;z-index:1;"></div>
											<div class="bitMainBottomSider_color" style="left: 0;position: absolute;top: 0;width: 100%;height:100%;z-index:2;"></div>
											<div class="bitMainBottomSider_warp" style="position:relative;z-index:3;">
												<div style="">
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<!-- END .page-wrapper -->
							<div class="clear"></div>
						</div>
						<!-- END .row-wrapper -->
						<?php endforeach; ?>
						<div class="clear"></div>
					</div>
					<!-- END .main-outer-wrapper  -->
				</div>
			</div>
			<!-- .wf-container -->
		</div>
		<!-- .wf-wrap -->
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>