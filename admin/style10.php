<?php
if (!defined('ABSPATH'))
    exit;
if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
$styleid = (int) $_GET['styleid'];
global $wpdb;
$table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
$table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
$title = '';
$files = '';
$itemid = '';
if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    $title = sanitize_text_field($_POST['ctu-title']);
    $details = sanitize_text_field($_POST['ctu-details']);
    if ($_POST['item-id'] == '') {
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (title, files, styleid) VALUES ( %s, %s, %d)", array($title, $details, $styleid)));
    }
    if ($_POST['item-id'] != '' && is_numeric($_POST['item-id'])) {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->update("$table_list", array("title" => $title, "files" => $details), array('id' => $item_id), array('%s', '%s'), array('%d'));
    }
}
if (!empty($_POST['edit']) && is_numeric($_POST['item-id'])) {
    $item_id = (int) $_POST['item-id'];
    $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
    $title = $data['title'];
    $files = $data['files'];
    $itemid = $data['id'];
    echo '<script type="text/javascript"> jQuery(document).ready(function () { jQuery("#ctu-admin-model-item-data").modal("show"); });</script>';
}
if (!empty($_POST['delete']) && is_numeric($_POST['item-id'])) {
    $item_id = (int) $_POST['item-id'];
    $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    $data = 'heading-font-size |' . sanitize_text_field($_POST['heading-font-size']) . '| heading-font-color |#8f8f8f|'
            . ' heading-font-active-color |#ffffff| heading-background-active-color |#0dbbde| heading-font-familly |arial| heading-font-weight |' . sanitize_text_field($_POST['heading-font-weight']) . '| heading-width |' . sanitize_text_field($_POST['heading-width']) . '|'
            . ' heading-number-active-color |#008f8f| heading-padding |' . sanitize_text_field($_POST['heading-padding']) . '|'
            . ' heading-number-size |' . sanitize_text_field($_POST['heading-number-size']) . '| heading-number-color |#7d7d7d| heading-number-background-color |#ffffff|'
            . ' heading-adsulute-width |' . sanitize_text_field($_POST['heading-adsulute-width']) . '| heading-adsulute-top |' . sanitize_text_field($_POST['heading-adsulute-top']) . '|'
            . ' content-font-size |' . sanitize_text_field($_POST['content-font-size']) . '| content-font-color |#787878| content-background-color |#ffffff| content-width |' . sanitize_text_field($_POST['content-width']) . '|'
            . ' content-padding-top |' . sanitize_text_field($_POST['content-padding-top']) . '| content-padding-right |' . sanitize_text_field($_POST['content-padding-right']) . '| content-padding-bottom |' . sanitize_text_field($_POST['content-padding-bottom']) . '| content-padding-left |' . sanitize_text_field($_POST['content-padding-left']) . '|'
            . ' content-line-height |' . sanitize_text_field($_POST['content-line-height']) . '| content-font-familly |arial| content-font-weight |' . sanitize_text_field($_POST['content-font-weight']) . '| content-font-align |' . sanitize_text_field($_POST['content-font-align']) . '|'
            . ' content-box-shadow |0| content-box-shadow-color |#fff| content-border-radius |0| |';
    $data = sanitize_text_field($data);
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $styleid));
    
}
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id DESC ", $styleid), ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
$styledata = $styledata['css'];
$styledata = explode('|', $styledata);
?>

<div class="wrap">
    <?php tabs_OXI_VC_Pro_Promote(); ?>
    <div class="ctu-admin-wrapper">
        <div class="ctu-admin-style-left">
             <?php tabs_OXI_VC_Pro_admin_head($styleid); ?>
            <div class="ctu-admin-style-left-template">
                <style>
                    .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                        width: 100%;
                        float: left;
                    }
                    .ctu-ulimate-style-<?php echo $styleid; ?>{
                        width: calc(<?php echo 100 - $styledata[35] ; ?>% + <?php echo $styledata[25] ; ?>px);
                        float: left;
                        list-style: none;
                        text-align: center;
                        margin-bottom: 0;
                    }
                    .ctu-ulimate-style-<?php echo $styleid; ?> li{
                        width:  calc(100% - <?php echo $styledata[25] ; ?>px);
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
                        border-color:  <?php echo $styledata[5]; ?>
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
                        width: calc(<?php echo $styledata[35] ; ?>% - <?php echo $styledata[25] ; ?>px);
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
                    .ctu-edit-heading-h3, .ctu-edit-heading li{
                        position: relative;
                    }
                    .ctu-edit-heading li:hover .ctu-admin-absulote, .ctu-edit-heading-h3:hover .ctu-admin-absulote, .ctu-edit-content:hover .ctu-admin-absulote{
                        display: block;
                    }
                    .ctu-edit-content{
                        position: relative;
                    }
                </style>
                <?php
                echo '<div class="ctu-ultimate-wrapper-' . $styleid . '">
                          <ul class="ctu-ulimate-style-' . $styleid . ' ctu-edit-heading">';
                $index = 1;
                foreach ($listdata as $value) {
                    echo ' <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                <em>' . $index++ . '</em>
                                ' . ctu_html_special_charecter($value['title']) . ' 
                                <span></span>
                                <div class="ctu-admin-absulote"> 
                                    <div class="ctu-style-absulate-edit">
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#ctu-edit-heading"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                    </div> 
                                    <div class="ctu-style-absulate-edit">
                                        <form method="post">
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary btn-xs" type="submit" value="edit" name="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </form>
                                    </div> 
                                    <div class="ctu-style-absulate-delete">
                                        <form method="post">
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger btn-xs" type="submit" value="delete" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>  
                                        </form>
                                    </div>
                                </div>
                            </li>';
                }
                echo '</ul>  <div class="ctu-ultimate-style-' . $styleid . '-content  ctu-ultimate-content">';
                $index = 1;
                foreach ($listdata as $value) {
                    echo '<div class="ctu-ultimate-style-heading-' . $styleid . ' ctu-edit-heading-h3" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                <em>' . $index++ . '</em>
                               ' . ctu_html_special_charecter($value['title']) . '
                                <div class="ctu-admin-absulote"> 
                                    <div class="ctu-style-absulate-edit">
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#ctu-edit-heading"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                    </div> 
                                    <div class="ctu-style-absulate-edit">
                                        <form method="post">
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary btn-xs" type="submit" value="edit" name="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </form> 
                                    </div> 
                                    <div class="ctu-style-absulate-delete">
                                        <form method="post">
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger btn-xs" type="submit" value="delete" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ctu-ulitate-style-' . $styleid . '-tabs ctu-edit-content" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                ' . ctu_html_special_charecter($value['files']) . '
                                <div class="ctu-admin-absulote"> 
                                    <div class="ctu-style-absulate-edit">
                                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#ctu-edit-content"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                    </div> 
                                </div>
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
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#heading-font-size").on("change", function () {
                var idvalue = jQuery('#heading-font-size').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ font-size:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ width:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ height:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ line-height:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-font-color").on("change", function () {
                var idvalue = jQuery('#heading-font-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-font-active-color").on("change", function () {
                var idvalue = jQuery('#heading-font-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active em{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active { border-left-color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-background-active-color").on("change", function () {
                var idvalue = jQuery('#heading-background-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active span{ background-color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery('#heading-font-familly').fontselect().change(function () {
                var font = jQuery(this).val().replace(/\+/g, ' ');
                font = font.split(':');
                jQuery("<style type='text/css'> .ctu-edit-heading li{ font-family:" + font[0] + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-font-weight").on("change", function () {
                var idvalue = jQuery('#heading-font-weight').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li{ font-weight:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-width").on("change", function () {
                var idvalue = jQuery('#heading-width').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ max-width: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-text-align").on("change", function () {
                var idvalue = jQuery('#heading-text-align').val();
                jQuery("<style type='text/css'> .ctu-edit-heading{ justify-content: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-padding").on("change", function () {
                var idvalue = jQuery('#heading-padding').val() + 'px 10px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ padding: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-number-size").on("change", function () {
                var idvalue = jQuery('#heading-number-size').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ font-size: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-number-color").on("change", function () {
                var idvalue = jQuery('#heading-number-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-number-active-color").on("change", function () {
                var idvalue = jQuery('#heading-number-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active em{ color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-number-background-color").on("change", function () {
                var idvalue = jQuery('#heading-number-background-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li em{ background-color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-adsulute-width").on("change", function () {
                 var idva = jQuery('#heading-adsulute-width').val() / 2 + 'px';
                var idvalue = jQuery('#heading-adsulute-width').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li.active span{ height: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active span{ width: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active span{ right: -" + idva + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-adsulute-top").on("change", function () {
                var idvalue = jQuery('#heading-adsulute-top').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li.active span{ top:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });

            jQuery("#content-font-size").on("change", function () {
                var idvalue = jQuery('#content-font-size').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-content{ font-size:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-font-color").on("change", function () {
                var idvalue = jQuery('#content-font-color').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-background-color").on("change", function () {
                var idvalue = jQuery('#content-background-color').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-width").on("change", function () {
                var idhead =  100 - jQuery('#content-width').val() + '%';
                var idvalue = jQuery('#content-width').val() + '%';
                var idval = jQuery('#heading-adsulute-width').val() + 'px';
                jQuery("<style type='text/css'> .ctu-ultimate-content{ width: calc(" + idvalue + " -  " + idval + ");} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading{ width: calc( "+ idhead+ " + " + idval + " );} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-padding-top").on("change", function () {
                var idvalue = jQuery('#content-padding-top').val() + '%';
                jQuery("<style type='text/css'> .ctu-edit-content{ padding-top:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-padding-right").on("change", function () {
                var idvalue = jQuery('#content-padding-right').val() + '%';
                jQuery("<style type='text/css'> .ctu-edit-content{ padding-right:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-padding-bottom").on("change", function () {
                var idvalue = jQuery('#content-padding-bottom').val() + '%';
                jQuery("<style type='text/css'> .ctu-edit-content{ padding-bottom:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-padding-left").on("change", function () {
                var idvalue = jQuery('#content-padding-left').val() + '%';
                jQuery("<style type='text/css'> .ctu-edit-content{ padding-left:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-line-height").on("change", function () {
                var idvalue = jQuery('#content-line-height').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ line-height:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery('#content-font-familly').fontselect().change(function () {
                var font = jQuery(this).val().replace(/\+/g, ' ');
                font = font.split(':');
                jQuery("<style type='text/css'> .ctu-edit-content{ font-family:" + font[0] + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-font-weight").on("change", function () {
                var idvalue = jQuery('#content-font-weight').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ font-weight:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-font-align").on("change", function () {
                var idvalue = jQuery('#content-font-align').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ text-align:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-box-shadow").on("change", function () {
                var idvalue = jQuery('#content-box-shadow').val() + 'px ';
                var idvalues = jQuery('#content-box-shadow-color').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ box-shadow:0 0 " + idvalue + idvalues + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-box-shadow-color").on("change", function () {
                var idvalue = jQuery('#content-box-shadow').val() + 'px ';
                var idvalues = jQuery('#content-box-shadow-color').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ box-shadow:0 0 " + idvalue + idvalues + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-border-radius").on("change", function () {
                var idvalue = jQuery('#content-border-radius').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-content{ border-radius:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });

        });
    </script>
    <form method="post">
        <div class="modal fade ctu-draggable" id="ctu-edit-heading" data-backdrop="false" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Heading</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-size" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Title Font Size, Based on Pixel">Font Size </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[1]; ?>" id="heading-font-size" name="heading-font-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Title Font Color, Based on Color">Color</label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-font-color" name="heading-font-color" value="<?php echo$styledata[3]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-active-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Active Title Font Color, Based on Color">Color Active</label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-font-active-color" name="heading-font-active-color" value="<?php echo $styledata[5]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-background-active-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title=" Set Your Active Title Background Color, Based on Color">Background Active </label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-background-active-color" name="heading-background-active-color" value="<?php echo $styledata[7]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Title Preferred font, Based on Google Font"> Font Family </label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" type="text" name="heading-font-familly" id="heading-font-familly" value="<?php echo $styledata[9]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-weight" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Title Font Weight, Based on CSS Weight" >Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="heading-font-weight" name="heading-font-weight">
                                    <option value="100"     <?php
                                    if ($styledata[11] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200"     <?php
                                    if ($styledata[11] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300"     <?php
                                    if ($styledata[11] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400"     <?php
                                    if ($styledata[11] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500"     <?php
                                    if ($styledata[11] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600"     <?php
                                    if ($styledata[11] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700"     <?php
                                    if ($styledata[11] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800"     <?php
                                    if ($styledata[11] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900"     <?php
                                    if ($styledata[11] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[11] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold"    <?php
                                    if ($styledata[11] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[11] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial"   <?php
                                    if ($styledata[11] == 'initial') {
                                        echo 'selected';
                                    };
                                    ?>>Initial</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-width" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Your Title Background Width, Based on Pixel">Width </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[13]; ?>" id="heading-width" name="heading-width">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-padding" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to generate space around Title, Based on Pixel">Padding </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[17]; ?>" id="heading-padding" name="heading-padding">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-number-size" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Number Size, Based on Pixel">Number Font Size </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[19]; ?>" id="heading-number-size" name="heading-number-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-number-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize Number text color, Based on Color">Number Color</label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-number-color" name="heading-number-color" value="<?php echo $styledata[21]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-number-active-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize Number Active Color, Based on Color">Active Color</label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-number-active-color" name="heading-number-active-color" value="<?php echo $styledata[15]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-number-background-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize Number Background Color, Based on Color">Number Background </label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-number-background-color" name="heading-number-background-color" value="<?php echo $styledata[23]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-adsulute-width" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Width of Right side, Based on Pixel">Absolute width </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[25]; ?>" id="heading-adsulute-width" name="heading-adsulute-width">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-adsulute-top" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize position of Right Side, Based on Pixel">Absolute Top </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[27]; ?>" id="heading-adsulute-top" name="heading-adsulute-top">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade ctu-draggable" id="ctu-edit-content" data-backdrop="false" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Content</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row form-group-sm">
                            <label for="content-font-size" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Size, Based on Pixel">Font Size </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[29]; ?>" id="content-font-size" name="content-font-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Content Font Color, Based on Color">Color </label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-font-color" name="content-font-color" value="<?php echo $styledata[31]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-background-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Background Color of Content Box">Background Color </label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-background-color" name="content-background-color" value="<?php echo $styledata[33]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-width" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Content and title Box width Based on Full width Percentage ">Content Width </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[35]; ?>" min="10" max="90" id="content-width" name="content-width">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-padding-top" class="col-sm-4 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to Generate Space Around Content as top, right, bottom, left. Based on Pixel">Padding </label>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[37]; ?>" id="content-padding-top" name="content-padding-top">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[39]; ?>" id="content-padding-right" name="content-padding-right">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[41]; ?>" id="content-padding-bottom" name="content-padding-bottom">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[43]; ?>" id="content-padding-left" name="content-padding-left">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-line-height" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Line Height, Based on Point">Line Height </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" step="0.1" value="<?php echo $styledata[45]; ?>" id="content-line-height" name="content-line-height">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Content Font, Based on Google Font"> Font Family </label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" value="<?php echo $styledata[47]; ?>" type="text" name="content-font-familly" id="content-font-familly">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Content Font Weight, Based on CSS Weight">Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="content-font-weight" name="content-font-weight">
                                    <option value="100" <?php
                                    if ($styledata[49] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200" <?php
                                    if ($styledata[49] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300" <?php
                                    if ($styledata[49] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400" <?php
                                    if ($styledata[49] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500" <?php
                                    if ($styledata[49] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600" <?php
                                    if ($styledata[49] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700" <?php
                                    if ($styledata[49] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800" <?php
                                    if ($styledata[49] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900" <?php
                                    if ($styledata[49] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[49] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold" <?php
                                    if ($styledata[49] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[49] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial" <?php
                                    if ($styledata[49] == 'initial') {
                                        echo 'selected';
                                    };
                                    ?>>Initial</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-align" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Content Text Position, Based on left or center or Right">Text Align  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="content-font-align" name="content-font-align">
                                    <option value="left" <?php
                                    if ($styledata[51] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Left</option>
                                    <option value="center" <?php
                                    if ($styledata[51] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Center</option>
                                    <option value="right" <?php
                                    if ($styledata[51] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-box-shadow" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Attach Shadow Size to Content Box, Based on Pixel">Box Shadow </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[53]; ?>" id="content-box-shadow" name="content-box-shadow">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-box-shadow-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Add custom Shadow Color to Content Box">Box Shadow Color </label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-box-shadow-color" name="content-box-shadow-color" value="<?php echo $styledata[55]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-border-radius" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Add Rounded Corner on Content Box, Based on Pixel">Border Radius </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[57]; ?>" id="content-border-radius" name="content-border-radius">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="ctu-admin-model-item-data" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Items Add or Edit</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ctu-title">Title</label>
                            <input type="text "class="form-control" id="cau-title" name="ctu-title" value="<?php echo ctu_admin_special_charecter($title) ?>">
                            <small class="form-text text-muted">Add or Modify Your Tabs Title.</small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-details">Details:</label>
                            <textarea class="form-control" rows="4" id="ctu-details" name="ctu-details"><?php echo ctu_admin_special_charecter($files) ?></textarea>
                            <small class="form-text text-muted">Add or Modify Your Content.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="item-id" name="item-id" value="<?php echo $itemid ?>">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" id="item-submit" name="submit" value="submit">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>