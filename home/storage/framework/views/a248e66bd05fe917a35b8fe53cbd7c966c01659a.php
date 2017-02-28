<div class="navigation-holder">
    <div>
        <nav style="0" id="navigation" class="wf-wrap" bitDataAction="site_menu_container" bitDataLocation="primary">
            <ul id="main-nav" data-st="0" data-sp="0" data-fh="" data-mw="" data-lh="" class="mainmenu fancy-rollovers wf-mobile-hidden bit-menu-default" data-bit-menu=bit-menu-default data-bit-float-menu=underline-hover>
                <?php foreach($nav as $val): ?>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2160 current_page_item bit-menu-post-id-2160 menu-item-2319 first"><a href="<?php echo e($val->header_table); ?>"><span><?php echo e($val->header_name); ?></span></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="#show-menu" data-padding='' data-top='8' data-right='8' rel="nofollow" id="mobile-menu" style="display:none;" class="glyphicon glyphicon-icon-align-justify dropTopStyle center">
                <span class="menu-open  phone-text">首页</span>
                <span class="menu-close">关闭</span>
                <span class="menu-back">返回上一级</span>
                <span class="wf-phone-visible">&nbsp;</span>
            </a>
        </nav>

        <div style="display:none;" id="main-nav-slide">
            <div class="main-nav-slide-inner" data-class="">
                <div class="floatmenu-bar-right bit_widget_more" bitdatamarker="bitHeader-3" bitdataaction="site_fix_container" bitdatacolor="white">
                </div>
            </div>
        </div>
    </div>
</div>