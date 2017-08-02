<?php

function ctu_ultimate_oxi_shortcode_function($data) {
    $id = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
    if ($style['style_name'] == 'style1') {
        ctu_ultimate_oxi_shortcode_style1($id);
    }
    if ($style['style_name'] == 'style2') {
        ctu_ultimate_oxi_shortcode_style2($id);
    }
    if ($style['style_name'] == 'style3') {
        ctu_ultimate_oxi_shortcode_style3($id);
    }
    if ($style['style_name'] == 'style4') {
        ctu_ultimate_oxi_shortcode_style4($id);
    }
    if ($style['style_name'] == 'style5') {
        ctu_ultimate_oxi_shortcode_style5($id);
    }if ($style['style_name'] == 'style6') {
        ctu_ultimate_oxi_shortcode_style6($id);
    }
    if ($style['style_name'] == 'style7') {
        ctu_ultimate_oxi_shortcode_style7($id);
    }
    if ($style['style_name'] == 'style8') {
        ctu_ultimate_oxi_shortcode_style8($id);
    }
    if ($style['style_name'] == 'style9') {
        ctu_ultimate_oxi_shortcode_style9($id);
    }
    if ($style['style_name'] == 'style10') {
        ctu_ultimate_oxi_shortcode_style10($id);
    }
}

function ctu_ultimate_oxi_shortcode_style1($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $data1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[11] . '|' . $styledata[43] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            display: flex;
            float: left;
            list-style: none;
            overflow: hidden;
            margin-top: <?php echo $styledata[53]; ?>px;
            margin-top: <?php echo $styledata[55]; ?>px;
            text-align: center;
            justify-content: <?php echo $styledata[15]; ?> ;
            border-top: 5px solid <?php echo $styledata[9]; ?>;
            margin-bottom: 10px;
            background-color: <?php echo $styledata[5]; ?>;
            border-radius: <?php echo $styledata[21]; ?>px <?php echo $styledata[21]; ?>px 0 0;
            box-shadow: 0 0 <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>; 
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            cursor: pointer;
            text-align: center;
            list-style: none;
            padding: <?php echo $styledata[19]; ?>px 10px;
            margin: 0;
            font-size: <?php echo $styledata[1]; ?>px;
            width: <?php echo $styledata[17]; ?>px;
            float: left;
            font-family: <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            color: <?php echo $styledata[3]; ?>;
            border-right: 1px solid  #ccc;
            font-weight:  <?php echo $styledata[13]; ?>;   
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:last-of-type{
            border-right: none;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[7]; ?>;
            position: relative;
            transition:  all 0.5s linear;
            background-color: <?php echo $styledata[9]; ?>;
        }

        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            cursor: pointer;
            border-radius: <?php echo $styledata[21]; ?>px;
            padding: <?php echo $styledata[19]; ?>px 5px;
            text-align: center;
            font-size: <?php echo $styledata[1]; ?>px;
            width: 100%;
            display: inline-block;
            margin-bottom: 3px;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-family: <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight:  <?php echo $styledata[13]; ?>;
            display: none;
            margin-bottom: 8px;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            transition:  all 0.5s linear;
            background-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            background-color:  <?php echo $styledata[31]; ?> ;
            padding: <?php echo $styledata[33]; ?>% <?php echo $styledata[35]; ?>% <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>%;
            font-size: <?php echo $styledata[27]; ?>px;
            color:  <?php echo $styledata[29]; ?>;
            line-height: <?php echo $styledata[41]; ?>;
            text-align: <?php echo $styledata[47]; ?>;
            display: none;
            font-family: <?php echo ctu_font_familly_special_charecter($styledata[43]); ?>;
            font-weight:  <?php echo $styledata[45]; ?>;
            box-shadow: 0 0 <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>; 
            margin-bottom:10px;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }

        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '"><ul class="ctu-ulimate-style-' . $styleid . '">';

    foreach ($data1 as $value) {
        echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                            ' . $value['title'] . '
                        </li>';
    }
    echo ' </ul> <div class="ctu-ultimate-style-' . $styleid . '-content">';

    foreach ($data1 as $value) {
        echo '  <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                              ' . $value['title'] . '
                    </div>
                    <div class="ctu-ulitate-style-' . $styleid . '-tabs ctu-edit-content" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                       ' . $value['files'] . '
                    </div>';
    }
    echo ' </div> </div>';
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();

            });
            var contentliwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").outerWidth();
            var count = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").length;
            var fullwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?>").width();
            var widthresult = contentliwidth * count;
            if (fullwidth <= widthresult) {
                var eachwidth = parseInt(fullwidth / count) + 'px';
                $(".ctu-ulimate-style-<?php echo $styleid; ?> li").css("width", eachwidth);
            }
        });
    </script>
    <?php
}

function ctu_ultimate_oxi_shortcode_style2($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[9] . '|' . $styledata[37] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            background: transparent;
            overflow: hidden;
            border-radius: <?php echo $styledata[19]; ?>px <?php echo $styledata[19]; ?>px 0 0;
            box-shadow: 0 0 <?php echo $styledata[43]; ?>px <?php echo $styledata[45]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            display: flex;
            float: left;
            list-style: none;
            text-align: center;
            justify-content: <?php echo $styledata[13]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            cursor: pointer;
            float: left;
            text-align: center;
            list-style: none;
            position: relative;
            margin: <?php echo $styledata[17]; ?>px 0;
            padding: 0 10px;
            font-size: <?php echo $styledata[1]; ?>px;
            line-height: 130%;
            border-right: 1px solid #ccc;
            color: <?php echo $styledata[3]; ?>;
            width: <?php echo $styledata[15]; ?>px;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[9]); ?>;
            font-weight: <?php echo $styledata[11]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:last-of-type{
            border-right: none;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            position: relative;
            transition:  all 0.5s linear;
            color: <?php echo $styledata[7]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li .ctu-absolute{
            position: absolute;
            margin: auto;
            bottom: -<?php echo $styledata[17]; ?>px;
            left: 0;
            right: 0;
            width: 30px;
            height: 30px;
            display: none;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid <?php echo $styledata[7]; ?>;

        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active .ctu-absolute{
            display: block;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;

        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            cursor: pointer;
            display: none;
            width: 100%;
            font-size: <?php echo $styledata[1]; ?>px;
            font-weight: <?php echo $styledata[11]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[9]); ?>;
            line-height: 120%;
            padding: <?php echo $styledata[17]; ?>px 10px;
            text-align: center;
            border-radius: <?php echo $styledata[19]; ?>px;
            background-color:  <?php echo $styledata[5]; ?>;
            color: <?php echo $styledata[3]; ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            transition:  all 0.5s linear;
            border-radius: <?php echo $styledata[19]; ?>px <?php echo $styledata[19]; ?>px 0 0;
            color:   <?php echo $styledata[7]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            display: none;
            padding: <?php echo $styledata[27]; ?>% <?php echo $styledata[29]; ?>% <?php echo $styledata[31]; ?>% <?php echo $styledata[33]; ?>%;
            font-size: <?php echo $styledata[21]; ?>px;
            color: <?php echo $styledata[23]; ?>;
            line-height: <?php echo $styledata[35]; ?>;
            text-align: <?php echo $styledata[41]; ?>;
            background-color: <?php echo $styledata[25]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[37]); ?>;
            font-weight: <?php echo $styledata[39]; ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                box-shadow: none !important;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                margin-bottom: 10px;
            } 
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                box-shadow: none !important;
            }
        }


    </style>
    <div class="ctu-ultimate-wrapper-<?php echo $styleid; ?> ctu-wrapper-shadow">
        <ul class="ctu-ulimate-style-<?php echo $styleid; ?>">
            <?php
            foreach ($listdata as $value) {
                echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                        ' . $value['title'] . '
                                        <div class="ctu-absolute"></div>
                                    </li>';
            }
            echo ' </ul>';
            foreach ($listdata as $value) {
                echo '<div class="ctu-ultimate-style-' . $styleid . '-content ctu-content-shadow">
                                        <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                       ' . $value['title'] . '
                                        </div>
                                        <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                            ' . $value['files'] . '
                                        </div>
                                    </div> ';
            }
            ?>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            var contentliwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").outerWidth();
            var count = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").length;
            var fullwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?>").width();
            var widthresult = contentliwidth * count;
            if (fullwidth <= widthresult) {
                var eachwidth = parseInt(fullwidth / count) + 'px';
                $(".ctu-ulimate-style-<?php echo $styleid; ?> li").css("width", eachwidth);
            }
        });
    </script>
    <?php
}

function ctu_ultimate_oxi_shortcode_style3($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-vendor-bootstrap', 'https://fonts.googleapis.com/css?family=' . $styledata[15] . '|' . $styledata[45] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            display: flex;
            float: left;
            list-style: none;
            text-align: center;
            justify-content: <?php echo $styledata[19]; ?>;
            overflow: hidden;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            cursor: pointer;
            float: left;
            list-style: none;
            margin-bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
            text-align: center;
            position: relative;
            margin: 0 <?php echo $styledata[55]; ?>px 0 0;
            padding: <?php echo $styledata[23]; ?>px 10px;
            bottom: -5px;
            font-size: <?php echo $styledata[1]; ?>px;
            line-height: 120%;
            border-color:  <?php echo $styledata[7]; ?>;
            border-top: 5px solid;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            width: <?php echo $styledata[21]; ?>px;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[15]); ?>;
            font-weight: <?php echo $styledata[17]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:last-of-type{
            margin-right: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            position: relative;
            transition:  all 0.5s linear;
            color: <?php echo $styledata[9]; ?>;
            background-color: <?php echo $styledata[11]; ?>;
            border-color:   <?php echo $styledata[13]; ?>;
            bottom: 0;
            z-index: 1;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            cursor: pointer;
            display: none;
            width: 100%;
            font-weight: <?php echo $styledata[17]; ?>;
            line-height: 120%;
            padding: <?php echo $styledata[23]; ?>px 10px;
            text-align: center;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[15]); ?>;
            background-color:  <?php echo $styledata[5]; ?>;
            color: <?php echo $styledata[3]; ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            transition:  all 0.5s linear;
            color: <?php echo $styledata[9]; ?>;
            background-color:  <?php echo $styledata[11]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            display: none;
            padding: <?php echo $styledata[35]; ?>% <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>% <?php echo $styledata[41]; ?>%;
            font-size: <?php echo $styledata[29]; ?>px;
            color: <?php echo $styledata[31]; ?>;
            line-height: 120%;
            text-align: <?php echo $styledata[49]; ?>;
            background-color: <?php echo $styledata[33]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[45]); ?>;
            box-shadow: 0 0 <?php echo $styledata[51]; ?>px <?php echo $styledata[53]; ?>;
            font-weight: <?php echo $styledata[47]; ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                margin-bottom: 10px;
            }
        }
    </style>
    <div class="ctu-ultimate-wrapper-<?php echo $styleid; ?>">
        <ul class="ctu-ulimate-style-<?php echo $styleid; ?>">

            <?php
            foreach ($listdata as $value) {
                echo '  <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                            ' . $value['title'] . '
                                        </li>';
            }
            echo ' </ul>';
            foreach ($listdata as $value) {
                echo '       <div class="ctu-ultimate-style-' . $styleid . '-content">
                                    <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                       ' . $value['title'] . '

                                    </div>
                                    <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                        ' . $value['files'] . '
                                    </div>
                                </div> ';
            }
            ?>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            var contentliwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").outerWidth();
            var count = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").length;
            var fullwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?>").width();
            var widthresult = contentliwidth * count;
            if (fullwidth <= widthresult) {
                var eachwidth = parseInt(fullwidth / count) + 'px';
                $(".ctu-ulimate-style-<?php echo $styleid; ?> li").css("width", eachwidth);
            }
        });
    </script>
    <?php
}

function ctu_ultimate_oxi_shortcode_style4($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[11] . '|' . $styledata[45] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            display: flex;
            box-shadow:   0 0 <?php echo $styledata[51]; ?>px <?php echo $styledata[53]; ?>;
            border-radius: <?php echo $styledata[55]; ?>px;
            overflow: hidden;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: calc(100% - <?php echo $styledata[25]; ?>%);
            float: left;
            list-style: none;
            text-align: center;
            justify-content: flex-start;
            overflow: hidden;
            margin-bottom: 0;
            background-color: <?php echo $styledata[5]; ?>;
            padding: <?php echo $styledata[21]; ?>px;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            width: 100%;
            float:left;
            position: relative;
            list-style: none;
            cursor: pointer;
            max-width: <?php echo $styledata[15]; ?>px;
            position: relative;
            display: block;
            margin-bottom: 0;
            border-left: 1px solid <?php echo $styledata[7]; ?>;
            padding: <?php echo $styledata[17]; ?>px <?php echo $styledata[19]; ?>px;
            text-align: left;
            color: <?php echo $styledata[3]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight: <?php echo $styledata[13]; ?>;
            line-height: 120%;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active .ctu-absolute{
            position: absolute;
            top: 15%;
            bottom: 15%;
            width:  3px;
            background-color: <?php echo $styledata[9]; ?>;
            left: -2px;

        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: <?php echo $styledata[25]; ?>%;
            float: left;
            display: -webkit-box;
            overflow: hidden;

        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            display: none;
            line-height: 100%;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[17]; ?>px 10px;
            font-weight: <?php echo $styledata[13]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[9]; ?>
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width:100%;
            floar:left;
            display: none;
            font-size: <?php echo $styledata[23]; ?>px;
            color:<?php echo $styledata[27]; ?>;
            background-color: <?php echo $styledata[29]; ?>;
            font-weight: <?php echo $styledata[47]; ?>;
            line-height: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[35]; ?>% <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>% <?php echo $styledata[41]; ?>%;
            border-left: 1px solid <?php echo $styledata[31]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .ctu-content-span{
            max-width: 50px;
            height: 3px;
            background-color: <?php echo $styledata[9]; ?>;
            margin: <?php
            if ($styledata[49] == 'left') {
                echo '0 auto 0 0';
            } elseif ($styledata[49] == 'center') {
                echo '0 auto';
            } elseif ($styledata[49] == 'right') {
                echo '0 0 0 auto';
            }
            ?>;
            margin-bottom: <?php echo $styledata[33]; ?>px;

        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
                box-shadow: none;
                overflow: visible;
                border-radius: 0;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                display: block;
                overflow:   visible;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
                box-shadow:   0 0 5px <?php echo $styledata[53]; ?>;
                margin-bottom: 10px;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                margin-bottom: 10px;
                box-shadow:   0 0 5px <?php echo $styledata[53]; ?>;
                border-left: none;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '">
                    <ul class="ctu-ulimate-style-' . $styleid . '">';
    foreach ($listdata as $value) {
        echo ' <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                ' . ctu_html_special_charecter($value['title']) . ' 
                                 <div class="ctu-absolute"></div>
                             </li>';
    }
    echo '</ul>
                    <div class="ctu-ultimate-style-' . $styleid . '-content ">';
    foreach ($listdata as $value) {
        echo ' <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                             ' . ctu_html_special_charecter($value['title']) . '
                        </div>
                        <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                            <div class="ctu-content-span"></div>
                            ' . ctu_html_special_charecter($value['files']) . '
                        </div>';
    }
    echo '</div></div>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>

    <?php
}

function ctu_ultimate_oxi_shortcode_style5($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[13] . '|' . $styledata[43] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            box-shadow: 0 0 <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>;
            border-radius: <?php echo $styledata[25]; ?>px <?php echo $styledata[25]; ?>px 0 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            display: flex;
            list-style:none;
            float: left;
            text-align: center;
            margin-bottom: 0;
            border-radius: <?php echo $styledata[25]; ?>px <?php echo $styledata[25]; ?>px 0 0;
            justify-content:  <?php echo $styledata[17]; ?>;
            border-bottom: 1px solid <?php echo $styledata[19]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            z-index: 1;
            position: relative;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            cursor: pointer;
            float: left;
            list-style:none;
            margin-bottom: 0;
            text-align: center;
            position: relative;
            padding: <?php echo $styledata[23]; ?>px 10px;        
            font-size: <?php echo $styledata[1]; ?>px;
            line-height: 120%;
            color: <?php echo $styledata[3]; ?>;
            width: <?php echo $styledata[21]; ?>px;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[13]); ?>;
            font-weight: <?php echo $styledata[15]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li span{
            width: 100%;
            display: block;
            text-align: center;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li span .fa{
            margin-bottom: <?php echo $styledata[11]; ?>px;
            font-size: <?php echo $styledata[9]; ?>px;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            position: relative;
            transition:  all 0.5s linear;
            color: <?php echo $styledata[7]; ?>;
        }
        .ctu-absulote{
            position: absolute;
            width: 11px;
            height: 11px;
            margin: auto;
            left: 0;
            right: 0;
            border-color: <?php echo $styledata[19]; ?>;
            border: 1px solid;
            border-radius: 10px;
            bottom: -6px;
            background-color: transparent;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active .ctu-absulote{
            background-color: <?php echo $styledata[7]; ?>;
            border-color: <?php echo $styledata[7]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            cursor: pointer;
            display: none;
            width: 100%;
            font-weight: <?php echo $styledata[19]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[13]); ?> ;
            line-height: 120%;
            padding: <?php echo $styledata[23]; ?>px 10px;
            text-align: center;
            font-size: <?php echo $styledata[1]; ?>px;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            border-radius: 5px;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            transition:  all 0.5s linear;
            color: <?php echo $styledata[7]; ?>;
            border-bottom: 1px solid <?php echo $styledata[19]; ?>;
            border-radius: 5px 5px 0 0;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            display: none;
            padding: <?php echo $styledata[33]; ?>% <?php echo $styledata[35]; ?>% <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>%;
            font-size: <?php echo $styledata[27]; ?>px;
            color: <?php echo $styledata[29]; ?>;
            line-height: <?php echo $styledata[41]; ?>;
            text-align: <?php echo $styledata[47]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[43]); ?>;
            font-weight: <?php echo $styledata[45]; ?>;
            background-color: <?php echo $styledata[31]; ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                box-shadow: none;
                border-radius: 0;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                margin-bottom: 10px;
                box-shadow: 0 0 5px <?php echo $styledata[31]; ?>;
                border-radius: <?php echo $styledata[25]; ?>px;
                overflow: hidden;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '">
                             <ul class="ctu-ulimate-style-' . $styleid . '">';
    foreach ($listdata as $value) {
        echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                <span>' . ctu_html_special_charecter($value['css']) . '</span>
                                ' . ctu_html_special_charecter($value['title']) . '
                                <div class="ctu-absulote"></div>
                            </li> ';
    }
    echo '  </ul>';
    foreach ($listdata as $value) {
        echo ' <div class="ctu-ultimate-style-' . $styleid . '-content">
                                <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                    ' . ctu_html_special_charecter($value['css']) . '   ' . ctu_html_special_charecter($value['title']) . '
                                    
                                </div>
                                <div class="ctu-ulitate-style-' . $styleid . '-tabs " id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                    ' . ctu_html_special_charecter($value['files']) . '
                                 </div>
                            </div> ';
    }
    echo '</div>';
    ?>
    <script type = "text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            var contentliwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").outerWidth();
            var count = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").length;
            var fullwidth = jQuery(".ctu-ulimate-style-<?php echo $styleid; ?>").width();
            var widthresult = contentliwidth * count;
            if (fullwidth <= widthresult) {
                var eachwidth = parseInt(fullwidth / count) + 'px';
                $(".ctu-ulimate-style-<?php echo $styleid; ?> li").css("width", eachwidth);
            }
        });
    </script>

    <?php
}

function ctu_ultimate_oxi_shortcode_style6($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[11] . '|' . $styledata[37] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            display: flex;
            background-color: <?php echo $styledata[23]; ?>;
            box-shadow:   0 0 <?php echo $styledata[43]; ?>px <?php echo $styledata[45]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            float: left;
            list-style: none;
            width: calc(100% - <?php echo $styledata[33]; ?>%);
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            width: 95%;
            margin-bottom: 0;
            transition: all 0.3s linear;
            cursor: pointer;
            position: relative;
            padding: <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>px;
            margin-right: 5%;
            font-size: <?php echo $styledata[1]; ?>px;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-weight: <?php echo $styledata[13]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;

        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[7]; ?>;
            width: 100%;
            margin-right: 0;
            background-color:  <?php echo $styledata[9]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active .ctu-absolute{
            position: absolute;
            left: 0;
            top: 15%;
            bottom: 15%;
            width: 3px;
            background-color:  <?php echo $styledata[7]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: <?php echo $styledata[33]; ?>%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            display: none;
            line-height: 100%;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>px;
            font-weight: <?php echo $styledata[13]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            display: flex;
            display: none;
            text-align: <?php echo $styledata[41]; ?>;
            font-size: <?php echo $styledata[19]; ?>px;
            color: <?php echo $styledata[21]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[37]); ?>;
            font-weight: <?php echo $styledata[33]; ?>;
            line-height: <?php echo $styledata[35]; ?>;
            padding: <?php echo $styledata[25]; ?>%<?php echo $styledata[27]; ?>% <?php echo $styledata[29]; ?>% <?php echo $styledata[31]; ?>%;
        }

        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
                box-shadow: none;
                background-color: transparent;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                border-left: none;
                display: block;
                overflow:   visible;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
                box-shadow:   0 0 5px <?php echo $styledata[45]; ?>;
                margin-bottom: 10px;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                margin-bottom: 10px;
                background-color: <?php echo $styledata[23]; ?>;
                box-shadow:   0 0 5px <?php echo $styledata[45]; ?>;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . ' ctu-ultimate-wrapper">'
    . '<ul class="ctu-ulimate-style-' . $styleid . ' ctu-edit-heading">';
    foreach ($listdata as $value) {
        echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                ' . ctu_html_special_charecter($value['title']) . '
                                <div class="ctu-absolute"></div>
                            </li>';
    }
    echo ' </ul><div class="ctu-ultimate-style-' . $styleid . '-content">';
    foreach ($listdata as $value) {
        echo '<div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                ' . ctu_html_special_charecter($value['title']) . '
                                
                            </div>
                            <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                 ' . ctu_html_special_charecter($value['files']) . '
                            </div>';
    }
    echo '</div> </div>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>

    <?php
}

function ctu_ultimate_oxi_shortcode_style7($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[13] . '|' . $styledata[39] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            box-shadow:   0 0 <?php echo $styledata[47]; ?>px <?php echo $styledata[49]; ?>;
            border: 1px solid <?php echo $styledata[45]; ?>;
            border-radius: <?php echo $styledata[51]; ?>px <?php echo $styledata[51]; ?>px 0 0;
            overflow: hidden;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            display: flex;
            margin-bottom: 0;
            list-style: none;
            background-color:  <?php echo $styledata[5]; ?>;
            justify-content:  <?php echo $styledata[19]; ?>;
            border-bottom: 1px solid <?php echo $styledata[11]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            width: <?php echo $styledata[17]; ?>px;
            float: left;
            list-style: none;
            text-align: center;
            cursor: pointer;
            margin-bottom: 0;
            font-size: <?php echo $styledata[1]; ?>px;
            color: <?php echo $styledata[3]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[13]); ?>;
            font-weight: <?php echo $styledata[15]; ?>;
            padding: <?php echo $styledata[21]; ?>px 10px;
            border-right: 1px solid <?php echo $styledata[11]; ?>;

        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:last-of-type{
            border-right: none;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
        }

        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            float: left;
            display: none;
            line-height: 100%;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            color: <?php echo $styledata[3]; ?>;
            padding: <?php echo $styledata[21]; ?>px 10px;
            font-weight: <?php echo $styledata[15]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[13]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
            border-bottom: 1px solid <?php echo $styledata[11]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            float: left;
            display: none;
            font-size: <?php echo $styledata[23]; ?>px;
            color: <?php echo $styledata[25]; ?>;
            background-color: <?php echo $styledata[27]; ?>;
            font-weight: <?php echo $styledata[41]; ?>;
            line-height: <?php echo $styledata[37]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[39]); ?>;
            padding: <?php echo $styledata[29]; ?>% <?php echo $styledata[31]; ?>% <?php echo $styledata[33]; ?>% <?php echo $styledata[35]; ?>%;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
                box-shadow: none;
                border: none;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                box-shadow:   0 0 <?php echo $styledata[47]; ?>px <?php echo $styledata[49]; ?>;
                border: 1px solid  <?php echo $styledata[45]; ?>;
                border-radius: <?php echo $styledata[51]; ?>px;
                overflow: hidden;
                margin-bottom: 10px;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }

        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '">
                    <ul class="ctu-ulimate-style-' . $styleid . '">';
    foreach ($listdata as $value) {
        echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                ' . ctu_html_special_charecter($value['title']) . ' 
                            </li>';
    }
    echo '</ul>';
    foreach ($listdata as $value) {
        echo ' <div class="ctu-ultimate-style-' . $styleid . '-content">
                        <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                            ' . ctu_html_special_charecter($value['title']) . '
                        </div>
                        <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                            ' . ctu_html_special_charecter($value['files']) . '
                        </div>
                    </div> ';
    }
    echo ' </div>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>

    <?php
}

function ctu_ultimate_oxi_shortcode_style8($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[11] . '|' . $styledata[37] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            list-style: none;
            display: flex;
            text-align: center;
            justify-content: <?php echo $styledata[17]; ?>;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            width: <?php echo $styledata[15]; ?>px;
            float: left;
            z-index: 2;
            position: relative;
            bottom: -1px;
            list-style: none;
            cursor: pointer;
            margin-bottom: 0;
            border-top: 1px solid;
            border-right: 1px solid;
            border-bottom: 1px solid;
            border-color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[19]; ?>px 10px;
            text-align: center;
            color: <?php echo $styledata[3]; ?>;
            background-color:  <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight: <?php echo $styledata[13]; ?>;
            line-height: 130%;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:first-child{
            border-left: 1px solid <?php echo $styledata[43]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[7]; ?>;
            background-color:  <?php echo $styledata[9]; ?>;
            border-bottom-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;

        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            display: none;
            line-height: 100%;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[19]; ?>px 10px;
            font-weight: <?php echo $styledata[15]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
            border-bottom: 1px solid <?php echo $styledata[43]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            display: none;
            border: 1px solid <?php echo $styledata[43]; ?>;
            font-size: <?php echo $styledata[21]; ?>px;
            color: <?php echo $styledata[23]; ?>;
            background-color:<?php echo $styledata[25]; ?>;
            font-weight: <?php echo $styledata[39]; ?>;
            line-height: <?php echo $styledata[35]; ?>;
            padding: <?php echo $styledata[27]; ?>% <?php echo $styledata[29]; ?>% <?php echo $styledata[31]; ?>% <?php echo $styledata[33]; ?>% ;
            text-align: <?php echo $styledata[41]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[37]); ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid <?php echo $styledata[43]; ?>;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                border:none;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '"> <ul class="ctu-ulimate-style-' . $styleid . '">';
    foreach ($listdata as $value) {
        echo '   <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                    ' . ctu_html_special_charecter($value['title']) . '
                                </li>';
    }
    echo '</ul>';
    foreach ($listdata as $value) {
        echo ' <div class="ctu-ultimate-style-' . $styleid . '-content">
                                    <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                       ' . ctu_html_special_charecter($value['title']) . '
                                    </div>
                                    <div class="ctu-ulitate-style-' . $styleid . '-tabs ctu-edit-content" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                       ' . ctu_html_special_charecter($value['files']) . '
                                    </div>
                                </div> ';
    }
    echo '</div>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>          
    <?php
}

function ctu_ultimate_oxi_shortcode_style9($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[11] . '|' . $styledata[37] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            list-style: none;
            text-align: center;
            display: flex;
            justify-content: <?php echo $styledata[17]; ?>;
            margin-bottom: <?php echo $styledata[21]; ?>px;
            box-shadow:   0 0 <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            border-radius: <?php echo $styledata[27]; ?>px <?php echo $styledata[27]; ?>px 0 0 ;
            margin-bottom: <?php echo $styledata[21]; ?>px
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            position: relative;
            list-style: none;
            cursor: pointer;
            width: <?php echo $styledata[15]; ?>px;
            float: left;
            padding: 5px 10px ;
            text-align: center;
            color: <?php echo $styledata[3]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight: <?php echo $styledata[13]; ?>;
            line-height: 130%;
            margin: <?php echo $styledata[19]; ?>px 0;
            border-right: 1px solid;
            border-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li:last-of-type{
            border-right: none
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[7]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active .ctu-absolute{
            position: absolute;
            left: 0;
            right: 0;
            bottom: calc(-10px - <?php echo $styledata[19]; ?>px );
            margin: 0 auto;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid <?php echo $styledata[5]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }

        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            float: left;
            display: none;
            line-height: 100%;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[19]; ?>px 10px;
            font-weight: <?php echo $styledata[13]; ?>;
            box-shadow:   0 0 <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            border-radius: <?php echo $styledata[27]; ?>px;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            margin-bottom: 10px;
            border-radius:  <?php echo $styledata[27]; ?>px <?php echo $styledata[27]; ?>px 0 0;
        }

        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            width: 100%;
            float: left;
            display: none;
            font-size: <?php echo $styledata[29]; ?>px;
            color: <?php echo $styledata[31]; ?>;
            background-color: <?php echo $styledata[33]; ?>;
            font-weight:<?php echo $styledata[47]; ?>;
            line-height: <?php echo $styledata[43]; ?>;
            text-align: <?php echo $styledata[49]; ?>;
            box-shadow:   0 0 <?php echo $styledata[51]; ?>px <?php echo $styledata[53]; ?>;
            padding: <?php echo $styledata[35]; ?>% <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>% <?php echo $styledata[41]; ?>% ;
            border-radius: 0 0 <?php echo $styledata[27]; ?>px <?php echo $styledata[27]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                margin-bottom: 10px;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '"><ul class="ctu-ulimate-style-' . $styleid . '">';
    foreach ($listdata as $value) {
        echo ' <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                               ' . ctu_html_special_charecter($value['css']) . ' ' . ctu_html_special_charecter($value['title']) . '
                                <div class="ctu-absolute"></div>
                            </li>';
    }
    echo ' </ul>';

    foreach ($listdata as $value) {
        echo '<div class="ctu-ultimate-style-' . $styleid . '-content">
                                    <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                         ' . ctu_html_special_charecter($value['css']) . ' ' . ctu_html_special_charecter($value['title']) . '
                                    </div>
                                    <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                             ' . ctu_html_special_charecter($value['files']) . '
                                    </div>
                                </div> ';
    }
    echo '</div>';
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>
    <?php
}

function ctu_ultimate_oxi_shortcode_style10($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
    wp_enqueue_style('cau-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[9] . '|' . $styledata[47] . '');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: calc(<?php echo 100 - $styledata[35]; ?>% + <?php echo $styledata[25]; ?>px);
            float: left;
            list-style: none;
            text-align: center;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li{
            width:  calc(100% - <?php echo $styledata[25]; ?>px);
            position: relative;
            list-style: none;
            cursor: pointer;
            max-width: <?php echo $styledata[13]; ?>px;
            display: block;
            padding-left: 10px;
            margin-bottom: 0;
            padding-top: <?php echo $styledata[17]; ?>px;
            padding-bottom:<?php echo $styledata[17]; ?>px;
            text-align: left;
            color: <?php echo $styledata[3]; ?>;
            border-left: 5px solid;
            border-left-color: transparent; 
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[9]); ?>;
            font-weight: <?php echo $styledata[11]; ?>;
            line-height: 100%;

        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            color: <?php echo $styledata[5]; ?>;
            border-left-color: <?php echo $styledata[5]; ?>;
            background-color: <?php echo $styledata[7]; ?>;
            border-radius:  5px 0 0 5px;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li em{
            display: inline-block;
            float: left;
            margin-right: 10px;
            background: <?php echo $styledata[23]; ?>;
            text-align: center;
            height: <?php echo $styledata[1]; ?>px;
            width: <?php echo $styledata[1]; ?>px;
            border-radius: 50%;
            font-style: normal;
            font-size: <?php echo $styledata[19]; ?>px;
            color: <?php echo $styledata[21]; ?>;
            line-height: <?php echo $styledata[1]; ?>px;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active{
            border-color:  <?php echo $styledata[5]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active em{
            background-color: <?php echo $styledata[5]; ?>;
            color: <?php echo $styledata[15]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> li.active span{
            width: <?php echo $styledata[25]; ?>px;
            position: absolute;
            right: -<?php echo $styledata[25] / 2; ?>px;
            top: <?php echo $styledata[27]; ?>px;
            height: <?php echo $styledata[25]; ?>px;
            border-radius: 14px;
            -webkit-border-radius: 14px;
            -moz-border-radius: 14px;
            -ms-border-radius: 14px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            display: block;
            background-color: <?php echo $styledata[7]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: calc(<?php echo $styledata[35]; ?>% - <?php echo $styledata[25]; ?>px);
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            display: none;
            float: left;
            line-height: 100%;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[7]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[17]; ?>px 10px;
            font-weight: <?php echo $styledata[13]; ?>;
            border-radius: 5px;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[9]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?> em{
            display: inline-block;
            float: left;
            margin-right: 10px;
            background: <?php echo $styledata[23]; ?>;
            text-align: center;
            height: <?php echo $styledata[1]; ?>px;
            width: <?php echo $styledata[1]; ?>px;
            border-radius: 50%;
            font-weight: normal;
            font-size: <?php echo $styledata[19]; ?>px;
            color: <?php echo $styledata[21]; ?>;
            line-height: <?php echo $styledata[1]; ?>px;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active em{
            background-color: <?php echo $styledata[5]; ?>;
            color: <?php echo $styledata[15]; ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[5]; ?>;
            border-radius: 5px 5px 0 0;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            float: left;
            width: 100%;
            display: none;
            float: left;
            text-align: <?php echo $styledata[51]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[47]); ?>;
            border-radius: <?php echo $styledata[57]; ?>px;
            font-size: <?php echo $styledata[29]; ?>px;
            color: <?php echo $styledata[31]; ?>;
            background-color: <?php echo $styledata[33]; ?>;
            font-weight: <?php echo $styledata[49]; ?>;
            line-height: <?php echo $styledata[45]; ?>;
            box-shadow: 0 0 <?php echo $styledata[53]; ?>px <?php echo $styledata[55]; ?>;
            padding: <?php echo $styledata[37]; ?>% <?php echo $styledata[39]; ?>%  <?php echo $styledata[41]; ?>%  <?php echo $styledata[43]; ?>% ;
        }

        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                float: left;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
                box-shadow:   0 0 5px <?php echo $styledata[55]; ?>;
                margin-bottom: 10px;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                margin-bottom: 10px;
                box-shadow:   0 0 5px <?php echo $styledata[55]; ?>;
                border-radius: 0 0 5px 5px;
            }
        }
    </style>
    <?php
    echo '<div class="ctu-ultimate-wrapper-' . $styleid . '">
                          <ul class="ctu-ulimate-style-' . $styleid . '">';
    $index = 1;
    foreach ($listdata as $value) {
        echo ' <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                <em>' . $index++ . '</em>
                                ' . ctu_html_special_charecter($value['title']) . ' 
                                <span></span>
                            </li>';
    }
    echo '</ul>  <div class="ctu-ultimate-style-' . $styleid . '-content">';
    $index = 1;
    foreach ($listdata as $value) {
        echo '<div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                <em>' . $index++ . '</em>
                               ' . ctu_html_special_charecter($value['title']) . '
                            </div>
                            <div class="ctu-ulitate-style-' . $styleid . '-tabs" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                ' . ctu_html_special_charecter($value['files']) . '
                            </div>';
    }
    echo ' </div> </div>';
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li:first").addClass("active");
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>:first").addClass("active");
            jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs:first").show();
            jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").click(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> li").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });
            jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                jQuery(this).toggleClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp();
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).slideDown();
            });

        });
    </script>

    <?php
}
