

<?php $__env->startSection('title', '详情页'); ?>

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
    <?php foreach($details_info as $val): ?>
<div style="text-align: center;"><span style="font-size:22px;"><span style="font-family: 微軟正黑體;"><span style="color: rgb(0, 0, 0);"><?php echo e($val->man_name); ?></span></span></span></div>
</div>
</div>
            <style>@media  only screen and (max-width: 768px) {.single_image_text-58a2ef79bec90660 .head{font-size:16px!important;}.single_image_text-58a2ef79bec90660 .content{font-size:16px!important;}}</style>

<div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;background-repeat: no-repeat;" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0" m-padding="0px 0px 0px 0px" p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element bitImageControlDiv"><a class="bitImageAhover  ">

<div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_left">
<div class="wpb_wrapper"><span></span><img width="620" height="413" src="<?php echo e($val->man_img); ?>" class="front_image  attachment-full" alt="7279-1-620x-u" title="" description="" data-title="7279-1-620x-u" src-img="" style=''/></div>
</div>

            </a>
<div m-padding="8px 0px 9px 0px" p-padding="8px 0px 9px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-56777 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:8px;padding-bottom:9px;">
<div class="wpb_wrapper">
    <div m-padding="8px 0px 9px 0px" p-padding="8px 0px 9px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-56777 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:8px;padding-bottom:9px;">
        <div class="wpb_wrapper">

            <div class="entry-content post_excerpt	" style="color:#494e56;font-size:12px;">
                <p><?php echo e($val->man_desc); ?></p>
                <br />
            </div>

        </div>
    </div>
    <style>@media  only screen and (max-width: 768px) {.single_image_text-58a2ef79bf6e0692 .head{font-size:16px!important;}.single_image_text-58a2ef79bf6e0692 .content{font-size:16px!important;}}</style>

    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
        <span> <span class="post_date">联系方式：<span data-date="<?php echo e($val->man_phone); ?>" class="post_date_text"><?php echo e($val->man_phone); ?></span></span> </span>
    </div>
    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
        <br>
        <span> <span class="post_date">发布时间：<span data-date="<?php echo e($val->man_addtime); ?>" class="post_date_text"><?php echo e(date("Y-m-d",$val->man_addtime)); ?></span></span> </span>
    </div>

    <div class="post-comment" style="color:#686868;font-size:12px;line-height:12px;">
        <br>
        <span> <span class="post_date">网点位置：<span data-date="<?php echo e($val->man_address); ?>" class="post_date_text"><?php echo e($val->man_address); ?></span></span> </span>
    </div>

</div>
</div>
             </div></div></div>
    <?php endforeach; ?>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>