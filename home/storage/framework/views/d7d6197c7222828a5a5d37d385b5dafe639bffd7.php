﻿

<?php $__env->startSection('title', '售后平台首页'); ?>

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
											<section data-fixheight="" class="qfy-row-1-58a2eba74f515822491 section     no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_npyzy" style="margin-bottom:0px;border-radius:0px;color:#666666;">
												<div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>
												<div class="container">
													<div class="row wpb_row">
														<div class="qfy-column-1-58a2eba74f86c638840 qfy-column-inner  vc_span12  text-default small-screen-default fullrow" data-dw="1/1" data-fixheight="">
															<div style=";position:relative;;" class="column_inner ">
																<div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>
																<div class="column_containter" style="z-index:3;position:relative;">
																	<div id="" data-loading="" data-loading-w="" data-open="1" data-post="post" data-cate=" " m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_posts_grid_i4et3" class="qfy-element  UUID-POSTS-58a2eba755965829386 wpb_teaser_grid wpb_content_element  wpb_grid columns_count_1 columns_count_1 wpb_teaser_grid_post " style="">
																		<style>@media  only screen and (max-width: 760px) {.UUID-POSTS-58a2eba755965829386 .post_blog .blog-media{width:100%!important;}}</style>
																		<div class="wpb_wrapper">
																			<div class="teaser_grid_container " style=";clear:both;" data-type="post" data-cate=" " data-pcate="">
																				<ul style="min-height:60px;" class="wpb_thumbnails wpb_thumbnails-fluid vc_clearfix post_blog" data-layout-mode="fitRows">
																					<?php foreach($man_info as $val): ?>
																						<li data-postid="6494" class="isotope-item vc_span12 grid-cat-2" style="max-width:99.8%;margin-bottom:10px;padding-bottom:10px;border-bottom:1px solid #e5e5e5;">
																							<div style="">
																								<div class="post-thumb blog-media wf-td" style="overflow:hidden;width:200px;padding-right:10px;vertical-align:top;">
																									<a href="" class="bitImageAhover   link_image" title="<?php echo e($val->man_name); ?>"><img data-t-id="8621" style="border:1px solid #cccccc;" class="vc_box_outline  ag_image" src="uploads/<?php echo e($val->man_img); ?>" width="220" height="140" alt="white-and-gray-apartment-L-i3hH96" description="" data-title="white-and-gray-apartment-L-i3hH96" title="" src-img="" /><i></i></a>
																								</div>
																								<div class="blog-content wf-td" style="word-break:break-all">
																									<div class="post-title" style="color:#373A41;line-height:16px; vertical-align: top; ">
																										<a data-title="true" style="color:#373A41;font-size:16px;line-height:16px" href="" class="bitImageAhover   link_title" title="<?php echo e($val->man_name); ?>"><?php echo e($val->man_name); ?></a>
																									</div>
																									<div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
																										<span> <span class="post_date">网点位置：<span data-date="<?php echo e($val->man_address); ?>" class="post_date_text"><?php echo e($val->man_address); ?></span></span> </span><br>
																									</div>
																									<div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
																										<span> <span class="post_date">服务性质：<span data-date="<?php if($val->is_all){echo "全部";}else{echo $val->user_nature;}?>" class="post_date_text"><?php if($val->is_all){echo "全部";}else{echo $val->user_nature;}?></span></span> </span>
																									</div>
																									<div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
																										<span><span class="post_date">发布日期：<span data-date="<?php echo e(date('Y-m-d H:i:s',$val->man_addtime)); ?>" class="post_date_text"><?php echo e(date('Y-m-d',$val->man_addtime)); ?></span></span> </span><br>
																									</div>
																									<div class="entry-content post_excerpt	" style="color:#494e56;font-size:12px;">
	<p><?php echo e($val->man_desc); ?></p>
	<br />
	</div>
	<span style="clear:both"></span>
	<input type="hidden" class="id" value="<?php echo e($val->man_id); ?>" />
	<a style="color:#1e73be;font-size:12px;font-family:;" href="details/<?php echo e($val->man_id); ?>" class="vc_read_more" title="<?php echo e($val->man_name); ?>">查看详情</a>
	</div>
	</div> </li> <?php endforeach; ?>
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
	<style>.qfy-column-1-58a2eba74f86c638840>.column_inner:hover{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-media{}.qfy-column-1-58a2eba74f86c638840>.column_inner:hover>.background-overlay{}@media  only screen and (min-width: 768px){.qfy-column-1-58a2eba74f86c638840>.column_inner{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840{};}@media  only screen and (max-width: 768px){.qfy-column-1-58a2eba74f86c638840 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a2eba74f86c638840 {};}</style>
	</div>
	</div>
	<style>
		@media  only screen and (min-width: 768px){
			section.section.qfy-row-1-58a2eba74f515822491{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:42px;margin-top:39px;}section.section.qfy-row-1-58a2eba74f515822491 > .container{max-width:1024px;margin:0 auto;}}@media  only screen and (max-width: 768px){
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
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>