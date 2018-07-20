<?php
include 'conn.php';

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
    <!--[if IE 7]>         
    <html class="no-js lt-ie9 lt-ie8">
        <![endif]-->
        <!--[if IE 8]>         
        <html class="no-js lt-ie9">
            <![endif]-->
            <!--[if gt IE 8]><!--> 
<html class="no-js" lang="en-GB">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Applications | MM Academy</title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!--<link rel="pingback" href="http://reddam.house/xmlrpc.php" />-->
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel='dns-prefetch' href='//s0.wp.com' />
        <link rel='dns-prefetch' href='//s.gravatar.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
<!--        <link rel="alternate" type="application/rss+xml" title="MM Academy &raquo; Feed" href="http://reddam.house/feed/" />
        <link rel="alternate" type="application/rss+xml" title="MM Academy &raquo; Comments Feed" href="http://reddam.house/comments/feed/" />
        <link rel="alternate" type="application/rss+xml" title="MM Academy &raquo; applications Comments Feed" href="http://reddam.house/applications/feed/" />-->
      
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
            }
            img.logo{
            max-width: 100% !important;
            height: auto !important;
            margin-top: -227px !important;
            }
            label.error{
                color: red !important;
            }
            .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
                font-size: inherit;
                font-family: inherit;
                padding: 5px 4px;
                letter-spacing: normal;
                border-bottom: 2px solid #A39160;
            }
            textarea{
                    border: 2px solid #A39160 !important;
            }
            .gform_wrapper .gsection .gfield_label, .gform_wrapper h2.gsection_title, .gform_wrapper h3.gform_title {
                font-weight: 700;
                font-size: 1.25em;
                color: #23375E;
                font-family: Open Sans,'Helvetica Neue',Arial,sans-serif;
            }
            #Middle, .full-width #ContentWrapper{
                background-color: #F9F9F9 !important;
            }
            .gform_wrapper .top_label li.gfield.gf_left_half, .gform_wrapper .top_label li.gfield.gf_right_half {
                display: -moz-inline-stack;
                display: inline-block;
                vertical-align: top;
                width: 100% !important;
            }
            #parrent_1, #parrent_2{
                width: 47%;
            }
        </style>
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            .tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
        </style>
        <link rel='stylesheet' id='wpgform-css-css'  href='css/wpgform.css' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-styles-css'  href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-skin-css'  href='css/style-skin-4.css' type='text/css' media='all' />
        <link rel='stylesheet' id='fonts-css'  href='css/fonts.css?ver=4.7.4' type='text/css' media='all' />
        <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
        <!--[if lt IE 9]>
        <link rel='stylesheet' id='theme-ie-css'  href='http://reddam.house/wp-content/themes/parallelus-vellum/assets/css/ie.css?ver=4.7.4' type='text/css' media='all' />
        <![endif]-->
        <link rel='stylesheet' id='gforms_reset_css-css'  href='css/formreset.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_datepicker_css-css'  href='css/jquery-ui.css' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_formsmain_css-css'  href='css/formsmain.min.css?ver=2.2.2' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_ready_class_css-css'  href='css/readyclass.min.css?ver=2.2.2' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_browsers_css-css'  href='css/browsers.min.css?ver=2.2.2' type='text/css' media='all' />
        <!--<link rel='stylesheet' id='jetpack_css-css'  href='http://reddam.house/wp-content/plugins/jetpack/css/jetpack.css?ver=4.9' type='text/css' media='all' />-->
        <script type='text/javascript' src='../js/jquery.js'></script>
        <script type='text/javascript' src='http://reddam.house/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript' src='http://reddam.house/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.4.1'></script>
        <script type='text/javascript' src='http://reddam.house/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.4.1'></script>
        <script type='text/javascript' src='http://reddam.house/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='http://reddam.house/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='http://reddam.house/wp-includes/js/plupload/plupload.full.min.js?ver=2.1.8'></script>
        <script type='text/javascript' src='http://reddam.house/wp-content/plugins/gravityforms/js/chosen.jquery.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='../js/jquery.validate.min.js'></script>
        <script type='text/javascript' src='../js/additional-methods.js'></script>
        <script type='text/javascript' src='js/jquery-ui.js'></script>
        <script type='text/javascript' src='scripts.js'></script>
        <link rel='https://api.w.org/' href='http://reddam.house/wp-json/' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://reddam.house/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://reddam.house/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.7.4" />
        <link rel="canonical" href="http://reddam.house/applications/" />
        <link rel='shortlink' href='http://wp.me/P66QGT-8' />
        <link rel="alternate" type="application/json+oembed" href="http://reddam.house/wp-json/oembed/1.0/embed?url=http%3A%2F%2Freddams.house%2Fapplications%2F" />
        <link rel="alternate" type="text/xml+oembed" href="http://reddam.house/wp-json/oembed/1.0/embed?url=http%3A%2F%2Freddams.house%2Fapplications%2F&#038;format=xml" />
        <link rel='dns-prefetch' href='//v0.wordpress.com'>
        <style type='text/css'>img#wpstats{display:none}</style>
        <style id="ubermenu-custom-generated-css">
            /* Status: Loaded from Transient */
        </style>
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="http://reddam.house/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
        <![endif]--><!--[if IE  8]>
        <link rel="stylesheet" type="text/css" href="http://reddam.house/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
        <![endif]-->
        <meta name="generator" content="Powered by Slider Revolution 5.2.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style type="text/css">.accent-primary, button.vc_btn3-color-accent-primary, article.format-quote a:hover .post-header, article.format-link a:hover .post-header, .overlay-effect-slide .inner-overlay i, .overlay-effect-accent .inner-overlay, .overlay-effect-zoom-accent .inner-overlay, .jp-play-bar, .jp-volume-bar-value, .impactBtn, .impactBtn:hover, .impactBtn:active, body a.impactBtn, body a.impactBtn:link, body a.impactBtn:visited, .wpb_call_to_action .wpb_button.wpb_accent-primary, .wpb_call_to_action .wpb_button.wpb_accent-primary:hover, .wpb_call_to_action .wpb_button.wpb_accent-primary:active, .vc_cta3-actions a.vc_btn3-color-accent-primary, .vc_progress_bar .vc_single_bar.accent-primary .vc_bar { background-color: #003a91; }.accent-primary-border, .inner-overlay i, [class*="image-border-"] img, img[class*="image-border-"], .wpb_button.wpb_accent-primary, .vc_btn3-container button.vc_btn3-color-accent-primary, .wpb_button.wpb_accent-primary:active, .vc_btn3-container button.vc_btn3-color-accent-primary:active { border-color: #003a91; }div.wpb_tour .ui-tabs .ui-tabs-nav li.ui-tabs-active a, div.wpb_tour .ui-tabs .ui-tabs-nav li.ui-tabs-active a:hover, .ubermenu ul.ubermenu-nav > li.ubermenu-item.ubermenu-current-menu-item > .ubermenu-target  { border-bottom-color: #003a91; }.accent-primary-color, h1 em, h2 em, h3 em, h4 em, h5 em, h6 em, h2.wpb_call_text em, .iconBox.icon i.fa, div.wpb_wrapper h4.wpb_toggle:hover:before, div.wpb_accordion .wpb_accordion_wrapper .ui-accordion-header:hover .ui-icon, .inner-overlay i.fa, .wpb_button.wpb_accent-primary, .vc_btn3-container button.vc_btn3-color-accent-primary, .wpb_button.wpb_accent-primary:active, .vc_btn3-container button.vc_btn3-color-accent-primary:active, .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price { color: #003a91; -webkit-text-stroke-color: #003a91; }body, body.boxed { ; }.masthead-container > .top-wrapper:before { opacity: 0; ; }#MastheadSidebar-2 .widget-area:before { opacity: 0; ; }#TopContent_1, #TopContent_2 { background-color: #0769bf; background-image: url(none); background-position: left top; background-repeat: no-repeat;  }@media screen and (min-width: 768px) {
            /* Custom Mega Menu Backgrounds - Home Pages */
            .mm-home-custom-bg ul.sub-menu-1 { padding: 0px 65px 95px 0px !important; width: 540px !important; background-image: url('http://para.llel.us/themes/vellum-wp/wp-content/uploads/2014/02/megamenu-home-pages-bg.png') !important; background-repeat: no-repeat !important; background-position: 100% 100% !important; }
            /* Features */
            .mm-features-custom-bg ul.sub-menu-1 { padding: 0px 65px 85px 0px !important; width: 540px !important; background-image: url('http://para.llel.us/themes/vellum-wp/wp-content/uploads/2014/02/megamenu-features-bg.png') !important; background-repeat: no-repeat !important; background-position: 100% 100% !important; }
            /* Content */
            .mm-content-custom-bg ul.sub-menu-1 { padding: 0px 65px 165px 0px !important; width: 540px !important; background-image: url('http://para.llel.us/themes/vellum-wp/wp-content/uploads/2014/02/megamenu-content-bg.png') !important; background-repeat: no-repeat !important; background-position: 100% 100% !important; }
            .title-bottom-attached {font-size: 90px !important;}
            #masthead, .boxed-left .masthead-vertical-bg, .full-width-left .masthead-vertical-bg, .boxed-right .masthead-vertical-bg, .full-width-right .masthead-vertical-bg {
            display:none;
            }
            #MainNav {
            display:none;
            }
            #masthead {display: none !important;}
            #page, .site-header, .format-quote .post-header .sub-title, .format-quote .post-header .post-symbol i, .comments-area article header:before, div.vc_text_separator div, .top-content-area {
            background-color: transparent;
            margin-top: -70px;
            }
        </style>
        <script type="text/javascript">
            setTimeout( function() { if ( jQuery('#FadeInContent').is(':visible') ) { jQuery('#FadeInContent').css('display','none'); }}, 1500);var dock_topBanner=false;var theme_smoothScroll="custom";
        </script> 
        <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1465754859132{padding-top: 340px !important;background-color: #475675 !important;}
        </style>
        <noscript>
            <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
        </noscript>
    </head>
    <body class="page-template-default page page-id-8 layout-full-width full-width overlay-effect-zoom-dark style-skin-4 context-page single-author wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
        <div id="FadeInContent"></div>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="masthead-vertical-bg"></div>
                <div class="masthead-container">
                    <div class="top-wrapper">
                        <div class="masthead-row logo-wrapper">
                            <div class="inner-wrapper">
                                <a href="/" title="MM Academy" class="logo" rel="home"></a>
                            </div>
                        </div>
                        <!-- .logo-wrapper -->
                    </div>
                    <!-- .top-wrapper -->
                    <div id="MainNav" class="masthead-row noSearch">
                        <div class="inner-wrapper clearfix"></div>
                        <div class="clear"></div>
                    </div>
                    <!-- / #MainNav -->
                    <div class="bottom-wrapper"></div>
                    <!-- / .bottom-wrapper -->
                    <div class="clear"></div>
                </div>
                <!-- .masthead-container -->
            </header>
            <!-- #masthead -->
            <div id="ContentWrapper">
                <div id="Top"></div>
                <!-- #Top -->
                <div id="Middle">
                    <div class="main-content">
                        <div id="layout_full-width" class="grid-wrapper">
                            <section class="grid-section-1">
                                <div class="grid-row row-fluid">
                                    <div class="grid-column-1 span12">
                                        <div class="content-element-1">
                                            <div id="primary" class="site-content">
                                                <div id="content" role="main">
                                                    <div id="post-8" class="post-8 page type-page status-publish hentry">
                                                        <div class="row-fluid">
                                                            <div class="entry-content">
                                                                <section class="vc_section_wrapper has_bg_color">
                                                                    <div class="bg-layer" style="background-color: #475675 ;height: 430px !important" data-inertia="0.2"></div>
                                                                    <div class="wpb_row  vc_custom_1465754859132 row-fluid"style="background: none !important; background-image: none !important; background-color: inherit !important;padding-top: 340px ;">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="vc_empty_space"  style="height: 50px" >
                                                                                        <span class="vc_empty_space_inner"></span>
                                                                                    </div>
                                                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                                        <figure class="wpb_wrapper vc_figure">
                                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                                <img class="vc_single_image-img logo" src="../images/basic/logo-mm-full-new.png"  alt="MM badge" title="MM badge" />
                                                                                            </div>
                                                                                        </figure>
                                                                                    </div>
                                                                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                        <div class="wpb_wrapper">
                                                                                            <h3 class="title-bottom-attached" style="font-size:45px !important">APPLICATION FOR ADMISSION</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <section class="vc_section_wrapper">
                                                                    <div class="wpb_row  row-fluid">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_2' style=''>
                                                                                        <a id='gf_2' class='gform_anchor' ></a>
                                                                                        <form method='post' enctype='multipart/form-data' id='gform_22'  action='/applications/process_two.php'>
                                                                                            <div class='gform_body'>
                                                                                                <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_above'>
                                                                                                    <li id='field_2_5' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>APPLICANT&#039;S INFORMATION</h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_3' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_3' >Surname:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='applicants_surname' id='input_2_3' type='text' value='' class='medium'  tabindex='9' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_4' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_4' >First Names:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='applicants_firstnames' id='input_2_4' type='text' value='' class='medium'  tabindex='10' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_6' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_6' >Preferred Name:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='applicants_preferred_name' id='input_2_6' type='text' value='' class='medium'  tabindex='11' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_7' class='gfield gf_list_2col gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >Gender:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_radio'>
                                                                                                            <ul class='gfield_radio' id='input_2_7'>
                                                                                                                <li class='gchoice_2_7_0'><input name='applicants_gender' type='radio' value='Female'  id='choice_2_7_0' tabindex='12'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_7_0' id='label_2_7_0'>Female</label></li>
                                                                                                                <li class='gchoice_2_7_1'><input name='applicants_gender' type='radio' value='Male'  id='choice_2_7_1' tabindex='13'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_7_1' id='label_2_7_1'>Male</label></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_8' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_8' >Date of Birth:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_date'>
                                                                                                            <input name='applicants_dob' id='input_2_8' type='text' value='' class='datepicker medium dmy datepicker_with_icon' tabindex='14'  />
                                                                                                        </div>
                                                                                                        <input type='hidden' id='gforms_calendar_icon_input_2_8' class='gform_hidden' value='http://reddam.house/wp-content/plugins/gravityforms/images/calendar.png'/>
                                                                                                    </li>
                                                                                                    <li id='field_2_9' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_9' >Age:</label>
                                                                                                        <div class='ginput_container ginput_container_number'><input name='applicants_age' id='input_2_9' type='text'    value='' class='medium' tabindex='15' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'     aria-invalid="false"/></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_10' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_10' >Citizenship:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='applicants_citizenship' id='input_2_10' type='text' value='' class='medium'  tabindex='16' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_11' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_11' >ID or Passport No:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='applicants_id_passport' id='input_2_11' type='text' value='' class='medium'  tabindex='17' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_13' class='gfield gfield_contains_required field_sublabel_above field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label gfield_label_before_complex' for='input_2_13_1' >Permanent Residential Address of Applicant:<span class='gfield_required'>*</span></label>    
                                                                                                        <div class='ginput_complex ginput_container has_street has_street2 has_city has_zip has_country ginput_container_address gfield_trigger_change' id='input_2_13' >
                                                                                                            <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                <label for='input_2_13_6' id='input_2_13_6_label' >Residence Type</label>
                                                                                                                <input type="checkbox" name='applicants_residence_type' data-id='applicants_residence_type' value="estate" id='applicants_residence_type' tabindex='' >
                                                                                                                    Complex / Estate
                                                                                                            </span>
                                                                                                            <span class='ginput_left applicants_residence_type' id='input_2_13_1_container' style='display:none;' >
                                                                                                            <label for='applicants_estate_name' id='input_2_13_1_label' >Unit/House Number</label>
                                                                                                            <input type='text' name='applicants_estate_number' id='applicants_estate_number' value='' tabindex='19'  />
                                                                                                            </span>
                                                                                                            <span class='ginput_right applicants_residence_type' id='input_2_13_1_container' style='display:none;float: right;' >
                                                                                                            <label for='applicants_estate_name' id='input_2_13_1_label' >Complex/Estate Name</label>
                                                                                                            <input type='text' name='applicants_estate_name' id='applicants_estate_name' value='' tabindex='19'  />
                                                                                                            </span>
                                                                                                            
                                                                                                            <span class='ginput_full address_line_1' id='input_2_64_1_container' >
                                                                                                            <label for='input_2_64_1' id='input_2_64_1_label'>House Number</label>
                                                                                                            <input type='text' name='applicants_address_house_number' id='input_2_64_1' value='' tabindex='62'  />
                                                                                                            </span>
                                                                                                            <span class='ginput_full address_line_1' id='input_2_13_1_container' >
                                                                                                            <label for='applicants_street_address' id='input_2_13_1_label' >Street Address</label>
                                                                                                            <input type='text' name='applicants_address_1' id='input_2_13_1' value='' tabindex='19'  />
                                                                                                            </span>
                                                                                                            <span class='ginput_full address_line_2' id='input_2_13_2_container' >
                                                                                                            <label for='input_2_13_2' id='input_2_13_2_label' >Suburb</label>
                                                                                                            <input type='text' name='applicants_address_2' id='input_2_13_2' value='' tabindex='20'  />
                                                                                                            </span><span class='ginput_left address_city' id='input_2_13_3_container' >
                                                                                                            <label for='input_2_13_3' id='input_2_13_3_label' >City</label>
                                                                                                            <input type='text' name='applicants_address_city' id='input_2_13_3' value='' tabindex='21'  />
                                                                                                            </span><input type='hidden' class='gform_hidden' name='input_13.4' id='input_2_13_4' value=''/><span class='ginput_right address_zip' id='input_2_13_5_container' >
                                                                                                            <label for='input_2_13_5' id='input_2_13_5_label' >ZIP / Postal Code</label>
                                                                                                            <input type='text' name='applicants_address_postal' id='input_2_13_5' value='' tabindex='22'  />
                                                                                                            </span>
                                                                                                            <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                <label for='input_2_13_6' id='input_2_13_6_label' >Country</label>
                                                                                                                <select name='applicants_address_country' id='input_2_13_6' tabindex='23' >
                                                                                                                    <option value='' ></option>
                                                                                                                    <option value='Afghanistan' >Afghanistan</option>
                                                                                                                    <option value='Albania' >Albania</option>
                                                                                                                    <option value='Algeria' >Algeria</option>
                                                                                                                    <option value='American Samoa' >American Samoa</option>
                                                                                                                    <option value='Andorra' >Andorra</option>
                                                                                                                    <option value='Angola' >Angola</option>
                                                                                                                    <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                                                                                                                    <option value='Argentina' >Argentina</option>
                                                                                                                    <option value='Armenia' >Armenia</option>
                                                                                                                    <option value='Australia' >Australia</option>
                                                                                                                    <option value='Austria' >Austria</option>
                                                                                                                    <option value='Azerbaijan' >Azerbaijan</option>
                                                                                                                    <option value='Bahamas' >Bahamas</option>
                                                                                                                    <option value='Bahrain' >Bahrain</option>
                                                                                                                    <option value='Bangladesh' >Bangladesh</option>
                                                                                                                    <option value='Barbados' >Barbados</option>
                                                                                                                    <option value='Belarus' >Belarus</option>
                                                                                                                    <option value='Belgium' >Belgium</option>
                                                                                                                    <option value='Belize' >Belize</option>
                                                                                                                    <option value='Benin' >Benin</option>
                                                                                                                    <option value='Bermuda' >Bermuda</option>
                                                                                                                    <option value='Bhutan' >Bhutan</option>
                                                                                                                    <option value='Bolivia' >Bolivia</option>
                                                                                                                    <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                                                                                                                    <option value='Botswana' >Botswana</option>
                                                                                                                    <option value='Brazil' >Brazil</option>
                                                                                                                    <option value='Brunei' >Brunei</option>
                                                                                                                    <option value='Bulgaria' >Bulgaria</option>
                                                                                                                    <option value='Burkina Faso' >Burkina Faso</option>
                                                                                                                    <option value='Burundi' >Burundi</option>
                                                                                                                    <option value='Cambodia' >Cambodia</option>
                                                                                                                    <option value='Cameroon' >Cameroon</option>
                                                                                                                    <option value='Canada' >Canada</option>
                                                                                                                    <option value='Cape Verde' >Cape Verde</option>
                                                                                                                    <option value='Cayman Islands' >Cayman Islands</option>
                                                                                                                    <option value='Central African Republic' >Central African Republic</option>
                                                                                                                    <option value='Chad' >Chad</option>
                                                                                                                    <option value='Chile' >Chile</option>
                                                                                                                    <option value='China' >China</option>
                                                                                                                    <option value='Colombia' >Colombia</option>
                                                                                                                    <option value='Comoros' >Comoros</option>
                                                                                                                    <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                                                                                                                    <option value='Congo, Republic of the' >Congo, Republic of the</option>
                                                                                                                    <option value='Costa Rica' >Costa Rica</option>
                                                                                                                    <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
                                                                                                                    <option value='Croatia' >Croatia</option>
                                                                                                                    <option value='Cuba' >Cuba</option>
                                                                                                                    <option value='Curaçao' >Curaçao</option>
                                                                                                                    <option value='Cyprus' >Cyprus</option>
                                                                                                                    <option value='Czech Republic' >Czech Republic</option>
                                                                                                                    <option value='Denmark' >Denmark</option>
                                                                                                                    <option value='Djibouti' >Djibouti</option>
                                                                                                                    <option value='Dominica' >Dominica</option>
                                                                                                                    <option value='Dominican Republic' >Dominican Republic</option>
                                                                                                                    <option value='East Timor' >East Timor</option>
                                                                                                                    <option value='Ecuador' >Ecuador</option>
                                                                                                                    <option value='Egypt' >Egypt</option>
                                                                                                                    <option value='El Salvador' >El Salvador</option>
                                                                                                                    <option value='Equatorial Guinea' >Equatorial Guinea</option>
                                                                                                                    <option value='Eritrea' >Eritrea</option>
                                                                                                                    <option value='Estonia' >Estonia</option>
                                                                                                                    <option value='Ethiopia' >Ethiopia</option>
                                                                                                                    <option value='Faroe Islands' >Faroe Islands</option>
                                                                                                                    <option value='Fiji' >Fiji</option>
                                                                                                                    <option value='Finland' >Finland</option>
                                                                                                                    <option value='France' >France</option>
                                                                                                                    <option value='French Polynesia' >French Polynesia</option>
                                                                                                                    <option value='Gabon' >Gabon</option>
                                                                                                                    <option value='Gambia' >Gambia</option>
                                                                                                                    <option value='Georgia' >Georgia</option>
                                                                                                                    <option value='Germany' >Germany</option>
                                                                                                                    <option value='Ghana' >Ghana</option>
                                                                                                                    <option value='Greece' >Greece</option>
                                                                                                                    <option value='Greenland' >Greenland</option>
                                                                                                                    <option value='Grenada' >Grenada</option>
                                                                                                                    <option value='Guam' >Guam</option>
                                                                                                                    <option value='Guatemala' >Guatemala</option>
                                                                                                                    <option value='Guinea' >Guinea</option>
                                                                                                                    <option value='Guinea-Bissau' >Guinea-Bissau</option>
                                                                                                                    <option value='Guyana' >Guyana</option>
                                                                                                                    <option value='Haiti' >Haiti</option>
                                                                                                                    <option value='Honduras' >Honduras</option>
                                                                                                                    <option value='Hong Kong' >Hong Kong</option>
                                                                                                                    <option value='Hungary' >Hungary</option>
                                                                                                                    <option value='Iceland' >Iceland</option>
                                                                                                                    <option value='India' >India</option>
                                                                                                                    <option value='Indonesia' >Indonesia</option>
                                                                                                                    <option value='Iran' >Iran</option>
                                                                                                                    <option value='Iraq' >Iraq</option>
                                                                                                                    <option value='Ireland' >Ireland</option>
                                                                                                                    <option value='Israel' >Israel</option>
                                                                                                                    <option value='Italy' >Italy</option>
                                                                                                                    <option value='Jamaica' >Jamaica</option>
                                                                                                                    <option value='Japan' >Japan</option>
                                                                                                                    <option value='Jordan' >Jordan</option>
                                                                                                                    <option value='Kazakhstan' >Kazakhstan</option>
                                                                                                                    <option value='Kenya' >Kenya</option>
                                                                                                                    <option value='Kiribati' >Kiribati</option>
                                                                                                                    <option value='North Korea' >North Korea</option>
                                                                                                                    <option value='South Korea' >South Korea</option>
                                                                                                                    <option value='Kosovo' >Kosovo</option>
                                                                                                                    <option value='Kuwait' >Kuwait</option>
                                                                                                                    <option value='Kyrgyzstan' >Kyrgyzstan</option>
                                                                                                                    <option value='Laos' >Laos</option>
                                                                                                                    <option value='Latvia' >Latvia</option>
                                                                                                                    <option value='Lebanon' >Lebanon</option>
                                                                                                                    <option value='Lesotho' >Lesotho</option>
                                                                                                                    <option value='Liberia' >Liberia</option>
                                                                                                                    <option value='Libya' >Libya</option>
                                                                                                                    <option value='Liechtenstein' >Liechtenstein</option>
                                                                                                                    <option value='Lithuania' >Lithuania</option>
                                                                                                                    <option value='Luxembourg' >Luxembourg</option>
                                                                                                                    <option value='Macedonia' >Macedonia</option>
                                                                                                                    <option value='Madagascar' >Madagascar</option>
                                                                                                                    <option value='Malawi' >Malawi</option>
                                                                                                                    <option value='Malaysia' >Malaysia</option>
                                                                                                                    <option value='Maldives' >Maldives</option>
                                                                                                                    <option value='Mali' >Mali</option>
                                                                                                                    <option value='Malta' >Malta</option>
                                                                                                                    <option value='Marshall Islands' >Marshall Islands</option>
                                                                                                                    <option value='Mauritania' >Mauritania</option>
                                                                                                                    <option value='Mauritius' >Mauritius</option>
                                                                                                                    <option value='Mexico' >Mexico</option>
                                                                                                                    <option value='Micronesia' >Micronesia</option>
                                                                                                                    <option value='Moldova' >Moldova</option>
                                                                                                                    <option value='Monaco' >Monaco</option>
                                                                                                                    <option value='Mongolia' >Mongolia</option>
                                                                                                                    <option value='Montenegro' >Montenegro</option>
                                                                                                                    <option value='Morocco' >Morocco</option>
                                                                                                                    <option value='Mozambique' >Mozambique</option>
                                                                                                                    <option value='Myanmar' >Myanmar</option>
                                                                                                                    <option value='Namibia' >Namibia</option>
                                                                                                                    <option value='Nauru' >Nauru</option>
                                                                                                                    <option value='Nepal' >Nepal</option>
                                                                                                                    <option value='Netherlands' >Netherlands</option>
                                                                                                                    <option value='New Zealand' >New Zealand</option>
                                                                                                                    <option value='Nicaragua' >Nicaragua</option>
                                                                                                                    <option value='Niger' >Niger</option>
                                                                                                                    <option value='Nigeria' >Nigeria</option>
                                                                                                                    <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                                                                                                                    <option value='Norway' >Norway</option>
                                                                                                                    <option value='Oman' >Oman</option>
                                                                                                                    <option value='Pakistan' >Pakistan</option>
                                                                                                                    <option value='Palau' >Palau</option>
                                                                                                                    <option value='Palestine, State of' >Palestine, State of</option>
                                                                                                                    <option value='Panama' >Panama</option>
                                                                                                                    <option value='Papua New Guinea' >Papua New Guinea</option>
                                                                                                                    <option value='Paraguay' >Paraguay</option>
                                                                                                                    <option value='Peru' >Peru</option>
                                                                                                                    <option value='Philippines' >Philippines</option>
                                                                                                                    <option value='Poland' >Poland</option>
                                                                                                                    <option value='Portugal' >Portugal</option>
                                                                                                                    <option value='Puerto Rico' >Puerto Rico</option>
                                                                                                                    <option value='Qatar' >Qatar</option>
                                                                                                                    <option value='Romania' >Romania</option>
                                                                                                                    <option value='Russia' >Russia</option>
                                                                                                                    <option value='Rwanda' >Rwanda</option>
                                                                                                                    <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                                                                                                                    <option value='Saint Lucia' >Saint Lucia</option>
                                                                                                                    <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                                                                                                                    <option value='Samoa' >Samoa</option>
                                                                                                                    <option value='San Marino' >San Marino</option>
                                                                                                                    <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                                                                                                                    <option value='Saudi Arabia' >Saudi Arabia</option>
                                                                                                                    <option value='Senegal' >Senegal</option>
                                                                                                                    <option value='Serbia' >Serbia</option>
                                                                                                                    <option value='Seychelles' >Seychelles</option>
                                                                                                                    <option value='Sierra Leone' >Sierra Leone</option>
                                                                                                                    <option value='Singapore' >Singapore</option>
                                                                                                                    <option value='Sint Maarten' >Sint Maarten</option>
                                                                                                                    <option value='Slovakia' >Slovakia</option>
                                                                                                                    <option value='Slovenia' >Slovenia</option>
                                                                                                                    <option value='Solomon Islands' >Solomon Islands</option>
                                                                                                                    <option value='Somalia' >Somalia</option>
                                                                                                                    <option value='South Africa' selected='selected'>South Africa</option>
                                                                                                                    <option value='Spain' >Spain</option>
                                                                                                                    <option value='Sri Lanka' >Sri Lanka</option>
                                                                                                                    <option value='Sudan' >Sudan</option>
                                                                                                                    <option value='Sudan, South' >Sudan, South</option>
                                                                                                                    <option value='Suriname' >Suriname</option>
                                                                                                                    <option value='Swaziland' >Swaziland</option>
                                                                                                                    <option value='Sweden' >Sweden</option>
                                                                                                                    <option value='Switzerland' >Switzerland</option>
                                                                                                                    <option value='Syria' >Syria</option>
                                                                                                                    <option value='Taiwan' >Taiwan</option>
                                                                                                                    <option value='Tajikistan' >Tajikistan</option>
                                                                                                                    <option value='Tanzania' >Tanzania</option>
                                                                                                                    <option value='Thailand' >Thailand</option>
                                                                                                                    <option value='Togo' >Togo</option>
                                                                                                                    <option value='Tonga' >Tonga</option>
                                                                                                                    <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                                                                                                                    <option value='Tunisia' >Tunisia</option>
                                                                                                                    <option value='Turkey' >Turkey</option>
                                                                                                                    <option value='Turkmenistan' >Turkmenistan</option>
                                                                                                                    <option value='Tuvalu' >Tuvalu</option>
                                                                                                                    <option value='Uganda' >Uganda</option>
                                                                                                                    <option value='Ukraine' >Ukraine</option>
                                                                                                                    <option value='United Arab Emirates' >United Arab Emirates</option>
                                                                                                                    <option value='United Kingdom' >United Kingdom</option>
                                                                                                                    <option value='United States' >United States</option>
                                                                                                                    <option value='Uruguay' >Uruguay</option>
                                                                                                                    <option value='Uzbekistan' >Uzbekistan</option>
                                                                                                                    <option value='Vanuatu' >Vanuatu</option>
                                                                                                                    <option value='Vatican City' >Vatican City</option>
                                                                                                                    <option value='Venezuela' >Venezuela</option>
                                                                                                                    <option value='Vietnam' >Vietnam</option>
                                                                                                                    <option value='Virgin Islands, British' >Virgin Islands, British</option>
                                                                                                                    <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                                                                                                                    <option value='Yemen' >Yemen</option>
                                                                                                                    <option value='Zambia' >Zambia</option>
                                                                                                                    <option value='Zimbabwe' >Zimbabwe</option>
                                                                                                                </select>
                                                                                                            </span>
                                                                                                            <div class='gf_clear gf_clear_complex'></div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_14' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_14' >Cell Phone (if available):</label>
                                                                                                        <div class='ginput_container ginput_container_phone'><input name='applicants_cell' id='input_2_14' type='text' value='' class='medium' tabindex='24' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_19' style="margin-top: 38px;" class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>APPLICANT'S BACKGROUND</h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_109' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_109' >Application for Admission to:</label>
                                                                                                        <div class='ginput_container ginput_container_select'>
                                                                                                            <select name='application_for_admission_1' id='input_2_109' class='medium gfield_select' tabindex='32'   aria-invalid="false">
                                                                                                                <option value='Grade 5' >Grade 5</option>
                                                                                                                <option value='Grade 6' >Grade 6</option>
                                                                                                                <option value='Grade 7' >Grade 7</option>
                                                                                                                <option value='Grade 8' >Grade 8</option>
                                                                                                                <option value='Grade 9' >Grade 9</option>
                                                                                                                <option value='Grade 10' >Grade 10</option>
                                                                                                                <option value='Grade 11' >Grade 11</option>
                                                                                                                <option value='Grade 12' >Grade 12</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_21' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_21' >To start in Year:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_select'>
                                                                                                            <select name='year_to_start' id='input_2_110' onchange='gf_apply_rules(2,[0]);' class='medium gfield_select' tabindex='35'   aria-invalid="false">
                                                                                                                <option value='' >-- Select --</option>
                                                                                                                <?php 
                                                                                                                
                                                                                                                for($i = 2017; $i <= 2020; $i++){
                                                                                                                ?>
                                                                                                                
                                                                                                                <option value='<?php echo $i; ?>' ><?php echo $i; ?></option>
                                                                                                                
                                                                                                                <?php
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_22' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_22' >To start in term:</label>
                                                                                                        <div class='ginput_container ginput_container_select'>
                                                                                                            <select name='to_start_in' id='input_2_22' onchange='gf_apply_rules(2,[0]);' class='medium gfield_select' tabindex='37'   aria-invalid="false">
                                                                                                                <option value='Term 1' >Term 1</option>
                                                                                                                <option value='Term 2' >Term 2</option>
                                                                                                                <option value='Term 3' >Term 3</option>
                                                                                                                <option value='Term 4' >Term 4</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_223' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' style="display:none;" >
                                                                                                        <label class='gfield_label' for='input_2_22' >Subjects:</label>
                                                                                                        <div class='ginput_container ginput_container_select'>
                                                                                                            <ol type="1" class="" style="columns: 2;-webkit-columns: 2;-moz-columns: 2;margin-bottom: 22px;">
                                                                                                                <li>
                                                                                                                    <div class="gfield_description" style="padding: 0;"><strong>All</strong> three of these are compulsory</div>
                                                                                                                    <input type="checkbox" name="subjects[1][]" value="English Home Language" tabindex="" checked="checked" onclick="return false;" style="margin-left: 9px;">
                                                                                                                    English Home Language 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[1][]" value="Afrikaans First Additional Language" tabindex="" checked="checked" onclick="return false;"  style="margin-left: 9px;">
                                                                                                                    Afrikaans First Additional Language 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[1][]" value="Life Orientation" tabindex="" checked="checked" onclick="return false;"  style="margin-left: 9px;">
                                                                                                                    Life Orientation
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <div class="gfield_description" style="padding: 0;"><strong>One</strong> of these is compulsory</div>
                                                                                                                    <input type="checkbox" name="subjects[2][]"  class="radio_one" value="Mathematics" tabindex=""  style="margin-left: 9px;">
                                                                                                                    Mathematics 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[2][]" class="radio_one" value="Mathematical Literacy" tabindex=""  style="margin-left: 9px;">
                                                                                                                    Mathematical Literacy 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <div class="gfield_description" style="padding: 0;">Select <strong>Three</strong> from the following</div>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Life Sciences" tabindex=""  style="margin-left: 9px;">
                                                                                                                    Life Sciences 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Physical Sciences" tabindex=""  style="margin-left: 9px;">
                                                                                                                    Physical Sciences 
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Business Studies" tabindex=""  style="margin-left: 9px;">
                                                                                                                    Business Studies
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Information Technology" tabindex=""  style="margin-left: 5px;">
                                                                                                                    Information Technology
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Computer Applications Technology" tabindex="" >
                                                                                                                    Computer Applications Technology
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Visual Arts" tabindex="">
                                                                                                                    Visual Arts
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Design" tabindex="">
                                                                                                                    Design
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Photography" tabindex="">
                                                                                                                    Photography
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="checkbox" name="subjects[3][]" class="radio_two" value="Engineering & Graphics Design" tabindex="">
                                                                                                                    Engineering & Graphics Design
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <div class="gfield_description" style="padding: 0;">Other subjects</div>
                                                                                                                    <input type="text" name="subjects[4][]" class="" placeholder="A" tabindex="" style="width: 80%;">
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="text" name="subjects[4][]" class="" placeholder="B" tabindex="" style="width: 80%;">
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <input type="text" name="subjects[4][]" class="" placeholder="C" tabindex="" style="width: 80%;">
                                                                                                                </li>
                                                                                                            </ol>
                                                                                                            <input type="checkbox" name="afrikaans-exmption" value="Information Technology" tabindex=""  style="margin-left: 9px;">
                                                                                                            Afrikaans exemption required
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li style='width: 48%  !important;float: left;' id='field_2_23' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_23' >Academic History:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='gfield_description'>List in chronological order previous institutions attended as well as years and grades.</div>
                                                                                                        <div class='ginput_container ginput_container_textarea'><textarea style="width: 98%;" name='academic_history' id='input_2_23' class='textarea medium' tabindex='40' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'  aria-required="true" aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                                                                    </li>
                                                                                                    <li style='width: 48% !important;' id='field_2_24' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_24' >Academics:</label>
                                                                                                        <div class='gfield_description'>List any academic distinctions or honours received.</div>
                                                                                                        <div class='ginput_container ginput_container_textarea'><textarea name='academic_honours_received' id='input_2_24' class='textarea medium' tabindex='41' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                                                                    </li>
                                                                                                    <li  style='width: 48% !important;' id='field_2_26' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_26' >Sport:</label>
                                                                                                        <div class='gfield_description'>List any sporting distinctions or honours received.</div>
                                                                                                        <div class='ginput_container ginput_container_textarea'><textarea name='sporting_honours_received' id='input_2_26' class='textarea medium' tabindex='43' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                                                                    </li>
                                                                                                    <li style='width: 48% !important;float: left;' id='field_2_27' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_27' >Extra-Curricular Activities:</label>
                                                                                                        <div class='gfield_description'>Please list applicant's extra-curricular activities in order of importance:</div>
                                                                                                        <div class='ginput_container ginput_container_textarea'><textarea name='extra_caurricular_ctivities' id='input_2_27' class='textarea medium' tabindex='44' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                                                                    </li>
                                                                                                    <li style='padding-top: 22px;' id='field_2_17' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_17' >If there are any special circumstances involving the learner (e.g. ill health, physical disability, known learning problems, other handicaps or disabilities) please describe these briefly:</label>
                                                                                                        <div class='ginput_container ginput_container_textarea'><textarea name='special_circumstances' id='input_2_17' class='textarea medium' tabindex='31' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_28' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'></h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_29' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>PARTICULARS OF PARENTS</h2>
                                                                                                    </li>
                                                                                                    <li style='width: 47%;float:left'>
                                                                                                        <ul id=''>
                                                                                                            <li id='field_2_30' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label gfield_label_before_complex' for='input_2_30_3' >MOTHER/LEGAL GUARDIAN:<span class='gfield_required'>*</span></label>
                                                                                                                <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_2_30'>
                                                                                                                    <span id='input_2_30_3_container' class='name_first' >
                                                                                                                    <input type='text' name='parent_1_firstname' id='input_2_30_3' value='' aria-label='First name' tabindex='46'  aria-required="true" aria-invalid="false" />
                                                                                                                    <label for='input_2_30_3' >First</label>
                                                                                                                    </span>
                                                                                                                    <span id='input_2_30_6_container' class='name_last' >
                                                                                                                    <input type='text' name='parent_1_lastname' id='input_2_30_6' value='' aria-label='Last name' tabindex='48'  aria-required="true" aria-invalid="false" />
                                                                                                                    <label for='input_2_30_6' >Last</label>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li id='field_2_116' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_116' >ID/Passport Number:</label>
                                                                                                                <div class='ginput_container ginput_container_text'><input name='parent_1_idno' id='input_2_116' type='text' value='' class='medium'  tabindex='55' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_35' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_35' >Mobile Phone:</label>
                                                                                                                <div class='ginput_container ginput_container_phone'><input name='parent_1_mobile_phone' id='input_2_35' type='text' value='' class='medium' tabindex='79' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_34' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_34' >Work Phone:</label>
                                                                                                                <div class='ginput_container ginput_container_phone'><input name='parent_1_work_phone' id='input_2_34' type='text' value='' class='medium' tabindex='81' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_38' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_38' >Email:<span class='gfield_required'>*</span></label>
                                                                                                                <div class='ginput_container ginput_container_email'>
                                                                                                                    <input name='parent_1_email' id='input_2_38' type='text' value='' class='medium' tabindex='85' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-required="true" aria-invalid="false"/>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li id='field_2_32' class='gfield gf_left_half gfield_contains_required field_sublabel_above field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_117' style="width: 100%;">Parents reside at the same residential address:<input style='float: right;' name='same_parent_address' id='same_parent_address' type='checkbox' value='1' class='medium'  tabindex='56'aria-invalid="false" /></label>
                                                                                                        <div class='ginput_container ginput_container_text'></div>
                                                                                                                <label class='gfield_label gfield_label_before_complex' for='input_2_32_1' >Residential Address:<span class='gfield_required'>*</span></label>    
                                                                                                                <div class='ginput_complex ginput_container has_street has_street2 has_city has_zip has_country ginput_container_address gfield_trigger_change' id='input_2_32' >
                                                                                                                    
                                                                                                                    <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                        <label for='input_2_13_6' id='input_2_13_6_label' >Residence Type</label>
                                                                                                                        <input type="checkbox" data-id='parrent_1_residence_type' name='parrent_1_residence_type' value="estate" id='applicants_residence_type' tabindex='' >
                                                                                                                            Complex / Estate
                                                                                                                    </span>
                                                                                                                    <span class='ginput_left parrent_1_residence_type' id='input_2_13_1_container' style='display:none;' >
                                                                                                                    <label for='parrent_1_res_estate_name' id='input_2_13_1_label' >Unit/House Number</label>
                                                                                                                    <input type='text' name='parrent_1_res_estate_number' id='parrent_1_bus_residence_type' value='' tabindex='19'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_right parrent_1_residence_type' id='input_2_13_1_container' style='display:none;float:right;' >
                                                                                                                    <label for='parrent_1_res_estate_name' id='input_2_13_1_label' >Complex/Estate Name</label>
                                                                                                                    <input type='text' name='parrent_1_res_estate_name' id='parrent_1_bus_residence_type' value='' tabindex='19'  />
                                                                                                                    </span>
                                                                                                                    
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_64_1_container' >
                                                                                                                    <label for='input_2_64_1' id='input_2_64_1_label' >House Number</label>
                                                                                                                    <input type='text' name='parent_1_res_house_number' id='input_2_64_1' value='' tabindex='62'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_32_1_container' >
                                                                                                                    <label for='input_2_32_1' id='input_2_32_1_label' >Street Address</label>
                                                                                                                    <input type='text' name='parent_1_res_street_address' id='input_2_32_1' value='' tabindex='57'  />
                                                                                                                    </span><span class='ginput_full address_line_2' id='input_2_32_2_container' >
                                                                                                                    <label for='input_2_32_2' id='input_2_32_2_label' >Suburb</label>
                                                                                                                    <input type='text' name='parent_1_res_address_line_2' id='input_2_32_2' value='' tabindex='58'  />
                                                                                                                    </span><span class='ginput_left address_city' id='input_2_32_3_container' >
                                                                                                                    <label for='input_2_32_3' id='input_2_32_3_label' >City</label>
                                                                                                                    <input type='text' name='parent_1_res_city' id='input_2_32_3' value='' tabindex='59'  />
                                                                                                                    </span><input type='hidden' class='gform_hidden' name='input_32.4' id='input_2_32_4' value=''/><span class='ginput_right address_zip' id='input_2_32_5_container' >
                                                                                                                    <label for='input_2_32_5' id='input_2_32_5_label' >ZIP / Postal Code</label>
                                                                                                                    <input type='text' name='parent_1_res_street_postal_code' id='input_2_32_5' value='' tabindex='60'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_left address_country' id='input_2_32_6_container' >
                                                                                                                        <label for='input_2_32_6' id='input_2_32_6_label' >Country</label>
                                                                                                                        <select name='parent_1_res_country' id='input_2_32_6' tabindex='61' >
                                                                                                                            <option value='' ></option>
                                                                                                                            <option value='Afghanistan' >Afghanistan</option>
                                                                                                                            <option value='Albania' >Albania</option>
                                                                                                                            <option value='Algeria' >Algeria</option>
                                                                                                                            <option value='American Samoa' >American Samoa</option>
                                                                                                                            <option value='Andorra' >Andorra</option>
                                                                                                                            <option value='Angola' >Angola</option>
                                                                                                                            <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                                                                                                                            <option value='Argentina' >Argentina</option>
                                                                                                                            <option value='Armenia' >Armenia</option>
                                                                                                                            <option value='Australia' >Australia</option>
                                                                                                                            <option value='Austria' >Austria</option>
                                                                                                                            <option value='Azerbaijan' >Azerbaijan</option>
                                                                                                                            <option value='Bahamas' >Bahamas</option>
                                                                                                                            <option value='Bahrain' >Bahrain</option>
                                                                                                                            <option value='Bangladesh' >Bangladesh</option>
                                                                                                                            <option value='Barbados' >Barbados</option>
                                                                                                                            <option value='Belarus' >Belarus</option>
                                                                                                                            <option value='Belgium' >Belgium</option>
                                                                                                                            <option value='Belize' >Belize</option>
                                                                                                                            <option value='Benin' >Benin</option>
                                                                                                                            <option value='Bermuda' >Bermuda</option>
                                                                                                                            <option value='Bhutan' >Bhutan</option>
                                                                                                                            <option value='Bolivia' >Bolivia</option>
                                                                                                                            <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                                                                                                                            <option value='Botswana' >Botswana</option>
                                                                                                                            <option value='Brazil' >Brazil</option>
                                                                                                                            <option value='Brunei' >Brunei</option>
                                                                                                                            <option value='Bulgaria' >Bulgaria</option>
                                                                                                                            <option value='Burkina Faso' >Burkina Faso</option>
                                                                                                                            <option value='Burundi' >Burundi</option>
                                                                                                                            <option value='Cambodia' >Cambodia</option>
                                                                                                                            <option value='Cameroon' >Cameroon</option>
                                                                                                                            <option value='Canada' >Canada</option>
                                                                                                                            <option value='Cape Verde' >Cape Verde</option>
                                                                                                                            <option value='Cayman Islands' >Cayman Islands</option>
                                                                                                                            <option value='Central African Republic' >Central African Republic</option>
                                                                                                                            <option value='Chad' >Chad</option>
                                                                                                                            <option value='Chile' >Chile</option>
                                                                                                                            <option value='China' >China</option>
                                                                                                                            <option value='Colombia' >Colombia</option>
                                                                                                                            <option value='Comoros' >Comoros</option>
                                                                                                                            <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                                                                                                                            <option value='Congo, Republic of the' >Congo, Republic of the</option>
                                                                                                                            <option value='Costa Rica' >Costa Rica</option>
                                                                                                                            <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
                                                                                                                            <option value='Croatia' >Croatia</option>
                                                                                                                            <option value='Cuba' >Cuba</option>
                                                                                                                            <option value='Curaçao' >Curaçao</option>
                                                                                                                            <option value='Cyprus' >Cyprus</option>
                                                                                                                            <option value='Czech Republic' >Czech Republic</option>
                                                                                                                            <option value='Denmark' >Denmark</option>
                                                                                                                            <option value='Djibouti' >Djibouti</option>
                                                                                                                            <option value='Dominica' >Dominica</option>
                                                                                                                            <option value='Dominican Republic' >Dominican Republic</option>
                                                                                                                            <option value='East Timor' >East Timor</option>
                                                                                                                            <option value='Ecuador' >Ecuador</option>
                                                                                                                            <option value='Egypt' >Egypt</option>
                                                                                                                            <option value='El Salvador' >El Salvador</option>
                                                                                                                            <option value='Equatorial Guinea' >Equatorial Guinea</option>
                                                                                                                            <option value='Eritrea' >Eritrea</option>
                                                                                                                            <option value='Estonia' >Estonia</option>
                                                                                                                            <option value='Ethiopia' >Ethiopia</option>
                                                                                                                            <option value='Faroe Islands' >Faroe Islands</option>
                                                                                                                            <option value='Fiji' >Fiji</option>
                                                                                                                            <option value='Finland' >Finland</option>
                                                                                                                            <option value='France' >France</option>
                                                                                                                            <option value='French Polynesia' >French Polynesia</option>
                                                                                                                            <option value='Gabon' >Gabon</option>
                                                                                                                            <option value='Gambia' >Gambia</option>
                                                                                                                            <option value='Georgia' >Georgia</option>
                                                                                                                            <option value='Germany' >Germany</option>
                                                                                                                            <option value='Ghana' >Ghana</option>
                                                                                                                            <option value='Greece' >Greece</option>
                                                                                                                            <option value='Greenland' >Greenland</option>
                                                                                                                            <option value='Grenada' >Grenada</option>
                                                                                                                            <option value='Guam' >Guam</option>
                                                                                                                            <option value='Guatemala' >Guatemala</option>
                                                                                                                            <option value='Guinea' >Guinea</option>
                                                                                                                            <option value='Guinea-Bissau' >Guinea-Bissau</option>
                                                                                                                            <option value='Guyana' >Guyana</option>
                                                                                                                            <option value='Haiti' >Haiti</option>
                                                                                                                            <option value='Honduras' >Honduras</option>
                                                                                                                            <option value='Hong Kong' >Hong Kong</option>
                                                                                                                            <option value='Hungary' >Hungary</option>
                                                                                                                            <option value='Iceland' >Iceland</option>
                                                                                                                            <option value='India' >India</option>
                                                                                                                            <option value='Indonesia' >Indonesia</option>
                                                                                                                            <option value='Iran' >Iran</option>
                                                                                                                            <option value='Iraq' >Iraq</option>
                                                                                                                            <option value='Ireland' >Ireland</option>
                                                                                                                            <option value='Israel' >Israel</option>
                                                                                                                            <option value='Italy' >Italy</option>
                                                                                                                            <option value='Jamaica' >Jamaica</option>
                                                                                                                            <option value='Japan' >Japan</option>
                                                                                                                            <option value='Jordan' >Jordan</option>
                                                                                                                            <option value='Kazakhstan' >Kazakhstan</option>
                                                                                                                            <option value='Kenya' >Kenya</option>
                                                                                                                            <option value='Kiribati' >Kiribati</option>
                                                                                                                            <option value='North Korea' >North Korea</option>
                                                                                                                            <option value='South Korea' >South Korea</option>
                                                                                                                            <option value='Kosovo' >Kosovo</option>
                                                                                                                            <option value='Kuwait' >Kuwait</option>
                                                                                                                            <option value='Kyrgyzstan' >Kyrgyzstan</option>
                                                                                                                            <option value='Laos' >Laos</option>
                                                                                                                            <option value='Latvia' >Latvia</option>
                                                                                                                            <option value='Lebanon' >Lebanon</option>
                                                                                                                            <option value='Lesotho' >Lesotho</option>
                                                                                                                            <option value='Liberia' >Liberia</option>
                                                                                                                            <option value='Libya' >Libya</option>
                                                                                                                            <option value='Liechtenstein' >Liechtenstein</option>
                                                                                                                            <option value='Lithuania' >Lithuania</option>
                                                                                                                            <option value='Luxembourg' >Luxembourg</option>
                                                                                                                            <option value='Macedonia' >Macedonia</option>
                                                                                                                            <option value='Madagascar' >Madagascar</option>
                                                                                                                            <option value='Malawi' >Malawi</option>
                                                                                                                            <option value='Malaysia' >Malaysia</option>
                                                                                                                            <option value='Maldives' >Maldives</option>
                                                                                                                            <option value='Mali' >Mali</option>
                                                                                                                            <option value='Malta' >Malta</option>
                                                                                                                            <option value='Marshall Islands' >Marshall Islands</option>
                                                                                                                            <option value='Mauritania' >Mauritania</option>
                                                                                                                            <option value='Mauritius' >Mauritius</option>
                                                                                                                            <option value='Mexico' >Mexico</option>
                                                                                                                            <option value='Micronesia' >Micronesia</option>
                                                                                                                            <option value='Moldova' >Moldova</option>
                                                                                                                            <option value='Monaco' >Monaco</option>
                                                                                                                            <option value='Mongolia' >Mongolia</option>
                                                                                                                            <option value='Montenegro' >Montenegro</option>
                                                                                                                            <option value='Morocco' >Morocco</option>
                                                                                                                            <option value='Mozambique' >Mozambique</option>
                                                                                                                            <option value='Myanmar' >Myanmar</option>
                                                                                                                            <option value='Namibia' >Namibia</option>
                                                                                                                            <option value='Nauru' >Nauru</option>
                                                                                                                            <option value='Nepal' >Nepal</option>
                                                                                                                            <option value='Netherlands' >Netherlands</option>
                                                                                                                            <option value='New Zealand' >New Zealand</option>
                                                                                                                            <option value='Nicaragua' >Nicaragua</option>
                                                                                                                            <option value='Niger' >Niger</option>
                                                                                                                            <option value='Nigeria' >Nigeria</option>
                                                                                                                            <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                                                                                                                            <option value='Norway' >Norway</option>
                                                                                                                            <option value='Oman' >Oman</option>
                                                                                                                            <option value='Pakistan' >Pakistan</option>
                                                                                                                            <option value='Palau' >Palau</option>
                                                                                                                            <option value='Palestine, State of' >Palestine, State of</option>
                                                                                                                            <option value='Panama' >Panama</option>
                                                                                                                            <option value='Papua New Guinea' >Papua New Guinea</option>
                                                                                                                            <option value='Paraguay' >Paraguay</option>
                                                                                                                            <option value='Peru' >Peru</option>
                                                                                                                            <option value='Philippines' >Philippines</option>
                                                                                                                            <option value='Poland' >Poland</option>
                                                                                                                            <option value='Portugal' >Portugal</option>
                                                                                                                            <option value='Puerto Rico' >Puerto Rico</option>
                                                                                                                            <option value='Qatar' >Qatar</option>
                                                                                                                            <option value='Romania' >Romania</option>
                                                                                                                            <option value='Russia' >Russia</option>
                                                                                                                            <option value='Rwanda' >Rwanda</option>
                                                                                                                            <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                                                                                                                            <option value='Saint Lucia' >Saint Lucia</option>
                                                                                                                            <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                                                                                                                            <option value='Samoa' >Samoa</option>
                                                                                                                            <option value='San Marino' >San Marino</option>
                                                                                                                            <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                                                                                                                            <option value='Saudi Arabia' >Saudi Arabia</option>
                                                                                                                            <option value='Senegal' >Senegal</option>
                                                                                                                            <option value='Serbia' >Serbia</option>
                                                                                                                            <option value='Seychelles' >Seychelles</option>
                                                                                                                            <option value='Sierra Leone' >Sierra Leone</option>
                                                                                                                            <option value='Singapore' >Singapore</option>
                                                                                                                            <option value='Sint Maarten' >Sint Maarten</option>
                                                                                                                            <option value='Slovakia' >Slovakia</option>
                                                                                                                            <option value='Slovenia' >Slovenia</option>
                                                                                                                            <option value='Solomon Islands' >Solomon Islands</option>
                                                                                                                            <option value='Somalia' >Somalia</option>
                                                                                                                            <option value='South Africa' selected='selected'>South Africa</option>
                                                                                                                            <option value='Spain' >Spain</option>
                                                                                                                            <option value='Sri Lanka' >Sri Lanka</option>
                                                                                                                            <option value='Sudan' >Sudan</option>
                                                                                                                            <option value='Sudan, South' >Sudan, South</option>
                                                                                                                            <option value='Suriname' >Suriname</option>
                                                                                                                            <option value='Swaziland' >Swaziland</option>
                                                                                                                            <option value='Sweden' >Sweden</option>
                                                                                                                            <option value='Switzerland' >Switzerland</option>
                                                                                                                            <option value='Syria' >Syria</option>
                                                                                                                            <option value='Taiwan' >Taiwan</option>
                                                                                                                            <option value='Tajikistan' >Tajikistan</option>
                                                                                                                            <option value='Tanzania' >Tanzania</option>
                                                                                                                            <option value='Thailand' >Thailand</option>
                                                                                                                            <option value='Togo' >Togo</option>
                                                                                                                            <option value='Tonga' >Tonga</option>
                                                                                                                            <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                                                                                                                            <option value='Tunisia' >Tunisia</option>
                                                                                                                            <option value='Turkey' >Turkey</option>
                                                                                                                            <option value='Turkmenistan' >Turkmenistan</option>
                                                                                                                            <option value='Tuvalu' >Tuvalu</option>
                                                                                                                            <option value='Uganda' >Uganda</option>
                                                                                                                            <option value='Ukraine' >Ukraine</option>
                                                                                                                            <option value='United Arab Emirates' >United Arab Emirates</option>
                                                                                                                            <option value='United Kingdom' >United Kingdom</option>
                                                                                                                            <option value='United States' >United States</option>
                                                                                                                            <option value='Uruguay' >Uruguay</option>
                                                                                                                            <option value='Uzbekistan' >Uzbekistan</option>
                                                                                                                            <option value='Vanuatu' >Vanuatu</option>
                                                                                                                            <option value='Vatican City' >Vatican City</option>
                                                                                                                            <option value='Venezuela' >Venezuela</option>
                                                                                                                            <option value='Vietnam' >Vietnam</option>
                                                                                                                            <option value='Virgin Islands, British' >Virgin Islands, British</option>
                                                                                                                            <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                                                                                                                            <option value='Yemen' >Yemen</option>
                                                                                                                            <option value='Zambia' >Zambia</option>
                                                                                                                            <option value='Zimbabwe' >Zimbabwe</option>
                                                                                                                        </select>
                                                                                                                    </span>
                                                                                                                    <div class='gf_clear gf_clear_complex'></div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li id='field_2_37' class='gfield gf_left_half field_sublabel_above field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label gfield_label_before_complex' for='input_2_37_1' >Postal Address:</label>
                                                                                                                <div class='gfield_description'>If different to residential address.</div>
                                                                                                                <div class='ginput_complex ginput_container has_street has_street2 has_city has_zip has_country ginput_container_address gfield_trigger_change' id='input_2_37' >
                                                                                                                    <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                        <label for='input_2_13_6' id='input_2_13_6_label' >P.O.Box</label>
                                                                                                                        <input type="checkbox"  name='parrent_1_postal_type' value="P.O.Box" id='parrent_1_postal_type' tabindex='' >
                                                                                                                    </span>
                                                                                                                    <span class='ginput_right address_country' id='input_2_13_6_container' style="float:right" >
                                                                                                                        <label for='input_2_13_6' id='input_2_13_6_label' >Private Bag</label>
                                                                                                                        <input type="checkbox"  name='parrent_1_postal_type' value="Private Bag" id='parrent_1_postal_type' tabindex='' >
                                                                                                                    </span>
                                                                                                                    
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_37_1_container' >
                                                                                                                    <label for='input_2_37_1' id='input_2_37_1_label' >Number</label>
                                                                                                                    <input type='text' name='parent_1_postal_number' id='input_2_37_1' value='' tabindex='67'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_37_1_container' >
                                                                                                                    <label for='input_2_37_1' id='input_2_37_1_label' >Suite (if applicable)</label>
                                                                                                                    <input type='text' name='parent_1_postal_suite' id='input_2_37_1' value='' tabindex='67'  />
                                                                                                                    </span>
                                                                                                                    
                                                                                                                    <span class='ginput_full address_line_2' id='input_2_37_2_container' >
                                                                                                                    <label for='input_2_37_2' id='input_2_37_2_label' >Suburb</label>
                                                                                                                    <input type='text' name='parent_1_postal_address_line_2' id='input_2_37_2' value='' tabindex='68'  />
                                                                                                                    </span><span class='ginput_left address_city' id='input_2_37_3_container' >
                                                                                                                    <label for='input_2_37_3' id='input_2_37_3_label' >City</label>
                                                                                                                    <input type='text' name='parent_1_postal_address_city' id='input_2_37_3' value='' tabindex='69'  />
                                                                                                                    </span><input type='hidden' class='gform_hidden' name='input_37.4' id='input_2_37_4' value=''/><span class='ginput_right address_zip' id='input_2_37_5_container' >
                                                                                                                    <label for='input_2_37_5' id='input_2_37_5_label' >ZIP / Postal Code</label>
                                                                                                                    <input type='text' name='parent_1_postal_address_postal_code' id='input_2_37_5' value='' tabindex='70'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_left address_country' id='input_2_37_6_container' >
                                                                                                                        <label for='input_2_37_6' id='input_2_37_6_label' >Country</label>
                                                                                                                        <select name='parent_1_postal_address_country' id='input_2_37_6' tabindex='71' >
                                                                                                                            <option value='' ></option>
                                                                                                                            <option value='Afghanistan' >Afghanistan</option>
                                                                                                                            <option value='Albania' >Albania</option>
                                                                                                                            <option value='Algeria' >Algeria</option>
                                                                                                                            <option value='American Samoa' >American Samoa</option>
                                                                                                                            <option value='Andorra' >Andorra</option>
                                                                                                                            <option value='Angola' >Angola</option>
                                                                                                                            <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                                                                                                                            <option value='Argentina' >Argentina</option>
                                                                                                                            <option value='Armenia' >Armenia</option>
                                                                                                                            <option value='Australia' >Australia</option>
                                                                                                                            <option value='Austria' >Austria</option>
                                                                                                                            <option value='Azerbaijan' >Azerbaijan</option>
                                                                                                                            <option value='Bahamas' >Bahamas</option>
                                                                                                                            <option value='Bahrain' >Bahrain</option>
                                                                                                                            <option value='Bangladesh' >Bangladesh</option>
                                                                                                                            <option value='Barbados' >Barbados</option>
                                                                                                                            <option value='Belarus' >Belarus</option>
                                                                                                                            <option value='Belgium' >Belgium</option>
                                                                                                                            <option value='Belize' >Belize</option>
                                                                                                                            <option value='Benin' >Benin</option>
                                                                                                                            <option value='Bermuda' >Bermuda</option>
                                                                                                                            <option value='Bhutan' >Bhutan</option>
                                                                                                                            <option value='Bolivia' >Bolivia</option>
                                                                                                                            <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                                                                                                                            <option value='Botswana' >Botswana</option>
                                                                                                                            <option value='Brazil' >Brazil</option>
                                                                                                                            <option value='Brunei' >Brunei</option>
                                                                                                                            <option value='Bulgaria' >Bulgaria</option>
                                                                                                                            <option value='Burkina Faso' >Burkina Faso</option>
                                                                                                                            <option value='Burundi' >Burundi</option>
                                                                                                                            <option value='Cambodia' >Cambodia</option>
                                                                                                                            <option value='Cameroon' >Cameroon</option>
                                                                                                                            <option value='Canada' >Canada</option>
                                                                                                                            <option value='Cape Verde' >Cape Verde</option>
                                                                                                                            <option value='Cayman Islands' >Cayman Islands</option>
                                                                                                                            <option value='Central African Republic' >Central African Republic</option>
                                                                                                                            <option value='Chad' >Chad</option>
                                                                                                                            <option value='Chile' >Chile</option>
                                                                                                                            <option value='China' >China</option>
                                                                                                                            <option value='Colombia' >Colombia</option>
                                                                                                                            <option value='Comoros' >Comoros</option>
                                                                                                                            <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                                                                                                                            <option value='Congo, Republic of the' >Congo, Republic of the</option>
                                                                                                                            <option value='Costa Rica' >Costa Rica</option>
                                                                                                                            <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
                                                                                                                            <option value='Croatia' >Croatia</option>
                                                                                                                            <option value='Cuba' >Cuba</option>
                                                                                                                            <option value='Curaçao' >Curaçao</option>
                                                                                                                            <option value='Cyprus' >Cyprus</option>
                                                                                                                            <option value='Czech Republic' >Czech Republic</option>
                                                                                                                            <option value='Denmark' >Denmark</option>
                                                                                                                            <option value='Djibouti' >Djibouti</option>
                                                                                                                            <option value='Dominica' >Dominica</option>
                                                                                                                            <option value='Dominican Republic' >Dominican Republic</option>
                                                                                                                            <option value='East Timor' >East Timor</option>
                                                                                                                            <option value='Ecuador' >Ecuador</option>
                                                                                                                            <option value='Egypt' >Egypt</option>
                                                                                                                            <option value='El Salvador' >El Salvador</option>
                                                                                                                            <option value='Equatorial Guinea' >Equatorial Guinea</option>
                                                                                                                            <option value='Eritrea' >Eritrea</option>
                                                                                                                            <option value='Estonia' >Estonia</option>
                                                                                                                            <option value='Ethiopia' >Ethiopia</option>
                                                                                                                            <option value='Faroe Islands' >Faroe Islands</option>
                                                                                                                            <option value='Fiji' >Fiji</option>
                                                                                                                            <option value='Finland' >Finland</option>
                                                                                                                            <option value='France' >France</option>
                                                                                                                            <option value='French Polynesia' >French Polynesia</option>
                                                                                                                            <option value='Gabon' >Gabon</option>
                                                                                                                            <option value='Gambia' >Gambia</option>
                                                                                                                            <option value='Georgia' >Georgia</option>
                                                                                                                            <option value='Germany' >Germany</option>
                                                                                                                            <option value='Ghana' >Ghana</option>
                                                                                                                            <option value='Greece' >Greece</option>
                                                                                                                            <option value='Greenland' >Greenland</option>
                                                                                                                            <option value='Grenada' >Grenada</option>
                                                                                                                            <option value='Guam' >Guam</option>
                                                                                                                            <option value='Guatemala' >Guatemala</option>
                                                                                                                            <option value='Guinea' >Guinea</option>
                                                                                                                            <option value='Guinea-Bissau' >Guinea-Bissau</option>
                                                                                                                            <option value='Guyana' >Guyana</option>
                                                                                                                            <option value='Haiti' >Haiti</option>
                                                                                                                            <option value='Honduras' >Honduras</option>
                                                                                                                            <option value='Hong Kong' >Hong Kong</option>
                                                                                                                            <option value='Hungary' >Hungary</option>
                                                                                                                            <option value='Iceland' >Iceland</option>
                                                                                                                            <option value='India' >India</option>
                                                                                                                            <option value='Indonesia' >Indonesia</option>
                                                                                                                            <option value='Iran' >Iran</option>
                                                                                                                            <option value='Iraq' >Iraq</option>
                                                                                                                            <option value='Ireland' >Ireland</option>
                                                                                                                            <option value='Israel' >Israel</option>
                                                                                                                            <option value='Italy' >Italy</option>
                                                                                                                            <option value='Jamaica' >Jamaica</option>
                                                                                                                            <option value='Japan' >Japan</option>
                                                                                                                            <option value='Jordan' >Jordan</option>
                                                                                                                            <option value='Kazakhstan' >Kazakhstan</option>
                                                                                                                            <option value='Kenya' >Kenya</option>
                                                                                                                            <option value='Kiribati' >Kiribati</option>
                                                                                                                            <option value='North Korea' >North Korea</option>
                                                                                                                            <option value='South Korea' >South Korea</option>
                                                                                                                            <option value='Kosovo' >Kosovo</option>
                                                                                                                            <option value='Kuwait' >Kuwait</option>
                                                                                                                            <option value='Kyrgyzstan' >Kyrgyzstan</option>
                                                                                                                            <option value='Laos' >Laos</option>
                                                                                                                            <option value='Latvia' >Latvia</option>
                                                                                                                            <option value='Lebanon' >Lebanon</option>
                                                                                                                            <option value='Lesotho' >Lesotho</option>
                                                                                                                            <option value='Liberia' >Liberia</option>
                                                                                                                            <option value='Libya' >Libya</option>
                                                                                                                            <option value='Liechtenstein' >Liechtenstein</option>
                                                                                                                            <option value='Lithuania' >Lithuania</option>
                                                                                                                            <option value='Luxembourg' >Luxembourg</option>
                                                                                                                            <option value='Macedonia' >Macedonia</option>
                                                                                                                            <option value='Madagascar' >Madagascar</option>
                                                                                                                            <option value='Malawi' >Malawi</option>
                                                                                                                            <option value='Malaysia' >Malaysia</option>
                                                                                                                            <option value='Maldives' >Maldives</option>
                                                                                                                            <option value='Mali' >Mali</option>
                                                                                                                            <option value='Malta' >Malta</option>
                                                                                                                            <option value='Marshall Islands' >Marshall Islands</option>
                                                                                                                            <option value='Mauritania' >Mauritania</option>
                                                                                                                            <option value='Mauritius' >Mauritius</option>
                                                                                                                            <option value='Mexico' >Mexico</option>
                                                                                                                            <option value='Micronesia' >Micronesia</option>
                                                                                                                            <option value='Moldova' >Moldova</option>
                                                                                                                            <option value='Monaco' >Monaco</option>
                                                                                                                            <option value='Mongolia' >Mongolia</option>
                                                                                                                            <option value='Montenegro' >Montenegro</option>
                                                                                                                            <option value='Morocco' >Morocco</option>
                                                                                                                            <option value='Mozambique' >Mozambique</option>
                                                                                                                            <option value='Myanmar' >Myanmar</option>
                                                                                                                            <option value='Namibia' >Namibia</option>
                                                                                                                            <option value='Nauru' >Nauru</option>
                                                                                                                            <option value='Nepal' >Nepal</option>
                                                                                                                            <option value='Netherlands' >Netherlands</option>
                                                                                                                            <option value='New Zealand' >New Zealand</option>
                                                                                                                            <option value='Nicaragua' >Nicaragua</option>
                                                                                                                            <option value='Niger' >Niger</option>
                                                                                                                            <option value='Nigeria' >Nigeria</option>
                                                                                                                            <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                                                                                                                            <option value='Norway' >Norway</option>
                                                                                                                            <option value='Oman' >Oman</option>
                                                                                                                            <option value='Pakistan' >Pakistan</option>
                                                                                                                            <option value='Palau' >Palau</option>
                                                                                                                            <option value='Palestine, State of' >Palestine, State of</option>
                                                                                                                            <option value='Panama' >Panama</option>
                                                                                                                            <option value='Papua New Guinea' >Papua New Guinea</option>
                                                                                                                            <option value='Paraguay' >Paraguay</option>
                                                                                                                            <option value='Peru' >Peru</option>
                                                                                                                            <option value='Philippines' >Philippines</option>
                                                                                                                            <option value='Poland' >Poland</option>
                                                                                                                            <option value='Portugal' >Portugal</option>
                                                                                                                            <option value='Puerto Rico' >Puerto Rico</option>
                                                                                                                            <option value='Qatar' >Qatar</option>
                                                                                                                            <option value='Romania' >Romania</option>
                                                                                                                            <option value='Russia' >Russia</option>
                                                                                                                            <option value='Rwanda' >Rwanda</option>
                                                                                                                            <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                                                                                                                            <option value='Saint Lucia' >Saint Lucia</option>
                                                                                                                            <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                                                                                                                            <option value='Samoa' >Samoa</option>
                                                                                                                            <option value='San Marino' >San Marino</option>
                                                                                                                            <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                                                                                                                            <option value='Saudi Arabia' >Saudi Arabia</option>
                                                                                                                            <option value='Senegal' >Senegal</option>
                                                                                                                            <option value='Serbia' >Serbia</option>
                                                                                                                            <option value='Seychelles' >Seychelles</option>
                                                                                                                            <option value='Sierra Leone' >Sierra Leone</option>
                                                                                                                            <option value='Singapore' >Singapore</option>
                                                                                                                            <option value='Sint Maarten' >Sint Maarten</option>
                                                                                                                            <option value='Slovakia' >Slovakia</option>
                                                                                                                            <option value='Slovenia' >Slovenia</option>
                                                                                                                            <option value='Solomon Islands' >Solomon Islands</option>
                                                                                                                            <option value='Somalia' >Somalia</option>
                                                                                                                            <option value='South Africa' selected='selected'>South Africa</option>
                                                                                                                            <option value='Spain' >Spain</option>
                                                                                                                            <option value='Sri Lanka' >Sri Lanka</option>
                                                                                                                            <option value='Sudan' >Sudan</option>
                                                                                                                            <option value='Sudan, South' >Sudan, South</option>
                                                                                                                            <option value='Suriname' >Suriname</option>
                                                                                                                            <option value='Swaziland' >Swaziland</option>
                                                                                                                            <option value='Sweden' >Sweden</option>
                                                                                                                            <option value='Switzerland' >Switzerland</option>
                                                                                                                            <option value='Syria' >Syria</option>
                                                                                                                            <option value='Taiwan' >Taiwan</option>
                                                                                                                            <option value='Tajikistan' >Tajikistan</option>
                                                                                                                            <option value='Tanzania' >Tanzania</option>
                                                                                                                            <option value='Thailand' >Thailand</option>
                                                                                                                            <option value='Togo' >Togo</option>
                                                                                                                            <option value='Tonga' >Tonga</option>
                                                                                                                            <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                                                                                                                            <option value='Tunisia' >Tunisia</option>
                                                                                                                            <option value='Turkey' >Turkey</option>
                                                                                                                            <option value='Turkmenistan' >Turkmenistan</option>
                                                                                                                            <option value='Tuvalu' >Tuvalu</option>
                                                                                                                            <option value='Uganda' >Uganda</option>
                                                                                                                            <option value='Ukraine' >Ukraine</option>
                                                                                                                            <option value='United Arab Emirates' >United Arab Emirates</option>
                                                                                                                            <option value='United Kingdom' >United Kingdom</option>
                                                                                                                            <option value='United States' >United States</option>
                                                                                                                            <option value='Uruguay' >Uruguay</option>
                                                                                                                            <option value='Uzbekistan' >Uzbekistan</option>
                                                                                                                            <option value='Vanuatu' >Vanuatu</option>
                                                                                                                            <option value='Vatican City' >Vatican City</option>
                                                                                                                            <option value='Venezuela' >Venezuela</option>
                                                                                                                            <option value='Vietnam' >Vietnam</option>
                                                                                                                            <option value='Virgin Islands, British' >Virgin Islands, British</option>
                                                                                                                            <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                                                                                                                            <option value='Yemen' >Yemen</option>
                                                                                                                            <option value='Zambia' >Zambia</option>
                                                                                                                            <option value='Zimbabwe' >Zimbabwe</option>
                                                                                                                        </select>
                                                                                                                    </span>
                                                                                                                    <div class='gf_clear gf_clear_complex'></div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li id='field_2_39' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_39' >Occupation:</label>
                                                                                                                <div class='ginput_container ginput_container_text'><input name='parent_1_occupation' id='input_2_39' type='text' value='' class='medium'  tabindex='87' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_40' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_40' >Business Name:</label>
                                                                                                                <div class='ginput_container ginput_container_text'><input name='parent_1_business_name' id='input_2_40' type='text' value='' class='medium'  tabindex='89' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_41' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_41' >Type of Business:</label>
                                                                                                                <div class='ginput_container ginput_container_text'><input name='parent_1_business_type' id='input_2_41' type='text' value='' class='medium'  tabindex='91' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li style='width: 47%;float:right;'>
                                                                                                        <ul id=''>
                                                                                                    <li id='field_2_62' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label gfield_label_before_complex' for='input_2_62_3' >FATHER/LEGAL GUARDIAN:</label>
                                                                                                        <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_2_62'>
                                                                                                            <span id='input_2_62_3_container' class='name_first' >
                                                                                                            <input type='text' name='parent_2_firstname' id='input_2_62_3' value='' aria-label='First name' tabindex='51'   aria-invalid="false" />
                                                                                                            <label for='input_2_62_3' >First</label>
                                                                                                            </span>
                                                                                                            <span id='input_2_62_6_container' class='name_last' >
                                                                                                            <input type='text' name='parent_2_lastname' id='input_2_62_6' value='' aria-label='Last name' tabindex='53'   aria-invalid="false" />
                                                                                                            <label for='input_2_62_6' >Last</label>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_117' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_117' >ID/Passport Number:</label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='parent_2_idno' id='input_2_117' type='text' value='' class='medium'  tabindex='56' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_92' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_92' >Mobile Phone:</label>
                                                                                                        <div class='ginput_container ginput_container_phone'><input name='parent_2_mobile_phone' id='input_2_92' type='text' value='' class='medium' tabindex='80' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_93' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_93' >Work Phone:</label>
                                                                                                        <div class='ginput_container ginput_container_phone'><input name='parent_2_work_phone' id='input_2_93' type='text' value='' class='medium' tabindex='82' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_95' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_95' >Email:</label>
                                                                                                        <div class='ginput_container ginput_container_email'>
                                                                                                            <input name='parent_2_email' id='input_2_95' type='text' value='' class='medium' tabindex='86' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'    aria-invalid="false"/>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_117' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_117' style="width: 100%;"></label>
                                                                                                        <div class='ginput_container ginput_container_text'></div>
                                                                                                        <ul id="parrent-2-addresses" style=" margin-left: 0;">
                                                                                                            <li style='width: 100%;margin-top: 0;' id='field_2_64' class='gfield gf_right_half field_sublabel_above field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label gfield_label_before_complex' for='input_2_64_1' >Residential Address:</label>    
                                                                                                                <div class='ginput_complex ginput_container has_street has_street2 has_city has_zip has_country ginput_container_address gfield_trigger_change' id='input_2_64' >
                                                                                                                    
                                                                                                                    <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                        <label for='input_2_13_6' id='input_2_13_6_label' >Residence Type</label>
                                                                                                                        <input type="checkbox" data-id='parrent_2_residence_type' name='parrent_2_residence_type' value="estate" id='applicants_residence_type' tabindex='' >
                                                                                                                            Complex / Estate
                                                                                                                    </span>
                                                                                                                    <span class='ginput_left parrent_2_residence_type' id='input_2_13_1_container' style='display:none;' >
                                                                                                                    <label for='parent_2_res_estate_name' id='input_2_13_1_label' >Unit/House Number</label>
                                                                                                                    <input type='text' name='parent_2_res_estate_number' id='parrent_1_bus_residence_type' value='' tabindex='19'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_right parrent_2_residence_type' id='input_2_13_1_container' style='display:none;float:right;' >
                                                                                                                    <label for='parent_2_res_estate_name' id='input_2_13_1_label' >Complex/Estate Name</label>
                                                                                                                    <input type='text' name='parent_2_res_estate_name' id='parrent_1_bus_residence_type' value='' tabindex='19'  />
                                                                                                                    </span>
                                                                                                                    
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_64_1_container' >
                                                                                                                    <label for='input_2_64_1' id='input_2_64_1_label'  style='margin-top: 15px;'>House Number</label>
                                                                                                                    <input type='text' name='parent_2_res_house_number' id='input_2_64_1' value='' tabindex='62'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_full address_line_1' id='input_2_64_1_container' >
                                                                                                                    <label for='input_2_64_1' id='input_2_64_1_label' >Street Address</label>
                                                                                                                    <input type='text' name='parent_2_res_street_address' id='input_2_64_1' value='' tabindex='62'  />
                                                                                                                    </span>
                                                                                                                    
                                                                                                                    <span class='ginput_full address_line_2' id='input_2_64_2_container' >
                                                                                                                    <label for='input_2_64_2' id='input_2_64_2_label' >Suburb</label>
                                                                                                                    <input type='text' name='parent_2_res_address_line_2' id='input_2_64_2' value='' tabindex='63'  />
                                                                                                                    </span><span class='ginput_left address_city' id='input_2_64_3_container' >
                                                                                                                    <label for='input_2_64_3' id='input_2_64_3_label' >City</label>
                                                                                                                    <input type='text' name='parent_2_res_city' id='input_2_64_3' value='' tabindex='64'  />
                                                                                                                    </span><input type='hidden' class='gform_hidden' name='input_64.4' id='input_2_64_4' value=''/><span class='ginput_right address_zip' id='input_2_64_5_container' >
                                                                                                                    <label for='input_2_64_5' id='input_2_64_5_label' >ZIP / Postal Code</label>
                                                                                                                    <input type='text' name='parent_2_res_postal_code' id='input_2_64_5' value='' tabindex='65'  />
                                                                                                                    </span>
                                                                                                                    <span class='ginput_left address_country' id='input_2_64_6_container' >
                                                                                                                        <label for='input_2_64_6' id='input_2_64_6_label' >Country</label>
                                                                                                                        <select name='parent_2_res_country' id='input_2_64_6' tabindex='66' >
                                                                                                                            <option value='' ></option>
                                                                                                                            <option value='Afghanistan' >Afghanistan</option>
                                                                                                                            <option value='Albania' >Albania</option>
                                                                                                                            <option value='Algeria' >Algeria</option>
                                                                                                                            <option value='American Samoa' >American Samoa</option>
                                                                                                                            <option value='Andorra' >Andorra</option>
                                                                                                                            <option value='Angola' >Angola</option>
                                                                                                                            <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                                                                                                                            <option value='Argentina' >Argentina</option>
                                                                                                                            <option value='Armenia' >Armenia</option>
                                                                                                                            <option value='Australia' >Australia</option>
                                                                                                                            <option value='Austria' >Austria</option>
                                                                                                                            <option value='Azerbaijan' >Azerbaijan</option>
                                                                                                                            <option value='Bahamas' >Bahamas</option>
                                                                                                                            <option value='Bahrain' >Bahrain</option>
                                                                                                                            <option value='Bangladesh' >Bangladesh</option>
                                                                                                                            <option value='Barbados' >Barbados</option>
                                                                                                                            <option value='Belarus' >Belarus</option>
                                                                                                                            <option value='Belgium' >Belgium</option>
                                                                                                                            <option value='Belize' >Belize</option>
                                                                                                                            <option value='Benin' >Benin</option>
                                                                                                                            <option value='Bermuda' >Bermuda</option>
                                                                                                                            <option value='Bhutan' >Bhutan</option>
                                                                                                                            <option value='Bolivia' >Bolivia</option>
                                                                                                                            <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                                                                                                                            <option value='Botswana' >Botswana</option>
                                                                                                                            <option value='Brazil' >Brazil</option>
                                                                                                                            <option value='Brunei' >Brunei</option>
                                                                                                                            <option value='Bulgaria' >Bulgaria</option>
                                                                                                                            <option value='Burkina Faso' >Burkina Faso</option>
                                                                                                                            <option value='Burundi' >Burundi</option>
                                                                                                                            <option value='Cambodia' >Cambodia</option>
                                                                                                                            <option value='Cameroon' >Cameroon</option>
                                                                                                                            <option value='Canada' >Canada</option>
                                                                                                                            <option value='Cape Verde' >Cape Verde</option>
                                                                                                                            <option value='Cayman Islands' >Cayman Islands</option>
                                                                                                                            <option value='Central African Republic' >Central African Republic</option>
                                                                                                                            <option value='Chad' >Chad</option>
                                                                                                                            <option value='Chile' >Chile</option>
                                                                                                                            <option value='China' >China</option>
                                                                                                                            <option value='Colombia' >Colombia</option>
                                                                                                                            <option value='Comoros' >Comoros</option>
                                                                                                                            <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                                                                                                                            <option value='Congo, Republic of the' >Congo, Republic of the</option>
                                                                                                                            <option value='Costa Rica' >Costa Rica</option>
                                                                                                                            <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
                                                                                                                            <option value='Croatia' >Croatia</option>
                                                                                                                            <option value='Cuba' >Cuba</option>
                                                                                                                            <option value='Curaçao' >Curaçao</option>
                                                                                                                            <option value='Cyprus' >Cyprus</option>
                                                                                                                            <option value='Czech Republic' >Czech Republic</option>
                                                                                                                            <option value='Denmark' >Denmark</option>
                                                                                                                            <option value='Djibouti' >Djibouti</option>
                                                                                                                            <option value='Dominica' >Dominica</option>
                                                                                                                            <option value='Dominican Republic' >Dominican Republic</option>
                                                                                                                            <option value='East Timor' >East Timor</option>
                                                                                                                            <option value='Ecuador' >Ecuador</option>
                                                                                                                            <option value='Egypt' >Egypt</option>
                                                                                                                            <option value='El Salvador' >El Salvador</option>
                                                                                                                            <option value='Equatorial Guinea' >Equatorial Guinea</option>
                                                                                                                            <option value='Eritrea' >Eritrea</option>
                                                                                                                            <option value='Estonia' >Estonia</option>
                                                                                                                            <option value='Ethiopia' >Ethiopia</option>
                                                                                                                            <option value='Faroe Islands' >Faroe Islands</option>
                                                                                                                            <option value='Fiji' >Fiji</option>
                                                                                                                            <option value='Finland' >Finland</option>
                                                                                                                            <option value='France' >France</option>
                                                                                                                            <option value='French Polynesia' >French Polynesia</option>
                                                                                                                            <option value='Gabon' >Gabon</option>
                                                                                                                            <option value='Gambia' >Gambia</option>
                                                                                                                            <option value='Georgia' >Georgia</option>
                                                                                                                            <option value='Germany' >Germany</option>
                                                                                                                            <option value='Ghana' >Ghana</option>
                                                                                                                            <option value='Greece' >Greece</option>
                                                                                                                            <option value='Greenland' >Greenland</option>
                                                                                                                            <option value='Grenada' >Grenada</option>
                                                                                                                            <option value='Guam' >Guam</option>
                                                                                                                            <option value='Guatemala' >Guatemala</option>
                                                                                                                            <option value='Guinea' >Guinea</option>
                                                                                                                            <option value='Guinea-Bissau' >Guinea-Bissau</option>
                                                                                                                            <option value='Guyana' >Guyana</option>
                                                                                                                            <option value='Haiti' >Haiti</option>
                                                                                                                            <option value='Honduras' >Honduras</option>
                                                                                                                            <option value='Hong Kong' >Hong Kong</option>
                                                                                                                            <option value='Hungary' >Hungary</option>
                                                                                                                            <option value='Iceland' >Iceland</option>
                                                                                                                            <option value='India' >India</option>
                                                                                                                            <option value='Indonesia' >Indonesia</option>
                                                                                                                            <option value='Iran' >Iran</option>
                                                                                                                            <option value='Iraq' >Iraq</option>
                                                                                                                            <option value='Ireland' >Ireland</option>
                                                                                                                            <option value='Israel' >Israel</option>
                                                                                                                            <option value='Italy' >Italy</option>
                                                                                                                            <option value='Jamaica' >Jamaica</option>
                                                                                                                            <option value='Japan' >Japan</option>
                                                                                                                            <option value='Jordan' >Jordan</option>
                                                                                                                            <option value='Kazakhstan' >Kazakhstan</option>
                                                                                                                            <option value='Kenya' >Kenya</option>
                                                                                                                            <option value='Kiribati' >Kiribati</option>
                                                                                                                            <option value='North Korea' >North Korea</option>
                                                                                                                            <option value='South Korea' >South Korea</option>
                                                                                                                            <option value='Kosovo' >Kosovo</option>
                                                                                                                            <option value='Kuwait' >Kuwait</option>
                                                                                                                            <option value='Kyrgyzstan' >Kyrgyzstan</option>
                                                                                                                            <option value='Laos' >Laos</option>
                                                                                                                            <option value='Latvia' >Latvia</option>
                                                                                                                            <option value='Lebanon' >Lebanon</option>
                                                                                                                            <option value='Lesotho' >Lesotho</option>
                                                                                                                            <option value='Liberia' >Liberia</option>
                                                                                                                            <option value='Libya' >Libya</option>
                                                                                                                            <option value='Liechtenstein' >Liechtenstein</option>
                                                                                                                            <option value='Lithuania' >Lithuania</option>
                                                                                                                            <option value='Luxembourg' >Luxembourg</option>
                                                                                                                            <option value='Macedonia' >Macedonia</option>
                                                                                                                            <option value='Madagascar' >Madagascar</option>
                                                                                                                            <option value='Malawi' >Malawi</option>
                                                                                                                            <option value='Malaysia' >Malaysia</option>
                                                                                                                            <option value='Maldives' >Maldives</option>
                                                                                                                            <option value='Mali' >Mali</option>
                                                                                                                            <option value='Malta' >Malta</option>
                                                                                                                            <option value='Marshall Islands' >Marshall Islands</option>
                                                                                                                            <option value='Mauritania' >Mauritania</option>
                                                                                                                            <option value='Mauritius' >Mauritius</option>
                                                                                                                            <option value='Mexico' >Mexico</option>
                                                                                                                            <option value='Micronesia' >Micronesia</option>
                                                                                                                            <option value='Moldova' >Moldova</option>
                                                                                                                            <option value='Monaco' >Monaco</option>
                                                                                                                            <option value='Mongolia' >Mongolia</option>
                                                                                                                            <option value='Montenegro' >Montenegro</option>
                                                                                                                            <option value='Morocco' >Morocco</option>
                                                                                                                            <option value='Mozambique' >Mozambique</option>
                                                                                                                            <option value='Myanmar' >Myanmar</option>
                                                                                                                            <option value='Namibia' >Namibia</option>
                                                                                                                            <option value='Nauru' >Nauru</option>
                                                                                                                            <option value='Nepal' >Nepal</option>
                                                                                                                            <option value='Netherlands' >Netherlands</option>
                                                                                                                            <option value='New Zealand' >New Zealand</option>
                                                                                                                            <option value='Nicaragua' >Nicaragua</option>
                                                                                                                            <option value='Niger' >Niger</option>
                                                                                                                            <option value='Nigeria' >Nigeria</option>
                                                                                                                            <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                                                                                                                            <option value='Norway' >Norway</option>
                                                                                                                            <option value='Oman' >Oman</option>
                                                                                                                            <option value='Pakistan' >Pakistan</option>
                                                                                                                            <option value='Palau' >Palau</option>
                                                                                                                            <option value='Palestine, State of' >Palestine, State of</option>
                                                                                                                            <option value='Panama' >Panama</option>
                                                                                                                            <option value='Papua New Guinea' >Papua New Guinea</option>
                                                                                                                            <option value='Paraguay' >Paraguay</option>
                                                                                                                            <option value='Peru' >Peru</option>
                                                                                                                            <option value='Philippines' >Philippines</option>
                                                                                                                            <option value='Poland' >Poland</option>
                                                                                                                            <option value='Portugal' >Portugal</option>
                                                                                                                            <option value='Puerto Rico' >Puerto Rico</option>
                                                                                                                            <option value='Qatar' >Qatar</option>
                                                                                                                            <option value='Romania' >Romania</option>
                                                                                                                            <option value='Russia' >Russia</option>
                                                                                                                            <option value='Rwanda' >Rwanda</option>
                                                                                                                            <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                                                                                                                            <option value='Saint Lucia' >Saint Lucia</option>
                                                                                                                            <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                                                                                                                            <option value='Samoa' >Samoa</option>
                                                                                                                            <option value='San Marino' >San Marino</option>
                                                                                                                            <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                                                                                                                            <option value='Saudi Arabia' >Saudi Arabia</option>
                                                                                                                            <option value='Senegal' >Senegal</option>
                                                                                                                            <option value='Serbia' >Serbia</option>
                                                                                                                            <option value='Seychelles' >Seychelles</option>
                                                                                                                            <option value='Sierra Leone' >Sierra Leone</option>
                                                                                                                            <option value='Singapore' >Singapore</option>
                                                                                                                            <option value='Sint Maarten' >Sint Maarten</option>
                                                                                                                            <option value='Slovakia' >Slovakia</option>
                                                                                                                            <option value='Slovenia' >Slovenia</option>
                                                                                                                            <option value='Solomon Islands' >Solomon Islands</option>
                                                                                                                            <option value='Somalia' >Somalia</option>
                                                                                                                            <option value='South Africa' selected='selected'>South Africa</option>
                                                                                                                            <option value='Spain' >Spain</option>
                                                                                                                            <option value='Sri Lanka' >Sri Lanka</option>
                                                                                                                            <option value='Sudan' >Sudan</option>
                                                                                                                            <option value='Sudan, South' >Sudan, South</option>
                                                                                                                            <option value='Suriname' >Suriname</option>
                                                                                                                            <option value='Swaziland' >Swaziland</option>
                                                                                                                            <option value='Sweden' >Sweden</option>
                                                                                                                            <option value='Switzerland' >Switzerland</option>
                                                                                                                            <option value='Syria' >Syria</option>
                                                                                                                            <option value='Taiwan' >Taiwan</option>
                                                                                                                            <option value='Tajikistan' >Tajikistan</option>
                                                                                                                            <option value='Tanzania' >Tanzania</option>
                                                                                                                            <option value='Thailand' >Thailand</option>
                                                                                                                            <option value='Togo' >Togo</option>
                                                                                                                            <option value='Tonga' >Tonga</option>
                                                                                                                            <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                                                                                                                            <option value='Tunisia' >Tunisia</option>
                                                                                                                            <option value='Turkey' >Turkey</option>
                                                                                                                            <option value='Turkmenistan' >Turkmenistan</option>
                                                                                                                            <option value='Tuvalu' >Tuvalu</option>
                                                                                                                            <option value='Uganda' >Uganda</option>
                                                                                                                            <option value='Ukraine' >Ukraine</option>
                                                                                                                            <option value='United Arab Emirates' >United Arab Emirates</option>
                                                                                                                            <option value='United Kingdom' >United Kingdom</option>
                                                                                                                            <option value='United States' >United States</option>
                                                                                                                            <option value='Uruguay' >Uruguay</option>
                                                                                                                            <option value='Uzbekistan' >Uzbekistan</option>
                                                                                                                            <option value='Vanuatu' >Vanuatu</option>
                                                                                                                            <option value='Vatican City' >Vatican City</option>
                                                                                                                            <option value='Venezuela' >Venezuela</option>
                                                                                                                            <option value='Vietnam' >Vietnam</option>
                                                                                                                            <option value='Virgin Islands, British' >Virgin Islands, British</option>
                                                                                                                            <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                                                                                                                            <option value='Yemen' >Yemen</option>
                                                                                                                            <option value='Zambia' >Zambia</option>
                                                                                                                            <option value='Zimbabwe' >Zimbabwe</option>
                                                                                                                        </select>
                                                                                                                    </span>
                                                                                                                    <div class='gf_clear gf_clear_complex'></div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li style='width: 100%;' id='field_2_90' class='gfield gf_right_half field_sublabel_above field_description_above gfield_visibility_visible' >
                                                                                                            <label class='gfield_label gfield_label_before_complex' for='input_2_90_1' >Postal Address:</label>
                                                                                                            <div class='gfield_description'>If different to residential address.</div>
                                                                                                            <div class='ginput_complex ginput_container has_street has_street2 has_city has_zip has_country ginput_container_address gfield_trigger_change' id='input_2_90' >
                                                                                                                <span class='ginput_left address_country' id='input_2_13_6_container' >
                                                                                                                <label for='input_2_13_6' id='input_2_13_6_label' >P.O.Box</label>
                                                                                                                    <input type="checkbox"  name='parrent_2_postal_type' value="P.O.Box" id='parrent_1_postal_type' tabindex='' >
                                                                                                                </span>
                                                                                                                <span class='ginput_right address_country' id='input_2_13_6_container' style="float:right" >
                                                                                                                    <label for='input_2_13_6' id='input_2_13_6_label' >Private Bag</label>
                                                                                                                    <input type="checkbox"  name='parrent_2_postal_type' value="Private Bag" id='parrent_1_postal_type' tabindex='' >
                                                                                                                </span>

                                                                                                                <span class='ginput_full address_line_1' id='input_2_37_1_container' >
                                                                                                                <label for='input_2_37_1' id='input_2_37_1_label' >Number</label>
                                                                                                                <input type='text' name='parent_2_postal_number' id='input_2_37_1' value='' tabindex='67'  />
                                                                                                                </span>
                                                                                                                <span class='ginput_full address_line_1' id='input_2_37_1_container' >
                                                                                                                <label for='input_2_37_1' id='input_2_37_1_label' >Suite (if applicable)</label>
                                                                                                                <input type='text' name='parent_2_postal_suite' id='input_2_37_1' value='' tabindex='67'  />
                                                                                                                </span>
                                                                                                                <label for='input_2_90_2' id='input_2_90_2_label' >Suburb</label>
                                                                                                                <input type='text' name='parent_2_postal_address_line_2' id='input_2_90_2' value='' tabindex='73'  />
                                                                                                                </span><span class='ginput_left address_city' id='input_2_90_3_container' >
                                                                                                                <label for='input_2_90_3' id='input_2_90_3_label' >City</label>
                                                                                                                <input type='text' name='parent_2_postal_city' id='input_2_90_3' value='' tabindex='74'  />
                                                                                                                </span><input type='hidden' class='gform_hidden' name='input_90.4' id='input_2_90_4' value=''/><span class='ginput_right address_zip' id='input_2_90_5_container' >
                                                                                                                <label for='input_2_90_5' id='input_2_90_5_label' >ZIP / Postal Code</label>
                                                                                                                <input type='text' name='parent_2_postal_postal_code' id='input_2_90_5' value='' tabindex='75'  />
                                                                                                                </span>
                                                                                                                <span class='ginput_left address_country' id='input_2_90_6_container' >
                                                                                                                    <label for='input_2_90_6' id='input_2_90_6_label' >Country</label>
                                                                                                                    <select name='parent_2_postal_country' id='input_2_90_6' tabindex='76' >
                                                                                                                        <option value='' ></option>
                                                                                                                        <option value='Afghanistan' >Afghanistan</option>
                                                                                                                        <option value='Albania' >Albania</option>
                                                                                                                        <option value='Algeria' >Algeria</option>
                                                                                                                        <option value='American Samoa' >American Samoa</option>
                                                                                                                        <option value='Andorra' >Andorra</option>
                                                                                                                        <option value='Angola' >Angola</option>
                                                                                                                        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                                                                                                                        <option value='Argentina' >Argentina</option>
                                                                                                                        <option value='Armenia' >Armenia</option>
                                                                                                                        <option value='Australia' >Australia</option>
                                                                                                                        <option value='Austria' >Austria</option>
                                                                                                                        <option value='Azerbaijan' >Azerbaijan</option>
                                                                                                                        <option value='Bahamas' >Bahamas</option>
                                                                                                                        <option value='Bahrain' >Bahrain</option>
                                                                                                                        <option value='Bangladesh' >Bangladesh</option>
                                                                                                                        <option value='Barbados' >Barbados</option>
                                                                                                                        <option value='Belarus' >Belarus</option>
                                                                                                                        <option value='Belgium' >Belgium</option>
                                                                                                                        <option value='Belize' >Belize</option>
                                                                                                                        <option value='Benin' >Benin</option>
                                                                                                                        <option value='Bermuda' >Bermuda</option>
                                                                                                                        <option value='Bhutan' >Bhutan</option>
                                                                                                                        <option value='Bolivia' >Bolivia</option>
                                                                                                                        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                                                                                                                        <option value='Botswana' >Botswana</option>
                                                                                                                        <option value='Brazil' >Brazil</option>
                                                                                                                        <option value='Brunei' >Brunei</option>
                                                                                                                        <option value='Bulgaria' >Bulgaria</option>
                                                                                                                        <option value='Burkina Faso' >Burkina Faso</option>
                                                                                                                        <option value='Burundi' >Burundi</option>
                                                                                                                        <option value='Cambodia' >Cambodia</option>
                                                                                                                        <option value='Cameroon' >Cameroon</option>
                                                                                                                        <option value='Canada' >Canada</option>
                                                                                                                        <option value='Cape Verde' >Cape Verde</option>
                                                                                                                        <option value='Cayman Islands' >Cayman Islands</option>
                                                                                                                        <option value='Central African Republic' >Central African Republic</option>
                                                                                                                        <option value='Chad' >Chad</option>
                                                                                                                        <option value='Chile' >Chile</option>
                                                                                                                        <option value='China' >China</option>
                                                                                                                        <option value='Colombia' >Colombia</option>
                                                                                                                        <option value='Comoros' >Comoros</option>
                                                                                                                        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                                                                                                                        <option value='Congo, Republic of the' >Congo, Republic of the</option>
                                                                                                                        <option value='Costa Rica' >Costa Rica</option>
                                                                                                                        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
                                                                                                                        <option value='Croatia' >Croatia</option>
                                                                                                                        <option value='Cuba' >Cuba</option>
                                                                                                                        <option value='Curaçao' >Curaçao</option>
                                                                                                                        <option value='Cyprus' >Cyprus</option>
                                                                                                                        <option value='Czech Republic' >Czech Republic</option>
                                                                                                                        <option value='Denmark' >Denmark</option>
                                                                                                                        <option value='Djibouti' >Djibouti</option>
                                                                                                                        <option value='Dominica' >Dominica</option>
                                                                                                                        <option value='Dominican Republic' >Dominican Republic</option>
                                                                                                                        <option value='East Timor' >East Timor</option>
                                                                                                                        <option value='Ecuador' >Ecuador</option>
                                                                                                                        <option value='Egypt' >Egypt</option>
                                                                                                                        <option value='El Salvador' >El Salvador</option>
                                                                                                                        <option value='Equatorial Guinea' >Equatorial Guinea</option>
                                                                                                                        <option value='Eritrea' >Eritrea</option>
                                                                                                                        <option value='Estonia' >Estonia</option>
                                                                                                                        <option value='Ethiopia' >Ethiopia</option>
                                                                                                                        <option value='Faroe Islands' >Faroe Islands</option>
                                                                                                                        <option value='Fiji' >Fiji</option>
                                                                                                                        <option value='Finland' >Finland</option>
                                                                                                                        <option value='France' >France</option>
                                                                                                                        <option value='French Polynesia' >French Polynesia</option>
                                                                                                                        <option value='Gabon' >Gabon</option>
                                                                                                                        <option value='Gambia' >Gambia</option>
                                                                                                                        <option value='Georgia' >Georgia</option>
                                                                                                                        <option value='Germany' >Germany</option>
                                                                                                                        <option value='Ghana' >Ghana</option>
                                                                                                                        <option value='Greece' >Greece</option>
                                                                                                                        <option value='Greenland' >Greenland</option>
                                                                                                                        <option value='Grenada' >Grenada</option>
                                                                                                                        <option value='Guam' >Guam</option>
                                                                                                                        <option value='Guatemala' >Guatemala</option>
                                                                                                                        <option value='Guinea' >Guinea</option>
                                                                                                                        <option value='Guinea-Bissau' >Guinea-Bissau</option>
                                                                                                                        <option value='Guyana' >Guyana</option>
                                                                                                                        <option value='Haiti' >Haiti</option>
                                                                                                                        <option value='Honduras' >Honduras</option>
                                                                                                                        <option value='Hong Kong' >Hong Kong</option>
                                                                                                                        <option value='Hungary' >Hungary</option>
                                                                                                                        <option value='Iceland' >Iceland</option>
                                                                                                                        <option value='India' >India</option>
                                                                                                                        <option value='Indonesia' >Indonesia</option>
                                                                                                                        <option value='Iran' >Iran</option>
                                                                                                                        <option value='Iraq' >Iraq</option>
                                                                                                                        <option value='Ireland' >Ireland</option>
                                                                                                                        <option value='Israel' >Israel</option>
                                                                                                                        <option value='Italy' >Italy</option>
                                                                                                                        <option value='Jamaica' >Jamaica</option>
                                                                                                                        <option value='Japan' >Japan</option>
                                                                                                                        <option value='Jordan' >Jordan</option>
                                                                                                                        <option value='Kazakhstan' >Kazakhstan</option>
                                                                                                                        <option value='Kenya' >Kenya</option>
                                                                                                                        <option value='Kiribati' >Kiribati</option>
                                                                                                                        <option value='North Korea' >North Korea</option>
                                                                                                                        <option value='South Korea' >South Korea</option>
                                                                                                                        <option value='Kosovo' >Kosovo</option>
                                                                                                                        <option value='Kuwait' >Kuwait</option>
                                                                                                                        <option value='Kyrgyzstan' >Kyrgyzstan</option>
                                                                                                                        <option value='Laos' >Laos</option>
                                                                                                                        <option value='Latvia' >Latvia</option>
                                                                                                                        <option value='Lebanon' >Lebanon</option>
                                                                                                                        <option value='Lesotho' >Lesotho</option>
                                                                                                                        <option value='Liberia' >Liberia</option>
                                                                                                                        <option value='Libya' >Libya</option>
                                                                                                                        <option value='Liechtenstein' >Liechtenstein</option>
                                                                                                                        <option value='Lithuania' >Lithuania</option>
                                                                                                                        <option value='Luxembourg' >Luxembourg</option>
                                                                                                                        <option value='Macedonia' >Macedonia</option>
                                                                                                                        <option value='Madagascar' >Madagascar</option>
                                                                                                                        <option value='Malawi' >Malawi</option>
                                                                                                                        <option value='Malaysia' >Malaysia</option>
                                                                                                                        <option value='Maldives' >Maldives</option>
                                                                                                                        <option value='Mali' >Mali</option>
                                                                                                                        <option value='Malta' >Malta</option>
                                                                                                                        <option value='Marshall Islands' >Marshall Islands</option>
                                                                                                                        <option value='Mauritania' >Mauritania</option>
                                                                                                                        <option value='Mauritius' >Mauritius</option>
                                                                                                                        <option value='Mexico' >Mexico</option>
                                                                                                                        <option value='Micronesia' >Micronesia</option>
                                                                                                                        <option value='Moldova' >Moldova</option>
                                                                                                                        <option value='Monaco' >Monaco</option>
                                                                                                                        <option value='Mongolia' >Mongolia</option>
                                                                                                                        <option value='Montenegro' >Montenegro</option>
                                                                                                                        <option value='Morocco' >Morocco</option>
                                                                                                                        <option value='Mozambique' >Mozambique</option>
                                                                                                                        <option value='Myanmar' >Myanmar</option>
                                                                                                                        <option value='Namibia' >Namibia</option>
                                                                                                                        <option value='Nauru' >Nauru</option>
                                                                                                                        <option value='Nepal' >Nepal</option>
                                                                                                                        <option value='Netherlands' >Netherlands</option>
                                                                                                                        <option value='New Zealand' >New Zealand</option>
                                                                                                                        <option value='Nicaragua' >Nicaragua</option>
                                                                                                                        <option value='Niger' >Niger</option>
                                                                                                                        <option value='Nigeria' >Nigeria</option>
                                                                                                                        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                                                                                                                        <option value='Norway' >Norway</option>
                                                                                                                        <option value='Oman' >Oman</option>
                                                                                                                        <option value='Pakistan' >Pakistan</option>
                                                                                                                        <option value='Palau' >Palau</option>
                                                                                                                        <option value='Palestine, State of' >Palestine, State of</option>
                                                                                                                        <option value='Panama' >Panama</option>
                                                                                                                        <option value='Papua New Guinea' >Papua New Guinea</option>
                                                                                                                        <option value='Paraguay' >Paraguay</option>
                                                                                                                        <option value='Peru' >Peru</option>
                                                                                                                        <option value='Philippines' >Philippines</option>
                                                                                                                        <option value='Poland' >Poland</option>
                                                                                                                        <option value='Portugal' >Portugal</option>
                                                                                                                        <option value='Puerto Rico' >Puerto Rico</option>
                                                                                                                        <option value='Qatar' >Qatar</option>
                                                                                                                        <option value='Romania' >Romania</option>
                                                                                                                        <option value='Russia' >Russia</option>
                                                                                                                        <option value='Rwanda' >Rwanda</option>
                                                                                                                        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                                                                                                                        <option value='Saint Lucia' >Saint Lucia</option>
                                                                                                                        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                                                                                                                        <option value='Samoa' >Samoa</option>
                                                                                                                        <option value='San Marino' >San Marino</option>
                                                                                                                        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                                                                                                                        <option value='Saudi Arabia' >Saudi Arabia</option>
                                                                                                                        <option value='Senegal' >Senegal</option>
                                                                                                                        <option value='Serbia' >Serbia</option>
                                                                                                                        <option value='Seychelles' >Seychelles</option>
                                                                                                                        <option value='Sierra Leone' >Sierra Leone</option>
                                                                                                                        <option value='Singapore' >Singapore</option>
                                                                                                                        <option value='Sint Maarten' >Sint Maarten</option>
                                                                                                                        <option value='Slovakia' >Slovakia</option>
                                                                                                                        <option value='Slovenia' >Slovenia</option>
                                                                                                                        <option value='Solomon Islands' >Solomon Islands</option>
                                                                                                                        <option value='Somalia' >Somalia</option>
                                                                                                                        <option value='South Africa' selected='selected'>South Africa</option>
                                                                                                                        <option value='Spain' >Spain</option>
                                                                                                                        <option value='Sri Lanka' >Sri Lanka</option>
                                                                                                                        <option value='Sudan' >Sudan</option>
                                                                                                                        <option value='Sudan, South' >Sudan, South</option>
                                                                                                                        <option value='Suriname' >Suriname</option>
                                                                                                                        <option value='Swaziland' >Swaziland</option>
                                                                                                                        <option value='Sweden' >Sweden</option>
                                                                                                                        <option value='Switzerland' >Switzerland</option>
                                                                                                                        <option value='Syria' >Syria</option>
                                                                                                                        <option value='Taiwan' >Taiwan</option>
                                                                                                                        <option value='Tajikistan' >Tajikistan</option>
                                                                                                                        <option value='Tanzania' >Tanzania</option>
                                                                                                                        <option value='Thailand' >Thailand</option>
                                                                                                                        <option value='Togo' >Togo</option>
                                                                                                                        <option value='Tonga' >Tonga</option>
                                                                                                                        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                                                                                                                        <option value='Tunisia' >Tunisia</option>
                                                                                                                        <option value='Turkey' >Turkey</option>
                                                                                                                        <option value='Turkmenistan' >Turkmenistan</option>
                                                                                                                        <option value='Tuvalu' >Tuvalu</option>
                                                                                                                        <option value='Uganda' >Uganda</option>
                                                                                                                        <option value='Ukraine' >Ukraine</option>
                                                                                                                        <option value='United Arab Emirates' >United Arab Emirates</option>
                                                                                                                        <option value='United Kingdom' >United Kingdom</option>
                                                                                                                        <option value='United States' >United States</option>
                                                                                                                        <option value='Uruguay' >Uruguay</option>
                                                                                                                        <option value='Uzbekistan' >Uzbekistan</option>
                                                                                                                        <option value='Vanuatu' >Vanuatu</option>
                                                                                                                        <option value='Vatican City' >Vatican City</option>
                                                                                                                        <option value='Venezuela' >Venezuela</option>
                                                                                                                        <option value='Vietnam' >Vietnam</option>
                                                                                                                        <option value='Virgin Islands, British' >Virgin Islands, British</option>
                                                                                                                        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                                                                                                                        <option value='Yemen' >Yemen</option>
                                                                                                                        <option value='Zambia' >Zambia</option>
                                                                                                                        <option value='Zimbabwe' >Zimbabwe</option>
                                                                                                                    </select>
                                                                                                                </span>
                                                                                                                <div class='gf_clear gf_clear_complex'></div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li id='field_2_96' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_96' >Occupation:</label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='parent_2_occupation' id='input_2_96' type='text' value='' class='medium'  tabindex='88' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_97' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_97' >Business Name:</label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='parent_2_business_name' id='input_2_97' type='text' value='' class='medium'  tabindex='90' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>
                                                                                                    <li id='field_2_98' class='gfield gf_right_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_98' >Type of Business:</label>
                                                                                                        <div class='ginput_container ginput_container_text'><input name='parent_2_business_type' id='input_2_98' type='text' value='' class='medium'  tabindex='92' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                    </li>  
                                                                                                </ul>
                                                                                                    <li style="padding-top: 33px;" id='field_2_44' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>PARTICULARS OF SIBLINGS</h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_21' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label' for='input_2_21' >Number of siblings:</label>
                                                                                                        <div class='ginput_container ginput_container_select'>
                                                                                                            <select name='num_siblings' id='num_siblings' onchange='gf_apply_rules(2,[0]);' class='medium gfield_select' tabindex='35'   aria-invalid="false">
                                                                                                                <option value='' >-- Please Select --</option>
                                                                                                                <?php 
                                                                                                                for($i = 0; $i <= 10; $i++){
                                                                                                                ?>
                                                                                                                
                                                                                                                <option value='<?php echo $i; ?>' ><?php echo $i; ?></option>
                                                                                                                
                                                                                                                <?php
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <ul id="siblings">
                                                                                                            <li id='field_2_45' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label gfield_label_before_complex' for='input_2_45_3' >Sibling 1:</label>
                                                                                                                <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_2_45'>
                                                                                                                    <span id='input_2_45_3_container' class='name_first' >
                                                                                                                    <input type='text' name='sibling_1_firstname' id='input_2_45_3' value='' aria-label='First name' tabindex='118'   aria-invalid="false" />
                                                                                                                    <label for='input_2_45_3' >First</label>
                                                                                                                    </span>
                                                                                                                    <span id='input_2_45_6_container' class='name_last' >
                                                                                                                    <input type='text' name='sibling_1_surname' id='input_2_45_6' value='' aria-label='Last name' tabindex='120'   aria-invalid="false" />
                                                                                                                    <label for='input_2_45_6' >Last</label>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li id='field_2_46' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_46' >Present School:</label>
                                                                                                                <div class='ginput_container ginput_container_text'><input name='sibling_1_present_school' id='input_2_46' type='text' value='' class='medium'  tabindex='127' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout("gf_apply_rules(2,[0])", 300);'   aria-invalid="false" /></div>
                                                                                                            </li>
                                                                                                            <li id='field_2_47' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                                <label class='gfield_label' for='input_2_47' >Present Grade:</label>
                                                                                                                <div class='ginput_container ginput_container_text'>
                                                                                                                    <select name='sibling_1_present_grade' id='num_siblings' onchange='gf_apply_rules(2,[0]);' class='medium gfield_select' tabindex='35'   aria-invalid="false">
                                                                                                                        <option value='' >-- Please Select --</option>
                                                                                                                        <?php 
                                                                                                                        for($i = 1; $i <= 12; $i++){
                                                                                                                        ?>

                                                                                                                        <option value='<?php echo $i; ?>' ><?php echo $i; ?></option>

                                                                                                                        <?php
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li id='field_2_75' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'></h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_76' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>PLEASE INDICATE:</h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_77' class='gfield gf_list_2col field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >- With whom the student lives:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_77'>
                                                                                                                <li class='gchoice_2_77_1'>
                                                                                                                    <input name='student_lives_with_parent_1' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Mother'  id='choice_2_77_1' tabindex='149'  />
                                                                                                                    <label for='choice_2_77_1' id='label_2_77_1'>Mother</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_77_2'>
                                                                                                                    <input name='student_lives_with_parent_2' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Father'  id='choice_2_77_2' tabindex='150'  />
                                                                                                                    <label for='choice_2_77_2' id='label_2_77_2'>Father</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='student_lives_with_parent_3' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Mother)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Mother)</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='astudent_lives_with_parent_4' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Father)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Father)</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_78' class='gfield gf_list_2col field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >- Accounts to be addressed to:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_78'>
                                                                                                                <li class='gchoice_2_78_1'>
                                                                                                                    <input name='account_payer_parent_1' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Mother'  id='choice_2_78_1' tabindex='151'  />
                                                                                                                    <label for='choice_2_78_1' id='label_2_78_1'>Mother</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_78_2'>
                                                                                                                    <input name='account_payer_parent_2' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Father'  id='choice_2_78_2' tabindex='152'  />
                                                                                                                    <label for='choice_2_78_2' id='label_2_78_2'>Father</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='account_payer_parent_3' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Mother)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Mother)</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='account_payer_parent_4' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Father)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Father)</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_79' class='gfield gf_list_2col field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >- Correspondence to be addressed to:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_79'>
                                                                                                                <li class='gchoice_2_79_1'>
                                                                                                                    <input name='correspondence_to_parent_1' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value=Mother'  id='choice_2_79_1' tabindex='153'  />
                                                                                                                    <label for='choice_2_79_1' id='label_2_79_1'>Mother</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_79_2'>
                                                                                                                    <input name='correspondence_to_parent_2' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Father'  id='choice_2_79_2' tabindex='154'  />
                                                                                                                    <label for='choice_2_79_2' id='label_2_79_2'>Father</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='correspondence_to_parent_3' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Mother)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Mother)</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='correspondence_to_parent_4' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Father)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Father)</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_80' class='gfield gf_list_2col field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >- Reports to be addressed to:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_80'>
                                                                                                                <li class='gchoice_2_80_1'>
                                                                                                                    <input name='reports_to_parent_1' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Mother'  id='choice_2_80_1' tabindex='155'  />
                                                                                                                    <label for='choice_2_80_1' id='label_2_80_1'>Mother</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='reports_to_parent_2' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Father'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Father</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='reports_to_parent_3' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Mother)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Mother)</label>
                                                                                                                </li>
                                                                                                                <li class='gchoice_2_80_2'>
                                                                                                                    <input name='reports_to_parent_4' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='Legal Guardian (Father)'  id='choice_2_80_2' tabindex='156'  />
                                                                                                                    <label for='choice_2_80_2' id='label_2_80_2'>Legal Guardian (Father)</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_120' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >How did you hear about us?<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_radio'>
                                                                                                            <ul class='gfield_radio' id='input_2_120'>
                                                                                                                <li class='gchoice_2_120_0'><input name='how_did_you_hear_about_us' type='radio' value='Word of Mouth'  id='choice_2_120_0' tabindex='159'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_0' id='label_2_120_0'>Word of Mouth</label></li>
                                                                                                                <li class='gchoice_2_120_1'><input name='how_did_you_hear_about_us' type='radio' value='Website'  id='choice_2_120_1' tabindex='160'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_1' id='label_2_120_1'>Website</label></li>
                                                                                                                <li class='gchoice_2_120_2'><input name='how_did_you_hear_about_us' type='radio' value='Facebook'  id='choice_2_120_2' tabindex='161'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_2' id='label_2_120_2'>Facebook</label></li>
                                                                                                                <li class='gchoice_2_120_3'><input name='how_did_you_hear_about_us' type='radio' value='Instagram'  id='choice_2_120_3' tabindex='162'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_3' id='label_2_120_3'>Instagram</label></li>
                                                                                                                <li class='gchoice_2_120_4'><input name='how_did_you_hear_about_us' type='radio' value='Google'  id='choice_2_120_4' tabindex='163'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_4' id='label_2_120_4'>Google</label></li>
                                                                                                                <li class='gchoice_2_120_5'><input name='how_did_you_hear_about_us' type='radio' value='Friend with child at school'  id='choice_2_120_5' tabindex='164'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_5' id='label_2_120_5'>Friend with child at school</label></li>
                                                                                                                <li class='gchoice_2_120_6'><input name='how_did_you_hear_about_us' type='radio' value='Newspaper'  id='choice_2_120_6' tabindex='165'  onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);'  /><label for='choice_2_120_6' id='label_2_120_6'>Newspaper</label></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <!--<li id='field_2_84' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>Please read through the Terms &amp; Conditions, accept them, and submit your application at the bottom of the page.</h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_88' class='gfield gf_scroll_text gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <strong> </strong>
                                                                                                        <p style="text-align: center;"><strong>AGREEMENT 2018</strong></p>
                                                                                                        <p style="text-align: center;"><strong>CONDITIONS OF ENTRY AND ATTENDANCE</strong></p>
                                                                                                        Last revision: February 2017
                                                                                                        <em>These Conditions of Entry and Attendance (“Conditions”), duly executed, shall be required to be submitted upon acceptance by Montgomery & Miller Academy (the “School”), and shall govern the Student’s attendance at the, until duly terminated, replaced or renewed by further written agreement between the parties. </em>
                                                                                                        <br /><strong>This agreement is entered into and between:</strong><br />
                                                                                                        Montgomery & Miller Academy (Pty) Ltd, registration number 2016/069652/07 <br />
                                                                                                        Montgomery & Miller Trust, registration number IT000393/2016©
                                                                                                        <br />
                                                                                                        <strong>and </strong>
                                                                                                        <br />
                                                                                                        Mr/Mrs,<input type="text" name="parent_1_terms_fullname" size="40" style="width: 400px;margin-bottom: 6px;" placeholder="" />
                                                                                                        <em>(full name and surname of parent/legal guardian)</em><br />
                                                                                                        <strong>and</strong> <br />
                                                                                                        Mr/Mrs <input type="text" name="parent_2_terms_fullname" size="40" style="width: 400px;margin-bottom: 6px;" placeholder="" />
                                                                                                        <em>(full name and surname of second parent/legal guardian)</em><br />
                                                                                                        <strong>being the parent/guardian of my son/daughter</strong>
                                                                                                        <input type="text" name="applicant_full_name_idno" size="60" style="width: 400px;margin-bottom: 6px;" placeholder="" />
                                                                                                        <em>(full name, surname and identity number/passport number of the Student)</em><br />
                                                                                                        <strong>Instructions to parent/s:</strong><br />
                                                                                                        <ol>
                                                                                                            <li>MM Academy Conditions are to be completed, signed and dated in respect of each Student on an annual basis and submitted to the School timeously in order to simplify record keeping by the administration department.</li>
                                                                                                            <li>The details of both parents must be completed and both parents must sign and date the signature page of the Conditions. In the event of only one parent signing the Conditions, please provide the School with an acceptable reason for doing so.</li>
                                                                                                            <li>In addition to the parent/s signature/s, all Students from Grade 6 to 12 to Matric must sign these Conditions.</li>
                                                                                                            <li>Please note that <strong>no</strong> amendments by the parent/s and/or Student to these Conditions will be accepted.</li>
                                                                                                        </ol>
                                                                                                        &nbsp;
                                                                                                        <strong>I/We hereby agree and acknowledge the following:</strong>
                                                                                                        <strong> </strong><br />
                                                                                                        <strong>DURATION</strong>
                                                                                                        <ol>
                                                                                                            <li>This agreement shall endure for a fixed period of 12 months from the date of signature hereof.</li>
                                                                                                        </ol>
                                                                                                        <strong>         FEES AND CHARGES</strong>
                                                                                                        <ol start="2">
                                                                                                            <li>I/we shall pay MM Academy (the “School”) such fees, levies and charges for the education and supply of goods and services to the Student as shall be fixed by the School in its sole discretion from time to time. I/we have been provided with a copy of the School’s fee payment options and fee structure and I/we shall be bound by any increase of fees or modification of the payment structure introduced by the School, at its sole discretion, by giving us not less than one month’s notice thereof.</li>
                                                                                                        </ol>
                                                                                                        <ol start="3">
                                                                                                            <li><strong>In respect of new Students only:</strong> A placement fee is payable within 14 (fourteen) days of the School’s acceptance of the Student which placement fee will guarantee the Student’s place at Montgomery & Miller Academy upon entry into the School.</li>
                                                                                                        </ol>
                                                                                                        <ol start="4">
                                                                                                            <li>This acceptance of the Conditions of Entry (“the Conditions”) renders me/us jointly and severally liable (which means one parent/guardian may be held individually liable for the entire account) for payment of the Student's fees account*.</li>
                                                                                                        </ol>
                                                                                                        * Should only one parent/guardian be legally liable for the payment of the Student’s fees account (e.g. in terms a divorce order), this clause 4 shall only apply to the parent/guardian liable for such payment, notwithstanding signature of these Conditions by both parents/guardians.
                                                                                                        <ol start="5">
                                                                                                            <li>
                                                                                                                The fees for each term/month are due and payable via debit order or EFT, in advance, per the School’s published fee schedule
                                                                                                                <ul>
                                                                                                                    <li>Failure to make timeous payment of due amounts shall be deemed to be a  material breach of this agreement and in such case the Director may, at his/her entire discretion, cancel this agreement by giving 21 business days’ written notice (“notice period”) thereof.</li>
                                                                                                                    <li>In the event that the arrear due amounts are not paid to the School during the notice period, the Student will not be allowed to return to the School after the expiry of the notice period, nor will the Student be allowed to write any further examinations and/or to receive any school reports.</li>
                                                                                                                    <li>Nothing in this clause 5 will prejudice the rights of the School to claim damages and arrear amounts in the appropriate forum.</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <ol start="6">
                                                                                                            <li>Notwithstanding anything contained in clause 5 and/or the fee payment option selected
in terms of the Payment Arrangement Form, in the event that any payment is received
by the School after due date, I/we will be deemed to have selected the monthly payment
option in terms of the Payment Arrangement Form and I/we shall be liable for payment
of such monthly fees and I/we will be bound to the terms regulating monthly payments.</li>
                                                                                                        </ol>
                                                                                                        <ol start="7">
                                                                                                            <li>Outstanding amounts shall be subject to a penalty fee of R50 per day.</li>
                                                                                                        </ol>
                                                                                                        <ol start="8">
                                                                                                            <li>Co-curricular activities that attract a monthly charge will be reflected on a monthly
statement of account that will be posted to us; should my/our fees payable for co-
curricular activities be outstanding for two consecutive months, the Student’s attendance
at these co-curricular activities will be terminated.</li>
                                                                                                        </ol>
                                                                                                        <ol start="9">
                                                                                                            <li>Should I/we wish to withdraw the Student from the School at any time prior to
expiration of the period set out in clause 1 (“early cancellation”), I/we shall be obliged to
give at least 20 business days’ written notice (“notice period”) of such cancellation, which
notice period shall be inclusive of school holidays, to the Principal.</li>
                                                                                                        </ol>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                Upon such early cancellation I/we shall be liable to the School for payment in respect of –
                                                                                                                <ul>
                                                                                                                    <li>the fees owing to the School up to and including the last day of the notice period (calculated in accordance with the Fee Structure option elected); and</li>
                                                                                                                    <li>a cancellation penalty which is equal to two months’ school fees (calculated in accordance with the monthly payment set out in the Fee Structure excluding any sibling discount, regardless of the actual months over which payments are made).</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li>We acknowledge that the cancellation penalty is reasonable in contemplation of the agreement enduring for its fixed term.</li>
                                                                                                            <li>The Student shall be entitled to remain at the School during the notice period and for the period in respect of which the cancellation penalty is calculated, subject to compliance with the remaining terms and conditions of this agreement.</li>
                                                                                                        </ul>
                                                                                                        <strong>FOREIGN STUDENTS</strong>
                                                                                                        <ol start="10">
                                                                                                            <li>If the Student is not a South African citizen or a permanent resident of South Africa, I/
we acknowledge that a valid study visa in the School’s name is required in order to enrol
and commence attendance at the School. I/we undertake to assist the School’s appointed
immigration consultant to ensure compliance throughout the duration of the Student’s
enrolment at the School and I/we agree to the payment of the applicable annual levies.</li>
                                                                                                        </ol>
                                                                                                        <strong>MEDICAL CONDITIONS</strong>
                                                                                                        <ol start="11">
                                                                                                            <li>I/we undertake to timeously disclose to the School full details of any medical condition
suffered by the Student and/or in respect of which the Student may be at risk. This
includes the taking of prescription medication that is Schedule 5 or higher.</li>
                                                                                                        </ol>
                                                                                                        <strong>IN LOCO PARENTIS</strong>
                                                                                                        <ol start="12">
                                                                                                            <li>The Director is authorised and empowered to act in loco parentis (meaning in the legal
place and stead of the Student’s guardian and/or parent) in respect of the Student, when
specific authority cannot reasonably be sought in time, including, but not limited to, for
the giving of consent for any medical treatment or medical operation which in the
opinion of the Director is necessary and/or for the incurring of medical costs as a
consequence thereof.</li>
                                                                                                        </ol>
                                                                                                        <strong>SCHOOL POLICIES</strong>
                                                                                                        <ol start="13">
                                                                                                            <li>I/we have read, understood, and agree to accept the terms and conditions of the Codes
of Conduct enclosed herewith and the consequences for any behaviour constituting any
breach thereof. I/We acknowledge and agree that I/we will be bound by the provisions
of any other policy implemented by the School from time to time, which regulates
attendance and behaviour at the School and/or required from the Students, and any
other matter deemed necessary or desirable by the School for the purposes of its
administration. I/We agree to be bound thereby and by any substitution, modification or
addition to any policy which the School may at its sole discretion bring into effect from
time to time by giving written notice thereof.</li>
                                                                                                        </ol>
                                                                                                        <ol start="14">
                                                                                                            <li>Any alleged misconduct will be dealt with in accordance with the provisions of the
Codes of Conduct, and any other policy implemented by the School from time to time
which regulates attendance and behaviour at the School and/or required from the
Students, in which event no rebate of fees will be allowed should the student be found
in contravention of the aforementioned policies.</li>
                                                                                                        </ol><br>
                                                                                                        <strong>TESTING FOR USE OF DRUGS AND/OR MIND-ALTERING SUBSTANCES</strong>
                                                                                                        <ol start="15">
                                                                                                            <li>I/we agree that, in the interest of the safety and well-being of the entire student body,
the testing for use of drugs and/or mind-altering substances may be conducted
randomly by the School from time to time (without prior notice to me/us) and for my/
our cost, and either by the selection of one or more students or otherwise, should the
Principal or Director, in his/her discretion, deem it necessary for any reason.</li>
                                                                                                        </ol>
                                                                                                        <strong>PARENT SUPPORT</strong><strong> </strong>
                                                                                                        <ol start="16">
                                                                                                            <li>I/we will support teachers in their educational endeavours and work co-operatively with
the School in all areas regarding the Student’s education. This includes the following:
                                                                                                                <ul>
                                                                                                                    <li>Not scheduling appointments during school hours</li>
                                                                                                                    <li>Not allowing the learner to leave the school early or not coming to school at all due to “not feeling so well”</li>
                                                                                                                    <li>Complying with detention times and a prolonged school day for incompletehomework</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <ol start="17">
                                                                                                            <li>I/we acknowledge that it is a material term of this agreement that I/we will not conduct
ourselves in such a way as to bring the School into disrepute and that, should we do so,
the School shall be entitled to terminate this agreement, and the enrolment of the
Student at the School accordingly, upon the School giving us one term’s written notice
to such effect.</li>
                                                                                                        </ol>
                                                                                                        <ol start="18">
                                                                                                            <li>It is my/our responsibility to advise the School of any changes in family circumstances
which may affect the life of the Student at school and/or his/her abilities to properly
undertake and complete his/her educational or extra-curricular activities or duties.</li>
                                                                                                        </ol>
                                                                                                        <strong>SCHOOL ACTIVITIES</strong>
                                                                                                        <ol start="19">
                                                                                                            <li>I/we consent to the Student taking part in all the activities of the School, including
extra-curricular activities such as games, sports, educational tours, and excursions.
However, while the School will take all reasonable precautions to ensure the safety and
well-being of the Student, these activities may be undertaken in environments that
cannot be controlled or regulated by the School, and involve certain inherent risks
which may include serious injury and death.</li>
                                                                                                        </ol>
                                                                                                        <strong><em>The clauses below limit and exclude obligations, liabilities and legal responsibilities
which the School and other persons may have towards the Student, parents and/or
guardians and limit their rights and remedies</em></strong>
                                                                                                        <ol start="20">
                                                                                                            <li>I/we acknowledge and agree that neither the School, its officers, staff, employees, nor
any contractor formally engaged by the school to coach such sport (collectively "the
Indemnified Persons"), shall be liable for any loss or damage of whatever nature
(including but not limited to loss or damage to property, injury or death) and
howsoever arising, including without limitation any loss or damage in connection with –</li>
                                                                                                        </ol>
                                                                                                        <ul>
                                                                                                            <li>the Student’s attendance at the School; and/or</li>
                                                                                                            <li>participation in any activities of the School (including extra-curricular activities such as games, sports, educational tours and excursions); and/or</li>
                                                                                                            <li>the Student’s presence on the School premises; and/or</li>
                                                                                                            <li>arising during transportation of the Student by or on behalf of the School, to or from another place).</li>
                                                                                                        </ul>
                                                                                                        <ol start="21">
                                                                                                            <li>Nothing contained in clause 20 above shall be deemed to exclude any loss, damage, injury or death arising directly or indirectly as a result of the wilful default or gross negligence of the School or any person acting for or controlled by the School (for the purposes of this clause 21, a fellow student of the School shall not be deemed to be “controlled” by the School).</li>
                                                                                                        </ol>
                                                                                                        <ol start="22">
                                                                                                            <li>I/we have been advised to take adequate insurance to cover any loss or damage or injury or death for which the School or any other Indemnified Person is not liable pursuant to clause 20 above.</li>
                                                                                                        </ol>
                                                                                                        <strong>PROTECTION OF PERSONAL INFORMATION </strong>
                                                                                                        <ol start="23">
                                                                                                            <li>
                                                                                                                “Personal Information” as referred to in this agreement includes the following–
                                                                                                                <ul>
                                                                                                                    <li>Identifying information, including information relating to the name, gender, marital status, national, ethnic or social origin, age, physical or mental health, well-being, disability, identity number and birth in respect of the parent/s and/or the Student;</li>
                                                                                                                    <li>Medical history in respect of the Student;</li>
                                                                                                                    <li>Financial history/credit worthiness in respect of the parent/s; and</li>
                                                                                                                    <li>Contact details in respect of the parent/s and the Student.</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <ol start="24">
                                                                                                            <li>Where necessary for the School in order to maintain proper records and to perform its functions, by entering into this agreement, and unless I/we at any time instruct the School expressly and in writing to the contrary, I/we consent to the School collecting, storing and updating Personal Information about me/us and/or the Student.</li>
                                                                                                        </ol>
                                                                                                        <ol start="25">
                                                                                                            <li>I/we consent to the School disseminating my/our names and/or contact details only to MM parents, MM staff or other responsible persons engaged or authorised by the School for school related purposes only, unless I/we instruct the School at any time in writing to the contrary.</li>
                                                                                                        </ol>
                                                                                                        <ol start="26">
                                                                                                            <li>I/we consent to the School providing a reference and supplying information, which may include Personal Information, in respect of the Student to any educational institution that I/we propose the Student may attend.</li>
                                                                                                        </ol>
                                                                                                        <ol start="27">
                                                                                                            <li>
                                                                                                                The School shall take -
                                                                                                                <ul>
                                                                                                                    <li>reasonably practicable steps to ensure that the Personal Information is complete, accurate, not misleading and updated where necessary; and</li>
                                                                                                                    <li>appropriate measures to prevent loss of, damage to and/or unauthorised destruction of and unauthorised access to the Personal Information.</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                        <ol start="28">
                                                                                                            <li>I/we hereby consent to the School using any still photograph and/or likeness, with or without the name, of the Student and/or audiovisual footage in any printed material or other mediums, for the purposes of celebrating the School’s or the Student’s activities, achievements or successes and for the marketing of the School.</li>
                                                                                                        </ol>
                                                                                                        <strong>DOMICILIUM</strong>
                                                                                                        <ol start="29">
                                                                                                            <li>I/we appoint my/our residential address stated above in the preamble as the address at which all notices may be given, and all legal process may be served. In the event that my/our residential address in the preamble is not completed, my/our residential address as completed in the Application for Admission shall serve as my/our domicilium. Any such notice shall, unless the contrary is proved, be deemed to have been received by me/us at the said address:</li>
                                                                                                        </ol>
                                                                                                        <ul>
                                                                                                            <li>If it is delivered by hand, on the date on which it is so delivered; or</li>
                                                                                                            <li>If it is delivered by telefax or email on the date of transmission thereof; or</li>
                                                                                                            <li>If it is sent by prepaid registered mail, on the third day after it has been posted.</li>
                                                                                                        </ul>
                                                                                                        <ol start="30">
                                                                                                            <li>I/we will advise the administrator of the School in writing, of any changes in contact details or of my/our domicilium.</li>
                                                                                                        </ol>
                                                                                                        <strong>JURISDICTION</strong>
                                                                                                        <ol start="31">
                                                                                                            <li>I/we consent, in terms of Section 45 of the Magistrates’ Court Act, 1944, to the non-exclusive jurisdiction of any Magistrate’s Court having jurisdiction in terms of Section 28 of that Act, notwithstanding the fact that the value of the claim or the matter in dispute might otherwise exceed the jurisdiction of the Magistrate's Court.</li>
                                                                                                        </ol>
                                                                                                        <strong>BREACH</strong><strong> </strong>
                                                                                                        <ol start="32">
                                                                                                            <li>Should the School have to take legal action pursuant to a breach of these Conditions, the School shall be entitled to recover from me/us all the School's legal costs incurred on the scale between attorney and own client including tracing fees and collection commission paid by the School to its attorneys.</li>
                                                                                                        </ol>
                                                                                                        <strong>GENERAL</strong>
                                                                                                        <ol start="33">
                                                                                                            <li>These Conditions do not purport to contain all of the terms and conditions on which the Student is accepted as such at the School, and that the Student's attendance at the School, and my/our obligations in respect thereof may be subject to other terms and conditions elsewhere recorded or otherwise agreed upon; notwithstanding the aforegoing, however, no variation or amendment of the provisions contained in these Conditions shall be of any force or effect unless it is reduced to writing and signed by or on behalf of the School and the parent/guardian.</li>
                                                                                                        </ol>
                                                                                                        <ol start="34">
                                                                                                            <li>Clause headings are for convenience only and are not to be used in the interpretation of this agreement.</li>
                                                                                                        </ol>
                                                                                                        <strong>IN RESPECT OF NEW STUDENTS ONLY</strong>
                                                                                                        <strong>Kindly submit with your Application for Admission form:</strong>
                                                                                                        <ol>
                                                                                                            <li>The Student’s final report from the previous year and the most current reports.</li>
                                                                                                            <li>Reports from all Occupational Therapists and/or Physiotherapists and/or Speech Therapists and/or Psychologists who have assessed the Student (if applicable).</li>
                                                                                                            <li>Student’s unabridged birth certificate, passport, or identification document.</li>
                                                                                                            <li>Both Parent’s identification document. There has to be a reasonable cause should only one Parent sign this contract.</li>
                                                                                                        </ol>
                                                                                                    </li>
                                                                                                    <li id='field_2_87' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'></h2>
                                                                                                    </li>
                                                                                                    <li id='field_2_85' class='gfield gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >Terms and Conditions for Admissions:<span class='gfield_required'>*</span></label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_85'>
                                                                                                                <li class='gchoice_2_85_1'>
                                                                                                                    <input name='admission_terms' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='I (Mother/Legal Guardian)have read, understood, accepted, and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.'  id='choice_2_85_1' tabindex='169'  />
                                                                                                                    <label for='choice_2_85_1' id='label_2_85_1'>I (Mother/Legal Guardian) have read, understood, accepted, and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_115' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >Terms and Conditions for Admissions:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_115'>
                                                                                                                <li class='gchoice_2_115_1'>
                                                                                                                    <input name='terms_2' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='I (Fother/Legal Guardian)  have read, understood, accepted, and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.'  id='choice_2_115_1' tabindex='170'  />
                                                                                                                    <label for='choice_2_115_1' id='label_2_115_1'>I (Father/Legal Guardian) have read, understood, accepted, and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li id='field_2_118' class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <label class='gfield_label'  >Terms and Conditions for Admissions:</label>
                                                                                                        <div class='ginput_container ginput_container_checkbox'>
                                                                                                            <ul class='gfield_checkbox' id='input_2_118'>
                                                                                                                <li class='gchoice_2_118_1'>
                                                                                                                    <input name='terms_3' type='checkbox' onclick='gf_apply_rules(2,[0]);' onkeypress='gf_apply_rules(2,[0]);' value='I (Learner) have read, understood, accepted and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.'  id='choice_2_118_1' tabindex='171'  />
                                                                                                                    <label for='choice_2_118_1' id='label_2_118_1'>I (Learner) have read, understood, accepted and agreed to the terms and conditions above and
of the Codes of Conduct enclosed herewith, and I acknowledge that I have been given sufficient
opportunity to read and comprehend their provisions and that the fact, nature and effect of the
provisions recorded above have been drawn to my attention.</label>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li> -->
                                                                                                    <li id='field_2_122' class='gfield gsection field_sublabel_below field_description_above gfield_visibility_visible' >
                                                                                                        <h2 class='gsection_title'>We will be in contact with you, to schedule an interview appointment.</h2>
                                                                                                        <div class='gsection_description'> If you don't hear from the school within 48Hrs please contact the school to check on your submission as there may have been a technical problem.</div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class='gform_footer top_label'>
                                                                                                <input type='submit' id='submit_button' class='submit_button button' value='Submit' tabindex='172'  /> 
                                                                                                <input type='hidden' name='gform_uploaded_files' id='gform_uploaded_files_2' value='' />
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_2' id='gform_ajax_frame_2'>This iframe contains the logic required to handle AJAX powered Gravity Forms.</iframe>
                                                                                    <script type='text/javascript'>
//                                                                                        jQuery(document).ready(function($){
//                                                                                            gformInitSpinner( 2, 'http://reddam.house/wp-content/plugins/gravityforms/images/spinner.gif' );
//                                                                                            jQuery('#gform_ajax_frame_2').load( function(){
//                                                                                                var contents = jQuery(this).contents().find('*').html();
//                                                                                            });
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                            <!-- .entry-content -->
                                                        </div>
                                                    </div>
                                                    <!-- #post -->				
                                                </div>
                                                <!-- #content -->
                                            </div>
                                            <!-- #primary -->
                                        </div>
                                        <!-- / .content-element-1 -->
                                    </div>
                                    <!-- / .span12 -->
                                </div>
                                <!-- / #row-fluid -->
                            </section>
                            <!-- section - 1 -->
                        </div>
                        <!-- grid-wrapper -->
                    </div>
                    <!-- .main-content -->
                </div>
                <!-- #Middle -->
                <footer id="Bottom" class="site">
                </footer>
                <!-- #Bottom -->
            </div>
            <!-- #ContentWrapper -->
        </div>
        <!-- #page -->
        <div class="hidden">
            <div id="LoginPopup">
                <form class="loginForm" id="popupLoginForm" method="post" action="http://reddam.house/wp-login.php">
                    <div id="loginBg">
                        <div id="loginBgGraphic"></div>
                    </div>
                    <div class="loginContainer">
                        <h3>Sign in to your account</h3>
                        <fieldset class="formContent">
                            <legend>Account Login</legend>
                            <div class="fieldContainer">
                                <label for="ModalUsername">Username</label>
                                <input id="ModalUsername" name="log" type="text" class="textInput" />
                            </div>
                            <div class="fieldContainer">
                                <label for="ModalPassword">Password</label>
                                <input id="ModalPassword" name="pwd" type="password" class="textInput" />
                            </div>
                        </fieldset>
                    </div>
                    <div class="formContent">
                        <button type="submit" class="btn signInButton"><span>Sign in</span></button>
                    </div>
                    <div class="hr"></div>
                    <div class="formContent">
                        <a href="http://reddam.house/wp-login.php?action=lostpassword" id="popupLoginForgotPswd">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="BackToTop"><a href="#ScrollTop">^</a></div>
        <div style="display:none">
        </div>
        <script type='text/javascript' src='js/devicepx-jetpack.js'></script>
        <script type='text/javascript' src='js/gprofiles.js'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var WPGroHo = {"my_hash":""};
            /* ]]> */
        </script>
        <script type='text/javascript' src='js/wpgroho.js'></script>
        <script type='text/javascript' src='js/jquery.jplayer.min.js'></script>
        <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var data_js = {"ajaxurl":"http:\/\/reddams.house\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='js/onLoad.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/core.min.js'></script>
        <script type='text/javascript' src='js/datepicker.min.js'></script>
        <script type='text/javascript'>
            jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
        </script>
        <script type='text/javascript' src='js/datepicker.min.js'></script>
        <script type='text/javascript' src='js/ss.js'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var ubermenu_data = {"remove_conflicts":"on","reposition_on_load":"off","intent_delay":"300","intent_interval":"100","intent_threshold":"7","scrollto_offset":"50","responsive_breakpoint":"0","accessible":"on","retractor_display_strategy":""};
            /* ]]> */
        </script>
        <script type='text/javascript' src='js/ubermenu.min.js'></script>
        <script type='text/javascript' src='js/wp-embed.min.js'></script>
        <script type='text/javascript' src='js/js_composer_front.min.js'></script>
        <script type='text/javascript' src='https://stats.wp.com/e-201719.js' async defer></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
                $('#same_parent_address').change(function() {
                   if($(this).is(":checked")) {
                      $('#parrent-2-addresses').slideUp('slow');
                      return;
                   }else{
                       $('#parrent-2-addresses').slideDown('slow');
                      return;
                   }
                   //'unchecked' event code
                });
                $('#input_2_109').change(function() {
                   if($(this).val() == 'Grade 10' || $(this).val() == 'Grade 11' || $(this).val() == 'Grade 12') {
                      $('#field_2_223').slideDown('slow');
                      return;
                   }else{
                       $('#field_2_223').slideUp('slow');
                      return;
                   }
                });
                
                $('#num_siblings').on('change', function() {
                    num_siblings = $(this).val();
                    
                    $.post('process.php', {
                                action: 'generate_siblings_html',
                                'num_siblings': num_siblings
                            }, function (response){																
                        console.log(num_siblings);
                        $("#siblings").html(response);
                    });
                });
                
                $('#gform_22').validate({
                    rules:{
                        applicants_surname: "required",
                        applicants_firstnames: "required",
                        applicants_preferred_name: "required",
                        applicants_gender: "required",
                        applicants_dob: "required",
                        applicants_citizenship: "required",
                        applicants_id_passport: "required",
                        year_to_start: "required",
                        academic_history: "required",
                        parent_1_firstname: "required",
                        parent_1_lastname: "required",
                        parent_1_idno: "required",
                        parent_1_home_phone: "required",
                        parent_1_mobile_phone: "required",
                        parent_1_email: {
                            required: true,
                            email: true
                        },
                        parent_1_res_street_address:"required",
                        parent_1_res_address_line_2:"required",
                        parent_1_res_city:"required",
                        parent_1_res_street_postal_code:{
                            required: true,
                            minlength: 4,
                            maxlength: 6
                        },
                        how_did_you_hear_about_us: "required",
                        parent_1_terms_fullname: "required",
                        parent_2_terms_fullname: "required",
                        applicant_full_name_idno: "required",
                        //admission_terms: "required",
                        //terms_2: "required",
                        //terms_3: "required",
                        applicants_address_1: "required",
                        applicants_address_2: "required",
                        applicants_address_city: "required",
                        applicants_address_postal:{
                            required: true,
                            minlength: 4,
                            maxlength: 6
                        },
                    }
                });
                
                $(document).on('click','input[type="checkbox"]',function(){
                    if(this.checked){
                        $('span.' + $(this).attr('data-id')).fadeIn('slow');
                    }else{
                        $('span.' + $(this).attr('data-id')).fadeOut('fast');
                    }
                    
                });
                
                // the selector will match all input controls of type :checkbox
                // and attach a click event handler 
                $(".radio_one").on('click', function() {
                  // in the handler, 'this' refers to the box clicked on
                  var $box = $(this);
                  if ($box.is(":checked")) {
                    // the name of the box is retrieved using the .attr() method
                    // as it is assumed and expected to be immutable
                    var group = "input:checkbox[name='" + $box.attr("name") + "']";
                    // the checked state of the group/box on the other hand will change
                    // and the current value is retrieved using .prop() method
                    $(group).prop("checked", false);
                    $box.prop("checked", true);
                  } else {
                    $box.prop("checked", true);
                  }
                });
                var $count = 1;
                $(".radio_two").on('click', function() {
                    // in the handler, 'this' refers to the box clicked on
                    var $box = $(this);
                  
                    if ($box.is(":checked") && $count <= 3) {
                      $count++;
                    } else {
                        $count--;
                        alert('Please select only 3 subjects between 6 and 14.');
                        $box.prop("checked", false);
                    }
                });
                
                
            });
        </script>
    </body>
</html>