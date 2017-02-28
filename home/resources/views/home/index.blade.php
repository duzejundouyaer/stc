@extends('_layouts.master')

@section('title', '售后平台首页')

@section('content')

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
                                        <section data-fixheight="" class="qfy-row-1-58a2eb943ce6b329146 section   contentsPadding0  no  section-text-no-shadow section-inner-no-shadow section-normal" id="bit_1dcoa" style='margin-bottom:0px;border-radius:0px;color:#000000;'>
                                            <div data-time="" data-imagebgs="" class="background-media  " backgroundSize='true' style="background-image: url('Images/ahr0cdovlzu3nwu1yjm1yzrlztcuddczlnfpzmvpewuuy29tl3fmes1jb250zw50l3vwbg9hzhmvmjaxni8wni8wzwfjmwmzzmuynmmymty5nzzkntexmdexmmy5mje5zc5qcgc_p_p100_p_3d.jpg'); background-repeat:no-repeat; background-size:cover; background-attachment:scroll; background-position:0 0%;">
                                            </div>
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>
                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div class="qfy-column-1-58a2eb943d6fc940928 qfy-column-inner vc_span_class vc_span3  text-Default small-screen-undefined" data-dw="1/4" data-fixheight=""><div style="min-height:370px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;;position:relative;;" class="column_inner "><div class=" background-overlay grid-overlay-0" style="background-color:rgba(0,0,0,0.3);"></div>
                                                            <div class="column_containter" style="z-index:3;position:relative;">
                                                                <div m-padding="15px 0px 10px 0px" p-padding="15px 0px 10px 0px" css_animation_delay="0" qfyuuid="0" class="qfy-element qfy-text qfy-text-11584 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: #3ec9ad;background-repeat: no-repeat;;padding-top:15px;padding-bottom:10px;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <?php
                                                                            use Illuminate\Support\Facades\Session;
                                                                            $man_id=Session::get('man_id');
                                                                            ?>
                                                                            @if(empty($man_id))
                                                                            <div>
                                                                                <div style="text-align: center;"><span style="font-size:18px;"><span style="color: rgb(255, 255, 255);"><span style="font-family: 微软雅黑;">登录</span><span style="letter-spacing: 1px;"><span style="font-family: times new roman;"></span></span></span></span><span style="font-size:16px;"><strong><span style="font-family: 宋体;"></span></strong></span></div>
                                                                            </div>
                                                                            @else
                                                                                <div>
                                                                                    <div style="text-align: center;"><span style="font-size:18px;"><span style="color: rgb(255, 255, 255);"><span style="font-family: 微软雅黑;">当前账号</span><span style="letter-spacing: 1px;"><span style="font-family: times new roman;"></span></span></span></span><span style="font-size:16px;"><strong><span style="font-family: 宋体;"></span></strong></span></div>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div> <div data-tag="iphorm_vc" data-id="65" m-padding="25px 18px 0px 16px" p-padding="25px 15px 0px 15px" css_animation_delay="0" qfyuuid="0" class="qfy-element wpb_layerslider_element wpb_content_element" style="padding-top:25px;padding-right:15px;padding-left:15px;"><div id="iphorm-outer-58a2eb943e01c" class="bitWidgetFrame iphorm-outer iphorm-outer-65 iphorm-uniform-theme-default">
                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function($) {
                                                                                $('#iphorm-58a2eb943e01c').iPhorm({"id":65,"uniqueId":"58a2eb943e01c","PHPSESSID":"m1chos220ki1u6c3703sprcpb1","useAjax":true,"successMessageTimeout":10,"clElementIds":[],"clDependentElementIds":[],"centerFancybox":true,"centerFancyboxSpeed":true});
                                                                                if ($.isFunction($.fn.qtip)) {
                                                                                    $('.iphorm-tooltip-hover', iPhorm.instance.$form).qtip({
                                                                                        style: {
                                                                                            classes: 'qtip-plain qtip-shadow'
                                                                                        },
                                                                                        position: {
                                                                                            my: 'left center',
                                                                                            at: 'right center'
                                                                                        }
                                                                                    });
                                                                                    $('.iphorm-tooltip-click', iPhorm.instance.$form).qtip({
                                                                                        style: {
                                                                                            classes: 'qtip-plain qtip-shadow'
                                                                                        },
                                                                                        position: {
                                                                                            my: 'left center',
                                                                                            at: 'right center'
                                                                                        },
                                                                                        show: {
                                                                                            event: 'focus'
                                                                                        },
                                                                                        hide: {
                                                                                            event: 'unfocus'
                                                                                        }
                                                                                    });
                                                                                    $('.iphorm-tooltip-icon-hover', iPhorm.instance.$form).qtip({
                                                                                        style: {
                                                                                            classes: 'qtip-plain qtip-shadow'
                                                                                        },
                                                                                        position: {
                                                                                            my: 'left center',
                                                                                            at: 'right center'
                                                                                        },
                                                                                        content: {
                                                                                            text: function (api) {
                                                                                                return $(this).find('.iphorm-tooltip-icon-content').html();
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                    $('.iphorm-tooltip-icon-click', iPhorm.instance.$form).qtip({
                                                                                        style: {
                                                                                            classes: 'qtip-plain qtip-shadow'
                                                                                        },
                                                                                        position: {
                                                                                            my: 'left center',
                                                                                            at: 'right center'
                                                                                        },
                                                                                        show: {
                                                                                            event: 'click'
                                                                                        },
                                                                                        hide: {
                                                                                            event: 'unfocus'
                                                                                        },
                                                                                        content: {
                                                                                            text: function (api) {
                                                                                                return $(this).find('.iphorm-tooltip-icon-content').html();
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                    $('.iphorm-labels-inside > .iphorm-element-spacer > label').hover(function () {
                                                                                        $(this).siblings('.iphorm-input-wrap').find('.iphorm-tooltip-hover').qtip('show');
                                                                                    }, function () {
                                                                                        $(this).siblings('.iphorm-input-wrap').find('.iphorm-tooltip-hover').qtip('hide');
                                                                                    });
                                                                                }
                                                                                if ($.isFunction($.fn.uniform)) {
                                                                                    $('input:checkbox, input:radio', iPhorm.instance.$form).uniform({context: iPhorm.instance.$form, selectAutoWidth: false});
                                                                                }
                                                                                if ($.isFunction($.fn.inFieldLabels)) {
                                                                                    $('.iphorm-labels-inside:not(.iphorm-element-wrap-recaptcha) > .iphorm-element-spacer > label', iPhorm.instance.$form).inFieldLabels();
                                                                                }
                                                                                $('.iphorm-group-row > div:last-child:not(:first-child)', iPhorm.instance.$form).add('.iphorm-group-row:last-child', iPhorm.instance.$form).addClass('last-child');
                                                                            });
                                                                        </script>
                                                                        <form id="iphorm-58a2eb943e01c" class="iphorm iphorm-form-65"  method="post" enctype="multipart/form-data">
                                                                            <div class="iphorm-inner iphorm-inner-65">
                                                                                <input type="hidden" name="iphorm_id" value="65"/>
                                                                                <input type="hidden" name="iphorm_uid" value="58a2eb943e01c"/>
                                                                                <input type="hidden" name="form_url" value="http://575e5b35c4ee7.t73.qifeiye.com/"/>
                                                                                <input type="hidden" name="referring_url" value="http://www.qifeiye.com/%e7%bd%91%e7%ab%99%e6%a8%a1%e6%9d%bf/"/>
                                                                                <input type="hidden" name="post_id" value="2160"/>
                                                                                <input type="hidden" name="post_title" value="首页"/>
                                                                                <div class="iphorm-success-message iphorm-hidden"></div>
                                                                                <div class="iphorm-error-message iphorm-hidden"></div>
                                                                                <input type="hidden" class="popaction" value=""/>
                                                                                <div class="iphorm-elements iphorm-elements-65 iphorm-clearfix">
                                                                                    <div class="iphorm-element-wrap iphorm-element-wrap-text iphorm_65_1-element-wrap iphorm-clearfix iphorm-labels-above iphorm-element-optional">

                                                                                        @if(empty($man_id))

                                                                                                <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_1-element-spacer">
                                                                                                    <label for="iphorm_65_1_58a2eb943e01c" style='color: rgb(234, 234, 234);font-size: 14px;line-height:14px;'>
                                                                                                        服务商手机号</label>
                                                                                                    <div class="iphorm-input-wrap iphorm-input-wrap-text iphorm_65_1-input-wrap">
                                                                                                        <input class="iphorm-element-text  iphorm_65_1" id="iphorm_65_1_58a2eb943e01c" type="text" name="iphorm_65_1" value="" style='background-color: rgb(255, 255, 255);border: 1px solid rgb(194, 194, 194);height: 30px;font-size: 14px;'/>
                                                                                                    </div>
                                                                                                    <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                                    </div> </div>
                                                                                            </div><div class="iphorm-element-wrap iphorm-element-wrap-text iphorm_65_2-element-wrap iphorm-clearfix iphorm-labels-above iphorm-element-optional">
                                                                                                <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_2-element-spacer">
                                                                                                    <label for="iphorm_65_2_58a2eb943e01c" style='color: rgb(234, 234, 234);font-size: 14px;line-height:14px;'>
                                                                                                        服务商密码</label>
                                                                                                    <div class="iphorm-input-wrap iphorm-input-wrap-text iphorm_65_2-input-wrap">
                                                                                                        <input class="iphorm-element-text  iphorm_65_2" id="iphorm_65_2_58a2eb943e01c" type="password" name="iphorm_65_2" value="" style='background-color: rgb(255, 255, 255);border: 1px solid rgb(194, 194, 194);height: 30px;font-size: 14px;'/>
                                                                                                    </div>
                                                                                                    <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                                    </div> </div>
                                                                                            </div><div class="iphorm-element-wrap iphorm-element-wrap-text iphorm_65_3-element-wrap iphorm-clearfix iphorm-labels-above iphorm-element-optional">
                                                                                                <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_3-element-spacer">

                                                                                                    <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                                    </div> </div>
                                                                                            </div><div class="iphorm-hidden">
                                                                                                <label>这个输入框应该是留空的<input type="text" name="iphorm_65_0"/></label>
                                                                                            </div> <div class="iphorm-submit-wrap iphorm-submit-wrap-65 iphorm-clearfix">


                                                                                                <div class="iphorm-submit-input-wrap iphorm-submit-input-wrap-65" style="display:block;">
                                                                                                    <button class="iphorm-submit-element" type="button" id="button" name="iphorm_submit" style='font-size: 16px;line-height:16px;;'><span style='font-size: 16px;line-height:16px;;padding-left: 20px !important;;background-color: #3ec9ad;border: 1px solid #3ec9ad;'><em style='color: #ffffff;font-size: 16px;line-height:16px;padding:10px 20px 10px 0;;font-weight: bold;background-color: #3ec9ad;'>服务商快速登录</em></span></button>
                                                                                                    <div style="display:inline-block;"><div class="iphorm-loading-wrap"><span class="iphorm-loading">请稍候</span></div></div>
                                                                                                </div>
                                                                                        @else
                                                                                            <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_1-element-spacer">
                                                                                                <label for="iphorm_65_1_58a2eb943e01c" style='color: rgb(234, 234, 234);font-size: 16px;line-height:14px;'>
                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您好!</label>
                                                                                                <div class="iphorm-input-wrap iphorm-input-wrap-text iphorm_65_1-input-wrap">
                                                                                                </div>
                                                                                                <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                                </div> </div>
                                                                                    </div><div class="iphorm-element-wrap iphorm-element-wrap-text iphorm_65_2-element-wrap iphorm-clearfix iphorm-labels-above iphorm-element-optional">
                                                                                        <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_2-element-spacer">
                                                                                            <label for="iphorm_65_2_58a2eb943e01c" style='color: rgb(234, 234, 234);font-size: 14px;line-height:14px;'>
                                                                                               </label>
                                                                                            <div class="iphorm-input-wrap iphorm-input-wrap-text iphorm_65_2-input-wrap">

                                                                                            </div>
                                                                                            <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                            </div> </div>
                                                                                    </div><div class="iphorm-element-wrap iphorm-element-wrap-text iphorm_65_3-element-wrap iphorm-clearfix iphorm-labels-above iphorm-element-optional">
                                                                                        <div class="iphorm-element-spacer iphorm-element-spacer-text iphorm_65_3-element-spacer">

                                                                                            <div class="iphorm-errors-wrap iphorm-hidden">
                                                                                            </div> </div>

                                                                                    </div><div class="iphorm-hidden">
                                                                                        <label>这个输入框应该是留空的<input type="text" name="iphorm_65_0"/></label>
                                                                                    </div> <div class="iphorm-submit-wrap iphorm-submit-wrap-65 iphorm-clearfix">

                                                                                                <div class="iphorm-submit-input-wrap iphorm-submit-input-wrap-65"  style="display:block;">
                                                                                                    <button class="iphorm-submit-element" type="button" id="quit" name="iphorm_submit" style='font-size: 16px;line-height:16px;;'><span style='font-size: 16px;line-height:16px;;padding-left: 20px !important;;background-color: #3ec9ad;border: 1px solid #3ec9ad;'><em style='color: #ffffff;font-size: 16px;line-height:16px;padding:10px 20px 10px 0;;font-weight: bold;background-color: #3ec9ad;'>退出登录</em></span></button>
                                                                                                    <div style="display:inline-block;"><div class="iphorm-loading-wrap"><span class="iphorm-loading">请稍候</span></div></div>
                                                                                                </div>
                                                                                        @endif


                                                                                    </div>
                                                                                    <style>.iphorm-elements-65,.iphorm-elements-65 button,.iphorm-elements-65 input,.iphorm-elements-65 select,.iphorm-elements-65 textarea{font-family:微软雅黑;font-style:normal}.iphorm-submit-wrap-65 button.iphorm-submit-element:hover span,.iphorm-submit-wrap-65 button.iphorm-submit-element:hover em{background-color:#7fd4c2!important;}.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-text input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-captcha input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-password input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap select,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap textarea{width:100%;max-width:100%!important;}.iphorm-elements.iphorm-elements-65 .iphorm-group-wrap,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-text,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-captcha,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-password,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap{width:100%!important;max-width:100%!important;}.iphorm-submit-wrap-65 .iphorm-submit-input-wrap{width:100%!important;max-width:100%!important;}.iphorm-submit-wrap-65 .iphorm-submit-input-wrap button{margin:0;}.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-text input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-captcha input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap-password input,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap select,.iphorm-elements.iphorm-elements-65 .iphorm-element-wrap textarea{border-radius:0px;}.iphorm-elements-65 .iphorm-element-wrap-text input,.iphorm-elements-65 .iphorm-element-wrap-captcha input,.iphorm-elements-65 .iphorm-element-wrap-password input,.iphorm-elements-65 .iphorm-input-wrap-select select,.iphorm-elements-65 .iphorm-element-wrap select,.iphorm-elements .iphorm-element-wrap textarea{box-shadow:none!important;}.iphorm-elements-65 .iphorm-element-wrap-text input,.iphorm-elements-65 .iphorm-element-wrap-captcha input,.iphorm-elements-65 .iphorm-element-wrap-password input,.iphorm-elements-65 .iphorm-input-wrap-select select,.iphorm-elements-65 .iphorm-element-wrap select,.iphorm-elements-65 .iphorm-input-wrap-select select,.iphorm-elements-65 .iphorm-element-wrap textarea{background-color:rgba(255,255,255,0.2)!important;}.iphorm-elements-65 .iphorm-input-li>label{font-size:14px;}.iphorm-elements-65 .iphorm-element-wrap-text input,.iphorm-elements-65 .iphorm-element-wrap-captcha input,.iphorm-elements-65 .iphorm-element-wrap-password input,.iphorm-elements-65 .iphorm-input-wrap-select select,.iphorm-elements-65 .iphorm-element-wrap select,.iphorm-elements-65 .iphorm-input-wrap-select select,.iphorm-elements-65 .iphorm-element-wrap textarea{border-width:1px!important;border-color:#c2c2c2!important;}.iphorm-elements-65 .iphorm-submit-input-wrap{float:none!important;text-align:center!important;}</style> </div>
                                                                            </div>
                                                                        </form>
                                                                        <script type="text/javascript">
                                                                            <!--
                                                                            jQuery('#iphorm-outer-58a2eb943e01c script').remove();
                                                                            //-->
                                                                        </script>
                                                                    </div></div>
                                                            </div></div></div><style>.qfy-column-1-58a2eb943d6fc940928>.column_inner:hover{}.qfy-column-1-58a2eb943d6fc940928>.column_inner:hover>.background-media{}.qfy-column-1-58a2eb943d6fc940928>.column_inner:hover>.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-1-58a2eb943d6fc940928>.column_inner{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:36px;}.wpb_row .vc_span_class.qfy-column-1-58a2eb943d6fc940928{};}@media only screen and (max-width: 768px){.qfy-column-1-58a2eb943d6fc940928 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-1-58a2eb943d6fc940928 {};}</style><div   class="qfy-column-2-58a2eb943fbcf888087 qfy-column-inner vc_span_class vc_span6  text-Default small-screen-undefined mobileHidden"  data-dw="1/2" data-fixheight="" ><div style="min-height:370px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb944600e431 .head{font-size: 16px !important;}.single_image_text-58a2eb944600e431 .content{font-size: 16px !important;}}</style>
                                                                <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;background-repeat: no-repeat;"  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"     m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover   inlineblock " >
                                                                        <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                            <div class="wpb_wrapper">
                                                                                <span></span>
                                                                                <span class='single_two_images '  style='display:inline-block;max-width:100%;font-size:0;position:relative;'>



                                                                                    <video src="video/1.mp4" controls="controls" style="width:460px;height:370px;"><video>
                                                                                    <i></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <style>.qfy-column-2-58a2eb943fbcf888087 > .column_inner:hover{}.qfy-column-2-58a2eb943fbcf888087 > .column_inner:hover >.background-media{}.qfy-column-2-58a2eb943fbcf888087 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-2-58a2eb943fbcf888087 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-2-58a2eb943fbcf888087 {};}@media only screen and (max-width: 768px){.qfy-column-2-58a2eb943fbcf888087 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-2-58a2eb943fbcf888087 {};}</style><div   class="qfy-column-3-58a2eb9446262677210 qfy-column-inner vc_span_class vc_span3  text-Default small-screen-undefined"  data-dw="1/4" data-fixheight="" ><div style="min-height:370px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #a3c9c1;border-bottom:1px solid #a3c9c1;border-left:1px solid #a3c9c1;border-right:1px solid #a3c9c1;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:#8d8d8d;"></div><div class="column_containter" style="z-index:3;position:relative;" ><section  data-fixheight="" class="qfy-row-2-58a2eb94464aa358549 section     bothfull  section-text-no-shadow section-inner-no-shadow section-normal"   style='margin-bottom:0px;border-radius:0px;border-top:0px solid #dbb792;border-bottom:1px solid #a3c9c1;border-left:0px solid #dbb792;border-right:0px solid #dbb792;color:#000000;' >
                                                                    <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                                                    <div class="container">
                                                                        <div class="row wpb_row">
                                                                            <div   class="qfy-column-4-58a2eb944669e474015 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb944708b151 .head{font-size: 16px !important;}.single_image_text-58a2eb944708b151 .content{font-size: 16px !important;}}</style>
                                                                                        <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;padding-top:20px;padding-bottom:20px;padding-left:20px;background-repeat: no-repeat;"  m-padding="20px 0px 20px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"     m-padding="20px 0px 20px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover  " >
                                                                                                <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                                                    <div class="wpb_wrapper"><span></span><img width="300" height="199" src="./type/jiadianweixiu.gif" class="front_image  attachment-medium" alt="44m-Single-Beauty-Apartment-1-640x426" title="" description="" data-title="44m-Single-Beauty-Apartment-1-640x426" src-img="" style='' /></div>
                                                                                                </div>
                                                                                        </div> </a></div></div></div><style>.qfy-column-4-58a2eb944669e474015 > .column_inner:hover{}.qfy-column-4-58a2eb944669e474015 > .column_inner:hover >.background-media{}.qfy-column-4-58a2eb944669e474015 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-4-58a2eb944669e474015 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-4-58a2eb944669e474015 {};}@media only screen and (max-width: 768px){.qfy-column-4-58a2eb944669e474015 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-4-58a2eb944669e474015 {};}</style><div   class="qfy-column-5-58a2eb94471bf961033 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                                        <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-67339 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:0px;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;">家电维修</span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-37737 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;"><span style="letter-spacing: 1px;"><span style="font-size: 12px;">诚信维修</span></span></span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div> <div style=""  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element vc_btn3-container vc_btn3-center">
                                                                                            <button id="button1" onmouseleave="this.style.borderColor='#3ec9ad'; this.style.backgroundColor='#3ec9ad'; this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#a3c9c1'; this.style.borderColor='#a3c9c1'; this.style.color='#ffffff';" style="font-size:14px; padding-top:2px;padding-bottom:2px; border-width:2px; border-color:#3ec9ad; background-color:#3ec9ad; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-square vc_btn3-style-qfy-custom">立即下单</button></div>
                                                                                    </div></div></div><style>.qfy-column-5-58a2eb94471bf961033 > .column_inner:hover{}.qfy-column-5-58a2eb94471bf961033 > .column_inner:hover >.background-media{}.qfy-column-5-58a2eb94471bf961033 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-5-58a2eb94471bf961033 > .column_inner {padding-left:0px;padding-right:0px;padding-top:13px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-5-58a2eb94471bf961033 {};}@media only screen and (max-width: 768px){.qfy-column-5-58a2eb94471bf961033 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:13px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-5-58a2eb94471bf961033 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                                                    </div>
                                                                    <style>
                                                                        @media only screen and (min-width: 768px){
                                                                            section.section.qfy-row-2-58a2eb94464aa358549{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}@media only screen and (max-width: 768px){
                                                                            .bit-html section.section.qfy-row-2-58a2eb94464aa358549{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}
                                                                    </style>
                                                                </section><section  data-fixheight="" class="qfy-row-3-58a2eb9447c3d241558 section     bothfull  section-text-no-shadow section-inner-no-shadow section-normal"   style='margin-bottom:0px;border-radius:0px;border-top:0px solid #dbb792;border-bottom:1px solid #a3c9c1;border-left:0px solid #dbb792;border-right:0px solid #dbb792;color:#000000;' >
                                                                    <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                                                    <div class="container">
                                                                        <div class="row wpb_row">
                                                                            <div   class="qfy-column-6-58a2eb9447dd3867619 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb94483d7138 .head{font-size: 16px !important;}.single_image_text-58a2eb94483d7138 .content{font-size: 16px !important;}}</style>
                                                                                        <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;padding-top:20px;padding-bottom:20px;padding-left:20px;background-repeat: no-repeat;"  m-padding="0px 0px 20px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"     m-padding="0px 0px 20px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover  " >
                                                                                                <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                                                    <div class="wpb_wrapper"><span></span><img width="300" height="200" src="./type/diannaoweixiu.gif" class="front_image  attachment-medium" alt="concrete-nordic-style" title="" description="" data-title="concrete-nordic-style" src-img="" style='' /></div>
                                                                                                </div>
                                                                                        </div> </a></div></div></div><style>.qfy-column-6-58a2eb9447dd3867619 > .column_inner:hover{}.qfy-column-6-58a2eb9447dd3867619 > .column_inner:hover >.background-media{}.qfy-column-6-58a2eb9447dd3867619 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-6-58a2eb9447dd3867619 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-6-58a2eb9447dd3867619 {};}@media only screen and (max-width: 768px){.qfy-column-6-58a2eb9447dd3867619 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-6-58a2eb9447dd3867619 {};}</style><div   class="qfy-column-7-58a2eb94484f0341289 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                                        <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-25249 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;margin-top:10px;padding-top:0px;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;">电脑维修</span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-43382 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;"><span style="letter-spacing: 1px;"><span style="font-size: 12px;">真诚服务</span></span></span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div> <div style="padding-top:1px;"  m-padding="1px 0px 0px 0px"  p-padding="1px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element vc_btn3-container vc_btn3-center"><button id="button3" onmouseleave="this.style.borderColor='#3ec9ad'; this.style.backgroundColor='#3ec9ad'; this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#a3c9c1'; this.style.borderColor='#a3c9c1'; this.style.color='#ffffff';" style="font-size:14px; padding-top:2px;padding-bottom:2px; border-width:2px; border-color:#3ec9ad; background-color:#3ec9ad; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-square vc_btn3-style-qfy-custom">立即下单</button></div>
                                                                                    </div></div></div>
                                                                            <style>.qfy-column-7-58a2eb94484f0341289 > .column_inner:hover{}.qfy-column-7-58a2eb94484f0341289 > .column_inner:hover >.background-media{}.qfy-column-7-58a2eb94484f0341289 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-7-58a2eb94484f0341289 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-7-58a2eb94484f0341289 {};}@media only screen and (max-width: 768px){.qfy-column-7-58a2eb94484f0341289 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-7-58a2eb94484f0341289 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                                                    </div>
                                                                    <style>
                                                                        @media only screen and (min-width: 768px){
                                                                            section.section.qfy-row-3-58a2eb9447c3d241558{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}@media only screen and (max-width: 768px){
                                                                            .bit-html section.section.qfy-row-3-58a2eb9447c3d241558{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}
                                                                    </style>
                                                                </section><section  data-fixheight="" class="qfy-row-4-58a2eb9448c8b418910 section     bothfull  section-text-no-shadow section-inner-no-shadow section-normal"   style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                                                    <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                                                    <div class="container">
                                                                        <div class="row wpb_row">
                                                                            <div   class="qfy-column-8-58a2eb9448e2166822 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb944974d9 .head{font-size: 16px !important;}.single_image_text-58a2eb944974d9 .content{font-size: 16px !important;}}</style>
                                                                                        <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;padding-top:20px;padding-bottom:20px;padding-left:20px;background-repeat: no-repeat;"  m-padding="0px 0px 0px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"     m-padding="0px 0px 0px 0px"  p-padding="20px 0px 20px 20px" css_animation_delay="0" qfyuuid="0"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover  " >
                                                                                                <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                                                    <div class="wpb_wrapper"><span></span><img width="300" height="225" src="./type/shoujiweihu.gif" class="front_image  attachment-medium" alt="6515-1-620x-u" title="" description="" data-title="6515-1-620x-u" src-img="" style='' /></div>
                                                                                                </div>
                                                                                        </div> </a></div></div></div><style>.qfy-column-8-58a2eb9448e2166822 > .column_inner:hover{}.qfy-column-8-58a2eb9448e2166822 > .column_inner:hover >.background-media{}.qfy-column-8-58a2eb9448e2166822 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-8-58a2eb9448e2166822 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-8-58a2eb9448e2166822 {};}@media only screen and (max-width: 768px){.qfy-column-8-58a2eb9448e2166822 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-8-58a2eb9448e2166822 {};}</style><div   class="qfy-column-9-58a2eb9449885323710 qfy-column-inner vc_span_class vc_span6  text-default small-screen-default"  data-dw="1/2" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                                        <div  m-padding="17px 0px 0px 0px"  p-padding="17px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-60020 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-top:17px;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;">手机维修</span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-56591 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;padding-right:0px;padding-left:0px;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div style="position: relative;">
                                                                                                    <div style="text-align: center;"><span style="color:#FFFFFF;"><span style="letter-spacing: 1px;"><span style="font-size: 12px;">顾客至上</span></span></span></div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div> <div style=""  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element vc_btn3-container vc_btn3-center"><button id="button2" onmouseleave="this.style.borderColor='#3ec9ad'; this.style.backgroundColor='#3ec9ad'; this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#ea8a56'; this.style.borderColor='#ea8a56'; this.style.color='#ffffff';" style="font-size:14px; padding-top:2px;padding-bottom:2px; border-width:2px; border-color:#3ec9ad; background-color:#3ec9ad; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-square vc_btn3-style-qfy-custom">立即下单</button></div>
                                                                                    </div></div></div><style>.qfy-column-9-58a2eb9449885323710 > .column_inner:hover{}.qfy-column-9-58a2eb9449885323710 > .column_inner:hover >.background-media{}.qfy-column-9-58a2eb9449885323710 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-9-58a2eb9449885323710 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-9-58a2eb9449885323710 {};}@media only screen and (max-width: 768px){.qfy-column-9-58a2eb9449885323710 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-9-58a2eb9449885323710 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                                                    </div>
                                                                    <style>
                                                                        @media only screen and (min-width: 768px){
                                                                            section.section.qfy-row-4-58a2eb9448c8b418910{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}@media only screen and (max-width: 768px){
                                                                            .bit-html section.section.qfy-row-4-58a2eb9448c8b418910{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:px;margin-top:0px;}}
                                                                    </style>
                                                                </section></div></div></div><style>.qfy-column-3-58a2eb9446262677210 > .column_inner:hover{}.qfy-column-3-58a2eb9446262677210 > .column_inner:hover >.background-media{}.qfy-column-3-58a2eb9446262677210 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-3-58a2eb9446262677210 > .column_inner {padding-left:0px;padding-right:0px;padding-top:10px;padding-bottom:12px;}.wpb_row .vc_span_class.qfy-column-3-58a2eb9446262677210 {};}@media only screen and (max-width: 768px){.qfy-column-3-58a2eb9446262677210 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-3-58a2eb9446262677210 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-1-58a2eb943ce6b329146{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-1-58a2eb943ce6b329146 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-1-58a2eb943ce6b329146{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-5-58a2eb944a1ad425278 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_mgsdm"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #3ec9ad;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-10-58a2eb944a386746279 qfy-column-inner vc_span_class vc_span1_5  text-default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-94317 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:0px;padding-bottom:0px;">
                                                                    <div class="wpb_wrapper">
                                                                        <p><span style="color:#FFFFFF;"><span style="letter-spacing: 1px;"><span style="font-family: 微軟正黑體;"><span style="font-size: 28px;">维修流程</span></span></span></span></p>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-10-58a2eb944a386746279 > .column_inner:hover{}.qfy-column-10-58a2eb944a386746279 > .column_inner:hover >.background-media{}.qfy-column-10-58a2eb944a386746279 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-10-58a2eb944a386746279 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-10-58a2eb944a386746279 {width:13.65158898305085%;};}@media only screen and (max-width: 768px){.qfy-column-10-58a2eb944a386746279 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:7px;padding-top:16px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-10-58a2eb944a386746279 {width:13.65158898305085%;};}</style><div   class="qfy-column-11-58a2eb944a76b758617 qfy-column-inner vc_span_class vc_span10_5  text-default small-screen-default"  data-dw="7/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-69379 wpb_text_column wpb_content_element  mobile_fontsize12" style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div><span style="color:#FFFFFF;"><span style="letter-spacing: 1px;"><span style="font-size: 13px;">竭诚为您服务</span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-11-58a2eb944a76b758617 > .column_inner:hover{}.qfy-column-11-58a2eb944a76b758617 > .column_inner:hover >.background-media{}.qfy-column-11-58a2eb944a76b758617 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-11-58a2eb944a76b758617 > .column_inner {padding-left:0px;padding-right:0px;padding-top:2px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-11-58a2eb944a76b758617 {width:86.3%;};}@media only screen and (max-width: 768px){.qfy-column-11-58a2eb944a76b758617 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:2px;padding-bottom:12px;}.display_entire .wpb_row .vc_span_class.qfy-column-11-58a2eb944a76b758617 {width:86.3%;};}</style>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-5-58a2eb944a1ad425278{padding-left:0px;padding-right:0px;padding-top:5px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-5-58a2eb944a1ad425278 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-5-58a2eb944a1ad425278{padding-left:10px;padding-right:2px;padding-top:20px;padding-bottom:11px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-6-58a2eb944ac16401699 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_nxhgh"  style='margin-bottom:0px;border-radius:0px;color:#666666;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-12-58a2eb944af12573859 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-2293:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-2293:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-2293:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-2293{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-2293 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-2293 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-2293 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <!--维修流程 -->
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" target="_blank" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-icon-home" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">上门服务</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-12-58a2eb944af12573859 > .column_inner:hover{}.qfy-column-12-58a2eb944af12573859 > .column_inner:hover >.background-media{}.qfy-column-12-58a2eb944af12573859 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-12-58a2eb944af12573859 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-12-58a2eb944af12573859 {};}@media only screen and (max-width: 768px){.qfy-column-12-58a2eb944af12573859 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-12-58a2eb944af12573859 {};}</style><div   class="qfy-column-13-58a2eb944b370342626 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-68970:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-68970:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-68970:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-68970{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-68970 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-68970 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-68970 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" target="_blank" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 30px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-th" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">填写维修表单</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-13-58a2eb944b370342626 > .column_inner:hover{}.qfy-column-13-58a2eb944b370342626 > .column_inner:hover >.background-media{}.qfy-column-13-58a2eb944b370342626 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-13-58a2eb944b370342626 > .column_inner {padding-left:0px;padding-right:0px;padding-top:6px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-13-58a2eb944b370342626 {};}@media only screen and (max-width: 768px){.qfy-column-13-58a2eb944b370342626 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-13-58a2eb944b370342626 {};}</style><div   class="qfy-column-14-58a2eb944b7d3911013 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-77399:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-77399:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-77399:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-77399{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-77399 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-77399 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-77399 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-icon-pencil" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">制定维修方案</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-14-58a2eb944b7d3911013 > .column_inner:hover{}.qfy-column-14-58a2eb944b7d3911013 > .column_inner:hover >.background-media{}.qfy-column-14-58a2eb944b7d3911013 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-14-58a2eb944b7d3911013 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-14-58a2eb944b7d3911013 {};}@media only screen and (max-width: 768px){.qfy-column-14-58a2eb944b7d3911013 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-14-58a2eb944b7d3911013 {};}</style><div   class="qfy-column-15-58a2eb944bc58366901 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-26957:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-26957:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-26957:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-26957{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-26957 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-26957 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-26957 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-tags" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">确定维修人员</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-15-58a2eb944bc58366901 > .column_inner:hover{}.qfy-column-15-58a2eb944bc58366901 > .column_inner:hover >.background-media{}.qfy-column-15-58a2eb944bc58366901 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-15-58a2eb944bc58366901 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-15-58a2eb944bc58366901 {};}@media only screen and (max-width: 768px){.qfy-column-15-58a2eb944bc58366901 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-15-58a2eb944bc58366901 {};}</style><div   class="qfy-column-16-58a2eb944c0a4247996 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-51835:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-51835:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-51835:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-51835{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-51835 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-51835 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-51835 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-icon-wrench" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">维修施工</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-16-58a2eb944c0a4247996 > .column_inner:hover{}.qfy-column-16-58a2eb944c0a4247996 > .column_inner:hover >.background-media{}.qfy-column-16-58a2eb944c0a4247996 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-16-58a2eb944c0a4247996 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-16-58a2eb944c0a4247996 {};}@media only screen and (max-width: 768px){.qfy-column-16-58a2eb944c0a4247996 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-16-58a2eb944c0a4247996 {};}</style><div   class="qfy-column-17-58a2eb944c527230594 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-92138:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-92138:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-92138:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-92138{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-92138 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-92138 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-92138 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-icon-link" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">产品验收</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-17-58a2eb944c527230594 > .column_inner:hover{}.qfy-column-17-58a2eb944c527230594 > .column_inner:hover >.background-media{}.qfy-column-17-58a2eb944c527230594 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-17-58a2eb944c527230594 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-17-58a2eb944c527230594 {};}@media only screen and (max-width: 768px){.qfy-column-17-58a2eb944c527230594 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-17-58a2eb944c527230594 {};}</style><div   class="qfy-column-18-58a2eb944c9af895703 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-47216:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-47216:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-47216:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-47216{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-47216 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-47216 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-47216 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-shopping-cart" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">用户反馈</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-18-58a2eb944c9af895703 > .column_inner:hover{}.qfy-column-18-58a2eb944c9af895703 > .column_inner:hover >.background-media{}.qfy-column-18-58a2eb944c9af895703 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-18-58a2eb944c9af895703 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-18-58a2eb944c9af895703 {};}@media only screen and (max-width: 768px){.qfy-column-18-58a2eb944c9af895703 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-18-58a2eb944c9af895703 {};}</style><div   class="qfy-column-19-58a2eb944ce44788998 qfy-column-inner vc_span_class vc_span1_5  text-Default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;border-top:1px solid #dddddd;border-bottom:1px solid #dddddd;border-left:1px solid #dddddd;border-right:1px solid #dddddd;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>.qfy-text-3402:hover{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.qfy-text-3402:hover *{color:#ffffff !important;transition:all 500ms linear;}.qfy-text-3402:hover .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-3402{background:#3ec9ad !important;color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-3402 *{color:#ffffff !important;transition:all 500ms linear;}.mouseHover.hover .qfy-text-3402 .bitIcon i.glyphicon{color:#ffffff !important;transition:all 500ms linear;}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-3402 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: transparent;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                        <div style="text-align: center;"><a class="bitIcon iconLeft" data-original-image="" data-original-imageheight="" data-original-imagewidth="" data-original-title="" data-tooltip="off" iconcolor="#888888" url-flag="0" url-flagtarget="">
                                                                                <b style="color: rgb(0, 0, 0); border: 0px none; font-size: 35px; border-radius: 0px;">
                                                                                    <i class="glyphicon glyphicon-icon-thumbs-up" style="margin: 2px 6px; top: 0px; color: rgb(136, 136, 136);"> <span style="display: none; width: 0px;">&nbsp;</span> </i>
                                                                                </b>
                                                                                <span class="iconText" style="font-size: 14px;"></span></a></div>

                                                                        <div style="text-align: center;"><span style="color:#808080;"><span style="font-size: 14px;">维修保障</span></span></div>

                                                                        <div style="text-align: center;">&nbsp;</div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-19-58a2eb944ce44788998 > .column_inner:hover{}.qfy-column-19-58a2eb944ce44788998 > .column_inner:hover >.background-media{}.qfy-column-19-58a2eb944ce44788998 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-19-58a2eb944ce44788998 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-19-58a2eb944ce44788998 {};}@media only screen and (max-width: 768px){.qfy-column-19-58a2eb944ce44788998 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-19-58a2eb944ce44788998 {};}</style>        </div>
                                            </div>
                                            <!--维修流程 -->
                                            <style title='维修流程下的间隔'>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-6-58a2eb944ac16401699{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:58px;margin-top:34px;}section.section.qfy-row-6-58a2eb944ac16401699 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-6-58a2eb944ac16401699{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:33px;margin-top:0px;}}
                                            </style>

                                        </section><section  data-fixheight="" class="qfy-row-7-58a2eb944d34c813442 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_fm4iu"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>


                                           <!-- 维修案例渲染-->
                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-20-58a2eb944d50741480 qfy-column-inner vc_span_class vc_span1_5  text-default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-46784 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:0px;padding-bottom:0px;">
                                                                    <div class="wpb_wrapper">
                                                                        <p><span style="color:#696969;"><span style="letter-spacing: 1px;"><span style="font-family: 微軟正黑體;"><span style="font-size: 28px;">维修案例</span></span></span></span></p>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-20-58a2eb944d50741480 > .column_inner:hover{}.qfy-column-20-58a2eb944d50741480 > .column_inner:hover >.background-media{}.qfy-column-20-58a2eb944d50741480 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-20-58a2eb944d50741480 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-20-58a2eb944d50741480 {width:13.65158898305085%;};}@media only screen and (max-width: 768px){.qfy-column-20-58a2eb944d50741480 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:7px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-20-58a2eb944d50741480 {width:13.65158898305085%;};}</style><div   class="qfy-column-21-58a2eb944d8e9232352 qfy-column-inner vc_span_class vc_span10_5  text-default small-screen-default"  data-dw="7/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>
                                                            <div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-10831 wpb_text_column wpb_content_element  mobile_fontsize" style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div><span style="color:#808080;"><span style="letter-spacing: 1px;"><span style="font-size: 13px;">我们累计共为10000位提供服务</span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-21-58a2eb944d8e9232352 > .column_inner:hover{}.qfy-column-21-58a2eb944d8e9232352 > .column_inner:hover >.background-media{}.qfy-column-21-58a2eb944d8e9232352 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-21-58a2eb944d8e9232352 > .column_inner {padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-21-58a2eb944d8e9232352 {width:86.3%;};}@media only screen and (max-width: 768px){.qfy-column-21-58a2eb944d8e9232352 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-21-58a2eb944d8e9232352 {width:86.3%;};}</style>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-7-58a2eb944d34c813442{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-7-58a2eb944d34c813442 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-7-58a2eb944d34c813442{padding-left:15px;padding-right:14px;padding-top:20px;padding-bottom:46px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-8-58a2eb944dd82476955 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_xuz2g"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-22-58a2eb944df21556063 qfy-column-inner vc_span_class vc_span4  text-default small-screen-undefined"  data-dw="1/3" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>

                                                            <div class="column_containter" style="z-index:3;position:relative;" >
                                                                {{--维修案例左--}}
                                                                <style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb944e6bf709 .head{font-size: 16px !important;}.single_image_text-58a2eb944e6bf709 .content{font-size: 16px !important;}}</style>
                                                                <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;background-repeat: no-repeat;"  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_single_image_bf8vn"     m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_single_image_bf8vn"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover  " thumbPath="" href="javascript:void(0);">

                                                                        <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                            <div class="wpb_wrapper"><span></span><img  class="front_image   ag_image" src="./container/8.jpg"  alt="view1c-1050x700" description=""   data-title="view1c-1050x700" title="" src-img ="" style='' /></div>
                                                                        </div>
                                                                </div>
                                                                <div  m-padding="6px 0px 6px 0px"  p-padding="6px 0px 6px 1px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-4286 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: #3ec9ad;background-repeat: no-repeat;;margin-bottom:20px;padding-top:6px;padding-bottom:6px;padding-left:1px;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div style="text-align: center;"><span style="font-size:13px;"><span style="color: rgb(255, 255, 255);">家电维修 客户：李**</span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb944e6bf709 .head{font-size: 16px !important;}.single_image_text-58a2eb944e6bf709 .content{font-size: 16px !important;}}</style>
                                                                {{--维修案例左--}}

                                                                 </div></div></div><style>.qfy-column-23-58a2eb94502db313815 > .column_inner:hover{}.qfy-column-23-58a2eb94502db313815 > .column_inner:hover >.background-media{}.qfy-column-23-58a2eb94502db313815 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-23-58a2eb94502db313815 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-23-58a2eb94502db313815 {};}@media only screen and (max-width: 768px){.qfy-column-23-58a2eb94502db313815 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-23-58a2eb94502db313815 {};}</style><div   class="qfy-column-24-58a2eb9452794888749 qfy-column-inner vc_span_class vc_span4  text-Default small-screen-undefined"  data-dw="1/3" data-fixheight="" ><div style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;border-radius:0px;;position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-0" style="background-color:#f5f5f5;"></div><div class="column_containter" style="z-index:3;position:relative;" ><div id=""  data-loading="" data-loading-w=""  data-open="" data-post="post" data-cate=" "   m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"   class="qfy-element  UUID-POSTS-58a2eb9456b0e673704 wpb_teaser_grid wpb_content_element  wpb_grid columns_count_1 columns_count_1 wpb_teaser_grid_post " style="padding-right:0px;padding-left:0px;">
                                                                    <style>.UUID-POSTS-58a2eb9456b0e673704 .post-title > i.glyphicon:hover{color:#cccccc !important;}.UUID-POSTS-58a2eb9456b0e673704 .post-title > a:hover,.UUID-POSTS-58a2eb9456b0e673704 .post-title >div> a:hover,.UUID-POSTS-58a2eb9456b0e673704 .post-title > span:hover{color:#3ec9ad !important;}.UUID-POSTS-58a2eb9456b0e673704 .post-title > span.toEditor:hover{color:#fff !important;}@media only screen and (max-width: 760px) {.UUID-POSTS-58a2eb9456b0e673704  .post_blog .blog-media{width:100% !important;}.thumbnail_text-58a2eb9456acc583 .head{font-size: 16px !important;}.thumbnail_text-58a2eb9456acc583 .content{font-size: 16px !important;}}</style>	<style class='style_UUID-POSTS-58a2eb9456b0e673704'>.UUID-POSTS-58a2eb9456b0e673704 .wpb_heading{padding:0 0 0 10px;height:28px;line-height:28px;background-color:transparent;margin:0px;font-family:;font-size:px;font-weight:normal;font-style:normal;text-decoration:none;color:#ffffff;border-top:1px solid transparent;border-left:1px solid transparent;border-right:1px solid transparent;border-bottom:0px solid transparent;background-image:none;-webkit-border-top-left-radius: 4px;-webkit-border-top-right-radius: 4px;-moz-border-radius-topleft: 4px;-moz-border-radius-topright: 4px;border-top-left-radius: 4px;border-top-right-radius: 4px;} .UUID-POSTS-58a2eb9456b0e673704 .wpb_heading{border-top:0;border-left:0;border-right:0;} .UUID-POSTS-58a2eb9456b0e673704  .teaser_grid_container,.UUID-POSTS-58a2eb9456b0e673704 .vc-carousel{border-bottom:0;border-top:0;border-left:0;border-right:0;padding:10px 10px 4px 10px;}.UUID-POSTS-58a2eb9456b0e673704{-webkit-box-shadow:none;box-shadow:none;}.post-title .glyphicon{  left:0px;  }  #UUID-POSTS-58a2eb9456b0e673704 .bitWidgetFrame{background-color:transparent;background-image:none;-webkit-border-bottom-left-radius: 4px;border-bottom-left-radius: 4px;-webkit-border-bottom-right-radius: 4px;border-bottom-right-radius: 4px;}</style>    <div class="wpb_wrapper">
                                                                        <div class="teaser_grid_container " style=';clear:both;' data-type="post" data-cate=" " data-pcate="">
                                                                            <ul style="min-height:60px;" class="wpb_thumbnails wpb_thumbnails-fluid vc_clearfix post_grid" data-layout-mode="fitRows">
                                                                              
                                                                               
                                                                                <li data-postid="6485" class="isotope-item vc_span12 grid-cat-2" style='max-width:99.8%;margin-bottom:5px;padding-bottom:5px;border-bottom:1px dotted #c6c6c6;' >
                                                                                    <div style="">



                                                                                        <div class="post-thumb blog-media wf-td" style='overflow:hidden;display:block;width: 100%;text-align: center;padding-bottom:10px;vertical-align:top;' >
                                                                                            <a href="#" class="bitImageAhover   link_image" title="软装中的色彩搭配很重要,不可忽略细节01"><img data-t-id='8596' style='' class=" ag_image" src="./hello/1.jpg" alt="3317-1-620x-u" description=""   data-title="3317-1-620x-u" title="" src-img ="" /><i></i></a>	</div>



                                                                                        <div class="post-title"  style='color:#373A41;line-height:15px; vertical-align: top; text-align:center;'>



                                                                                            <a data-title="true" style="color:#373A41;font-size:15px;line-height:21px" href="javascript:void(0);" class="bitImageAhover   link_title" title="主要维修质量，是我们一直最求的目标">主要维修质量，是我们一直最求的目标</a>

                                                                                        </div>





                                                                                        <div  class="entry-content post_excerpt	" style="color:#727272;font-size:14px;">

                                                                                            <p>尽心的准备，优质的服务态度，赢得客户的信赖，是我们的服务宗旨，也是我们一直贯彻的方针，用户至上，服务我们是认真的！！</p><br />

                                                                                        </div>



                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>     <div class="clear"></div>



                                                                </div>
                                                            </div></div></div><style>.qfy-column-24-58a2eb9452794888749 > .column_inner:hover{}.qfy-column-24-58a2eb9452794888749 > .column_inner:hover >.background-media{}.qfy-column-24-58a2eb9452794888749 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-24-58a2eb9452794888749 > .column_inner {padding-left:0px;padding-right:0px;padding-top:20px;padding-bottom:20px;}.wpb_row .vc_span_class.qfy-column-24-58a2eb9452794888749 {};}@media only screen and (max-width: 768px){.qfy-column-24-58a2eb9452794888749 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.display_entire .wpb_row .vc_span_class.qfy-column-24-58a2eb9452794888749 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                            </div>
                                            <!-- 维修案例渲染-->
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-8-58a2eb944dd82476955{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-8-58a2eb944dd82476955 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-8-58a2eb944dd82476955{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-9-58a2eb9457c3d784452 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_tisch"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-25-58a2eb9457dea54810 qfy-column-inner vc_span_class vc_span8  text-default small-screen-undefined"  data-dw="2/3" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><section  data-fixheight="" class="qfy-row-10-58a2eb9457f7f462702 section     bothfull  section-text-no-shadow section-inner-no-shadow section-normal"   style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                                                    <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                                                    <div class="container">
                                                                        <div class="row wpb_row">
                                                                            <div   class="qfy-column-26-58a2eb945814b818470 qfy-column-inner  vc_span12  text-default small-screen-default fullrow"  data-dw="1/1" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                                        <div  m-padding="6px 0px 0px 0px"  p-padding="6px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-86826 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:6px;padding-bottom:0px;padding-left:0px;border-top:1px solid #c6c6c6;border-bottom:1px solid #c6c6c6;border-left:1px solid #c6c6c6;border-right:1px solid #c6c6c6;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <p style="text-align: center;"><span style="color:#696969;"><span style="font-size: 24px;"><span style="letter-spacing: 5px;"><span style="font-family: 微軟正黑體;">专业的服务团队为用户提供优质的服务</span></span></span></span></p>

                                                                                            </div>
                                                                                        </div> </div></div></div><style>.qfy-column-26-58a2eb945814b818470 > .column_inner:hover{}.qfy-column-26-58a2eb945814b818470 > .column_inner:hover >.background-media{}.qfy-column-26-58a2eb945814b818470 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-26-58a2eb945814b818470 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-26-58a2eb945814b818470 {};}@media only screen and (max-width: 768px){.qfy-column-26-58a2eb945814b818470 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-26-58a2eb945814b818470 {};}</style>        </div>
                                                                    </div>
                                                                    <style>
                                                                        @media only screen and (min-width: 768px){
                                                                            section.section.qfy-row-10-58a2eb9457f7f462702{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}@media only screen and (max-width: 768px){
                                                                            .bit-html section.section.qfy-row-10-58a2eb9457f7f462702{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:px;margin-top:0px;}}
                                                                    </style>
                                                                </section></div></div></div><style>.qfy-column-25-58a2eb9457dea54810 > .column_inner:hover{}.qfy-column-25-58a2eb9457dea54810 > .column_inner:hover >.background-media{}.qfy-column-25-58a2eb9457dea54810 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-25-58a2eb9457dea54810 > .column_inner {padding-left:0px;padding-right:4px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-25-58a2eb9457dea54810 {};}@media only screen and (max-width: 768px){.qfy-column-25-58a2eb9457dea54810 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-25-58a2eb9457dea54810 {};}</style><div   class="qfy-column-27-58a2eb9458617504183 qfy-column-inner vc_span_class vc_span4  text-default small-screen-default"  data-dw="1/3" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><div style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;"  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_btn_5ro6k"  class="qfy-element vc_btn3-container  wpb_animate_when_almost_visible wpb_appear vc_btn3-center"><a onmouseleave="this.style.borderColor='#000000'; this.style.backgroundColor='#000000'; this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#666666'; this.style.borderColor='#666666'; this.style.color='#ffffff';" style="font-family:trebuchet ms; font-size:11px; padding-left:50px;padding-right:50px; padding-top:13px;padding-bottom:13px; border-width:1px; border-color:#000000; background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-qfy-custom vc_btn3-block" href="javascript:void(0);" target="">MORE INFO</a></div>
                                                                {{--维修案例更多查看--}}
                                                            </div></div></div><style>.qfy-column-27-58a2eb9458617504183 > .column_inner:hover{}.qfy-column-27-58a2eb9458617504183 > .column_inner:hover >.background-media{}.qfy-column-27-58a2eb9458617504183 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-27-58a2eb9458617504183 > .column_inner {padding-left:4px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-27-58a2eb9458617504183 {};}@media only screen and (max-width: 768px){.qfy-column-27-58a2eb9458617504183 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-27-58a2eb9458617504183 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-9-58a2eb9457c3d784452{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-9-58a2eb9457c3d784452 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-9-58a2eb9457c3d784452{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:46px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-11-58a2eb9458ae1286300 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_slmge"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>
                                  {{--完成案例渲染--}}
                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-28-58a2eb9458c9c100604 qfy-column-inner vc_span_class vc_span1_5  text-default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-61249 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:0px;padding-bottom:0px;">
                                                                    <div class="wpb_wrapper">
                                                                        <p><span style="color:#696969;"><span style="letter-spacing: 1px;"><span style="font-family: 微軟正黑體;"><span style="font-size: 28px;">完成案例</span></span></span></span></p>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-28-58a2eb9458c9c100604 > .column_inner:hover{}.qfy-column-28-58a2eb9458c9c100604 > .column_inner:hover >.background-media{}.qfy-column-28-58a2eb9458c9c100604 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-28-58a2eb9458c9c100604 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-28-58a2eb9458c9c100604 {width:16.52542372881356%;};}@media only screen and (max-width: 768px){.qfy-column-28-58a2eb9458c9c100604 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:7px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-28-58a2eb9458c9c100604 {width:16.52542372881356%;};}</style><div   class="qfy-column-29-58a2eb9459025763255 qfy-column-inner vc_span_class vc_span10_5  text-default small-screen-default"  data-dw="7/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-65667 wpb_text_column wpb_content_element  mobile_fontsize" style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div><span style="color:#808080;"><span style="letter-spacing: 1px;"><span style="font-size: 13px;">已有10000名客户给我们提供了灵感</span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-29-58a2eb9459025763255 > .column_inner:hover{}.qfy-column-29-58a2eb9459025763255 > .column_inner:hover >.background-media{}.qfy-column-29-58a2eb9459025763255 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-29-58a2eb9459025763255 > .column_inner {padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-29-58a2eb9459025763255 {width:83.4%;};}@media only screen and (max-width: 768px){.qfy-column-29-58a2eb9459025763255 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-29-58a2eb9459025763255 {width:83.4%;};}</style>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-11-58a2eb9458ae1286300{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:54px;}section.section.qfy-row-11-58a2eb9458ae1286300 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-11-58a2eb9458ae1286300{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:46px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-12-58a2eb94594bb320988 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_7qxqc"  style='margin-bottom:0px;border-radius:0px;color:#666666;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-30-58a2eb945971b806115 qfy-column-inner  vc_span12  text-default small-screen-default fullrow"  data-dw="1/1" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>

                                                            <div class="column_containter" style="z-index:3;position:relative;" ><style>
                                                                    @media screen and (max-width: 760px) {
                                                                        .g7758 .wpb_images_lib_isotope .gimg{width:99.5%;}
                                                                    }
                                                                    @media screen and (min-width: 760px) {
                                                                        .g7758 .wpb_images_lib_isotope .gimg{width:33.166667%;}
                                                                    }
                                                                </style>
                                                                <style>
                                                                    @media only screen and (max-width: 760px) {.single_image_text-58a2eb9459ecb638 .head{font-size: 16px !important;}.single_image_text-58a2eb9459ecb638 .content{font-size: 16px !important;}}</style>
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"   class="qfy-element wpb_images_lib wpb_content_element vc_clearfix" style="">
                                                                    <div class="wpb_wrapper g7758">


                                                                            <div class="wpb_images_lib_isotope " data-liblayout="masonry"  data-width="20" >



                                                                            <div class="vc-item images gimg" style="margin-bottom:30px;padding-right:20px">
                                                                                <div class="vc-inner"  >
                                                                                    <a class="qfy_thickbox bitImageAhover " thumbPath="http://static.qifeiye.com/caches/31d77848c79d76c10027e5f47157bcf2/aHR0cDovLzU3NWU1YjM1YzRlZTcudDczLnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNi8wNi80Mjc5MjZhNmZmMWVjMWE1MjNjOWE1MTlkZDE5OTllNy0xNTB4MTUwLmpwZw_p_p100_p_3D_p_p100_p_3D.jpg"  href="http://static.qifeiye.com/caches/31d77848c79d76c10027e5f47157bcf2/aHR0cDovLzU3NWU1YjM1YzRlZTcudDczLnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNi8wNi80Mjc5MjZhNmZmMWVjMWE1MjNjOWE1MTlkZDE5OTllNy5qcGc_p_p100_p_2FYWktbm8tY2FjaGU9dHJ1ZQ_p_p100_p_3D_p_p100_p_3D.jpg" rel="gallery-group-58a2eb9459f12792138" >
                                                                                        <img style='width:300px;height:200px;' class=''class=" ag_image" src="car/20.jpg" alt="6566-1-620x-u" description=""   data-title="6566-1-620x-u" title="" src-img ="" /><i></i>
                                                                                    </a>
                                                                                </div></div>
                                                                    </div></div></div></div></div><style>.qfy-column-30-58a2eb945971b806115 > .column_inner:hover{}.qfy-column-30-58a2eb945971b806115 > .column_inner:hover >.background-media{}.qfy-column-30-58a2eb945971b806115 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-30-58a2eb945971b806115 > .column_inner {padding-left:19px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-30-58a2eb945971b806115 {};}@media only screen and (max-width: 768px){.qfy-column-30-58a2eb945971b806115 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-30-58a2eb945971b806115 {};}</style>        </div>
                                            </div>
                                            {{--完成案例渲染结尾--}}
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-12-58a2eb94594bb320988{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-12-58a2eb94594bb320988 > .container{max-width:1064px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-12-58a2eb94594bb320988{padding-left:18px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-13-58a2eb945d7a3377964 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_gc1sn"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-31-58a2eb945d944924330 qfy-column-inner vc_span_class vc_span8  text-default small-screen-undefined"  data-dw="2/3" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>






                                                            <div class="column_containter" style="z-index:3;position:relative;" ><section  data-fixheight="" class="qfy-row-14-58a2eb945db17179859 section     bothfull  section-text-no-shadow section-inner-no-shadow section-normal"   style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                                                    <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                                                    <div class="container">
                                                                        <div class="row wpb_row">
                                                                            <div   class="qfy-column-32-58a2eb945dcb2691780 qfy-column-inner  vc_span12  text-default small-screen-default fullrow"  data-dw="1/1" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                                        <div  m-padding="14px 0px 11px 0px"  p-padding="6px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-9582 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:6px;padding-bottom:0px;padding-left:0px;border-top:1px solid #c6c6c6;border-bottom:1px solid #c6c6c6;border-left:1px solid #c6c6c6;border-right:1px solid #c6c6c6;">
                                                                                            <div class="wpb_wrapper">
                                                                                                <p style="text-align: center;"><span style="color:#696969;"><span style="font-size: 24px;"><span style="letter-spacing: 5px;"><span style="font-family: 微軟正黑體;">丰富的维修经验为您提供优质的服务</span></span></span></span></p>

                                                                                            </div>
                                                                                        </div> </div></div></div><style>.qfy-column-32-58a2eb945dcb2691780 > .column_inner:hover{}.qfy-column-32-58a2eb945dcb2691780 > .column_inner:hover >.background-media{}.qfy-column-32-58a2eb945dcb2691780 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-32-58a2eb945dcb2691780 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-32-58a2eb945dcb2691780 {};}@media only screen and (max-width: 768px){.qfy-column-32-58a2eb945dcb2691780 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-32-58a2eb945dcb2691780 {};}</style>        </div>
                                                                    </div>
                                                                    <style>
                                                                        @media only screen and (min-width: 768px){
                                                                            section.section.qfy-row-14-58a2eb945db17179859{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}}@media only screen and (max-width: 768px){
                                                                            .bit-html section.section.qfy-row-14-58a2eb945db17179859{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:px;margin-top:0px;}}
                                                                    </style>
                                                                </section></div></div></div><style>.qfy-column-31-58a2eb945d944924330 > .column_inner:hover{}.qfy-column-31-58a2eb945d944924330 > .column_inner:hover >.background-media{}.qfy-column-31-58a2eb945d944924330 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-31-58a2eb945d944924330 > .column_inner {padding-left:0px;padding-right:4px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-31-58a2eb945d944924330 {};}@media only screen and (max-width: 768px){.qfy-column-31-58a2eb945d944924330 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-31-58a2eb945d944924330 {};}</style><div   class="qfy-column-33-58a2eb945e0d8910207 qfy-column-inner vc_span_class vc_span4  text-default small-screen-default"  data-dw="1/3" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>
                                                                {{--完成案例渲染--}}














                                                            <div class="column_containter" style="z-index:3;position:relative;" ><div style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;"  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="qfy_btn_shbe8"  class="qfy-element vc_btn3-container  wpb_animate_when_almost_visible wpb_appear vc_btn3-center"><a onmouseleave="this.style.borderColor='#000000'; this.style.backgroundColor='#000000'; this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#666666'; this.style.borderColor='#666666'; this.style.color='#ffffff';" style="font-family:trebuchet ms; font-size:11px; padding-left:50px;padding-right:50px; padding-top:13px;padding-bottom:13px; border-width:1px; border-color:#000000; background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-qfy-custom vc_btn3-block" href="javascript:void(0);" target="">MORE INFO</a></div>
                                                            </div></div></div><style>.qfy-column-33-58a2eb945e0d8910207 > .column_inner:hover{}.qfy-column-33-58a2eb945e0d8910207 > .column_inner:hover >.background-media{}.qfy-column-33-58a2eb945e0d8910207 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-33-58a2eb945e0d8910207 > .column_inner {padding-left:4px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-33-58a2eb945e0d8910207 {};}@media only screen and (max-width: 768px){.qfy-column-33-58a2eb945e0d8910207 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-33-58a2eb945e0d8910207 {};}</style><div class="wf-mobile-hidden" style="clear:both;"></div>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-13-58a2eb945d7a3377964{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-13-58a2eb945d7a3377964 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-13-58a2eb945d7a3377964{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:21px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-15-58a2eb945e56c695287 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_ibee7"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-34-58a2eb945e6fa178318 qfy-column-inner vc_span_class vc_span1_5  text-default small-screen-undefined"  data-dw="1/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-41454 wpb_text_column wpb_content_element  mobile_fontsize21" style="position: relative;;;line-height:2em;;background-repeat: no-repeat;;padding-top:0px;padding-bottom:0px;">
                                                                    <div class="wpb_wrapper">
                                                                        <p><span style="color:#696969;"><span style="letter-spacing: 1px;"><span style="font-family: 微軟正黑體;"><span style="font-size: 28px;">我们的团队</span></span></span></span></p>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-34-58a2eb945e6fa178318 > .column_inner:hover{}.qfy-column-34-58a2eb945e6fa178318 > .column_inner:hover >.background-media{}.qfy-column-34-58a2eb945e6fa178318 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-34-58a2eb945e6fa178318 > .column_inner {padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-34-58a2eb945e6fa178318 {width:16.52542372881356%;};}@media only screen and (max-width: 768px){.qfy-column-34-58a2eb945e6fa178318 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-34-58a2eb945e6fa178318 {width:16.52542372881356%;};}</style><div   class="qfy-column-35-58a2eb945eab965694 qfy-column-inner vc_span_class vc_span10_5  text-default small-screen-default"  data-dw="7/8" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" >
                                                                <div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-53039 wpb_text_column wpb_content_element  mobile_fontsize" style="position: relative;;;line-height:1.5em;;background-repeat: no-repeat;;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div><span style="color:#808080;"><span style="letter-spacing: 1px;"><span style="font-size: 13px;">我们的团队已累计为10000位客户提供优质的维修服务</span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div> </div></div></div><style>.qfy-column-35-58a2eb945eab965694 > .column_inner:hover{}.qfy-column-35-58a2eb945eab965694 > .column_inner:hover >.background-media{}.qfy-column-35-58a2eb945eab965694 > .column_inner:hover >.background-overlay{}@media only screen and (min-width: 768px){.qfy-column-35-58a2eb945eab965694 > .column_inner {padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:0px;}.wpb_row .vc_span_class.qfy-column-35-58a2eb945eab965694 {width:83.4%;};}@media only screen and (max-width: 768px){.qfy-column-35-58a2eb945eab965694 > .column_inner{margin:0px auto 0px !important;padding-left:0px;padding-right:0px;padding-top:8px;padding-bottom:px;}.display_entire .wpb_row .vc_span_class.qfy-column-35-58a2eb945eab965694 {width:83.4%;};}</style>        </div>
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-15-58a2eb945e56c695287{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:60px;}section.section.qfy-row-15-58a2eb945e56c695287 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-15-58a2eb945e56c695287{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:31px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-16-58a2eb945ef1b166861 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_23624"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: transparent;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-36-58a2eb945f0a9954443 qfy-column-inner vc_span_class vc_span2  text-default small-screen-undefined"  data-dw="1/6" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div>
                                                            <div class="column_containter" style="z-index:3;position:relative;" >
                                                                <style>@media only screen and (max-width: 768px) {.single_image_text-58a2eb945f8dc113 .head{font-size: 16px !important;}.single_image_text-58a2eb945f8dc113 .content{font-size: 16px !important;}}</style>
                                                                <div style="width:100%;padding:0px;margin:0px;height:100%;clear:both;position:relative;background-repeat: no-repeat;"  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"     m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element bitImageControlDiv"><a class="bitImageAhover  " >
                                                                        <div class="bitImageParentDiv wpb_single_image wpb_content_element vc_align_center">
                                                                            <div class="wpb_wrapper"><span></span><img style="width:200px;height:200px;"     width="400" height="550" src="team/jingfa.jpg" class="front_image  attachment-full" alt="团队06" title="" description="" data-title="团队06" src-img="" style='' /></div>
                                                                        </div>
                                                                </div> </a>
                                                                <div  m-padding="10px 0px 10px 0px"  p-padding="10px 0px 10px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-84057 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: #f4f4f4;background-repeat: no-repeat;;padding-top:10px;padding-bottom:10px;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div style="text-align: center;"><span style="color:#696969;"><span style="font-size: 15px;">&nbsp;</span></span><span style="letter-spacing:1px;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><span style="font-size: 18px;">靖发</span></span></span><span style="color: rgb(105, 105, 105);"><span style="font-size: 15px;"> <span style="font-size: 13px;">优秀设计师</span></span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div  m-padding="6px 0px 6px 0px"  p-padding="6px 0px 6px 0px" css_animation_delay="0" qfyuuid="0"  class="qfy-element qfy-text qfy-text-73890 wpb_text_column wpb_content_element " style="position: relative;;;line-height:1.5em;;background-color: #f4f4f4;background-repeat: no-repeat;;margin-top:2px;padding-top:6px;padding-bottom:6px;">
                                                                    <div class="wpb_wrapper">
                                                                        <div style="position: relative;">
                                                                            <div style="text-align: center;"><span style="font-size:12px;"><span style="letter-spacing: 1px;"><span style="color: rgb(105, 105, 105);">经验：</span><span style="color:#3EC9AD;">8年</span><span style="color: rgb(105, 105, 105);"> 代表作：3件</span></span></span></div>
                                                                        </div>

                                                                    </div>
                                                                </div> 
                                            </div>
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-16-58a2eb945ef1b166861{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:34px;margin-top:0px;}section.section.qfy-row-16-58a2eb945ef1b166861 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-16-58a2eb945ef1b166861{padding-left:15px;padding-right:15px;padding-top:0px;padding-bottom:34px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-17-58a2eb9464d8a295237 section     no  section-text-no-shadow section-inner-no-shadow section-normal mobileHidden"  id="bit_svxbi"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #3ec9ad;"></div>


                                        </section><section  data-fixheight="" class="qfy-row-18-58a2eb9465745245537 section     no  section-text-no-shadow section-inner-no-shadow section-normal mobileHidden"  id="bit_i69gl"  style='margin-bottom:0px;border-radius:0px;color:#666666;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #ffffff;"></div>


                                        </section><section  data-fixheight="" class="qfy-row-19-58a2eb9469b3a988777 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_lo5ri"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #3ec9ad;"></div>

                                           











                                        <!--底部-->







                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-19-58a2eb9469b3a988777{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:36px;}section.section.qfy-row-19-58a2eb9469b3a988777 > .container{max-width:1024px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-19-58a2eb9469b3a988777{padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:46px;margin-top:0px;}}
                                            </style>
                                        </section><section  data-fixheight="" class="qfy-row-20-58a2eb946a58e733328 section     no  section-text-no-shadow section-inner-no-shadow section-normal"  id="bit_1w3lc"  style='margin-bottom:0px;border-radius:0px;color:#000000;' >
                                            <div class="background-overlay grid-overlay-0 " style="background-color: #f7f7f7;"></div>

                                            <div class="container">
                                                <div class="row wpb_row">
                                                    <div   class="qfy-column-49-58a2eb946a739946491 qfy-column-inner  vc_span12  text-default small-screen-default fullrow"  data-dw="1/1" data-fixheight="" ><div style=";position:relative;;" class="column_inner " ><div class=" background-overlay grid-overlay-" style="background-color:transparent;"></div><div class="column_containter" style="z-index:3;position:relative;" ><style>
                                                                    @media screen and (max-width: 760px) {
                                                                        .g2345 .wpb_images_lib_isotope .gimg{width:49.75%;}
                                                                    }
                                                                    @media screen and (min-width: 760px) {
                                                                        .g2345 .wpb_images_lib_isotope .gimg{width:24.875%;}
                                                                    }
                                                                </style>
                                                                <style>@media only screen and (max-width: 760px) {.single_image_text-58a2eb946a9cd967 .head{font-size: 16px !important;}.single_image_text-58a2eb946a9cd967 .content{font-size: 16px !important;}}</style><div  m-padding="0px 0px 0px 0px"  p-padding="0px 0px 0px 0px" css_animation_delay="0" qfyuuid="0"   class="qfy-element wpb_images_lib wpb_content_element vc_clearfix" style="">
                                                                    <div class="wpb_wrapper g2345">


                                                                      
                                            <style>
                                                @media only screen and (min-width: 768px){
                                                    section.section.qfy-row-20-58a2eb946a58e733328{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;margin-top:0px;}section.section.qfy-row-20-58a2eb946a58e733328 > .container{max-width:1100px;margin:0 auto;}}@media only screen and (max-width: 768px){
                                                    .bit-html section.section.qfy-row-20-58a2eb946a58e733328{padding-left:27px;padding-right:0px;padding-top:0px;padding-bottom:23px;margin-top:0px;}}
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
        $('#button1').click(function(){
            location.href= "order"
        });
        $('#button2').click(function(){
            location.href= "order"
        });
        $('#button3').click(function(){
            location.href= "order"
        });


        //登录
        $("#button").click(function () {
            var phone=$("#iphorm_65_1_58a2eb943e01c").val();
            var pwd=$("#iphorm_65_2_58a2eb943e01c").val();
            if(phone!=''&&pwd!=''){
                $.ajax({
                    type:"get",
                    url: "manlogin",
                    data: {phone:phone,pwd:pwd},
                    success: function(msg){
                        //                        alert(msg);
                        if(msg==0){
                            location.href='man'
                        }else {
                            location.href='login'
                        }
                    }
                });
            }
        })



        //退出
        $("#quit").click(function(){
            var url = "quit";
            $.ajax({
                url : url,
                success:function(msg)
                {
                    if(msg == 1)
                    {
                        {
                            location.href = "home";
                        }
                    }
                }
            })
        })
    </script>

@endsection
