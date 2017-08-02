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
$font_asesome = '';
$itemid = '';
if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    $title = sanitize_text_field($_POST['ctu-title']);
    $details = sanitize_text_field($_POST['ctu-details']);
    $css = sanitize_text_field($_POST['ctu-icon']);
    if ($_POST['item-id'] == '') {
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (title, files, css, styleid) VALUES ( %s, %s, %s, %d)", array($title, $details, $css, $styleid)));
    }
    if ($_POST['item-id'] != '' && is_numeric($_POST['item-id'])) {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->update("$table_list", array("title" => $title, "files" => $details, "css" => $css), array('id' => $item_id), array('%s', '%s', '%s'), array('%d'));
    }
}
if (!empty($_POST['edit']) && is_numeric($_POST['item-id'])) {
    $item_id = (int) $_POST['item-id'];
    $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
    $title = $data['title'];
    $files = $data['files'];
    $font_asesome = $data['css'];
    $itemid = $data['id'];
    echo '<script type="text/javascript"> jQuery(document).ready(function () { jQuery("#ctu-admin-model-item-data").modal("show"); });</script>';
}
if (!empty($_POST['delete']) && is_numeric($_POST['item-id'])) {
    $item_id = (int) $_POST['item-id'];
    $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    $data = 'heading-font-size |' . sanitize_text_field($_POST['icon-font-size']) . '| heading-font-color |#949494|'
            . ' heading-background-color |#ededed| heading-font-active-color |#12bee0|'
            . ' icon-font-size |' . sanitize_text_field($_POST['icon-font-size']) . '| icon-margin-bottom |' . sanitize_text_field($_POST['icon-margin-bottom']) . '| heading-font-familly |arial|'
            . ' heading-font-weight |' . sanitize_text_field($_POST['heading-font-weight']) . '| heading-text-align |flex-start|'
            . ' heading-border-color |#239cc4| heading-width |' . sanitize_text_field($_POST['heading-width']) . '|'
            . ' heading-padding |' . sanitize_text_field($_POST['heading-padding']) . '| heading-border-radius |0|'
            . ' content-font-size |' . sanitize_text_field($_POST['content-font-size']) . '| content-font-color |#7a7a7a| content-background-color |#ffffff| content-padding-top |' . sanitize_text_field($_POST['content-padding-top']) . '|'
            . ' content-padding-right |' . sanitize_text_field($_POST['content-padding-right']) . '| content-padding-bottom |' . sanitize_text_field($_POST['content-padding-bottom']) . '|'
            . ' content-padding-left |' . sanitize_text_field($_POST['content-padding-left']) . '| content-line-height |' . sanitize_text_field($_POST['content-line-height']) . '|'
            . ' content-font-familly |arial| content-font-weight |' . sanitize_text_field($_POST['content-font-weight']) . '|'
            . ' content-font-align |' . sanitize_text_field($_POST['content-font-align']) . '| content-box-shadow |0|'
            . ' content-box-shadow-color |#fff| |';
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
                        box-shadow: 0 0 <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>;
                        border-radius: <?php echo $styledata[25]; ?>px <?php echo $styledata[25]; ?>px 0 0;
                    }
                    .ctu-ulimate-style-<?php echo $styleid; ?>{
                        width: 100%;
                        display: flex;
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
                echo '<div class="ctu-ultimate-wrapper-' . $styleid . ' ctu-ultimate-wrapper">
                             <ul class="ctu-ulimate-style-' . $styleid . ' ctu-edit-heading">';
                foreach ($listdata as $value) {
                    echo '<li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
                                <span><i class="fa  ' . $value['css']. '"></i></span>
                                ' . ctu_html_special_charecter($value['title']) . '
                                <div class="ctu-absulote"></div>
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
                            </li> ';
                }
                echo '  </ul>';
                foreach ($listdata as $value) {
                    echo ' <div class="ctu-ultimate-style-' . $styleid . '-content">
                                <div class="ctu-ultimate-style-heading-' . $styleid . ' ctu-edit-heading-h3" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                    <i class="fa  ' . $value['css']. '"></i>  ' . ctu_html_special_charecter($value['title']) . '
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
                                        <div class = "ctu-admin-absulote">
                                                <div class = "ctu-style-absulate-edit">
                                                <button class = "btn btn-info" type = "button" data-toggle = "modal" data-target = "#ctu-edit-content"><i class = "fa fa-cog" aria-hidden = "true"></i></button>
                                                </div>
                                        </div>
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
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#heading-font-size").on("change", function () {
                var idvalue = jQuery('#heading-font-size').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ font-size:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-font-color").on("change", function () {
                var idvalue = jQuery('#heading-font-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-background-color").on("change", function () {
                var idvalue = jQuery('#heading-background-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });

            jQuery("#heading-font-active-color").on("change", function () {
                var idvalue = jQuery('#heading-font-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active .ctu-absulote{ border-color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'>.ctu-edit-heading li.active .ctu-absulote{ background-color: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#icon-font-size").on("change", function () {
                var idvalue = jQuery('#icon-font-size').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li span .fa{ font-size:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#icon-margin-bottom").on("change", function () {
                var idvalue = jQuery('#icon-margin-bottom').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading li span .fa{ margin-bottom:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
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
            jQuery("#heading-text-align").on("change", function () {
                var idvalue = jQuery('#heading-text-align').val();
                jQuery("<style type='text/css'> .ctu-edit-heading{ justify-content: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-border-color").on("change", function () {
                var idvalue = jQuery('#heading-border-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading{ border-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-absulote{ border-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-width").on("change", function () {
                var idvalue = jQuery('#heading-width').val() + "px";
                jQuery("<style type='text/css'> .ctu-edit-heading li{ width:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-padding").on("change", function () {
                var idvalue = jQuery('#heading-padding').val() + 'px 10px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ padding:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-border-radius").on("change", function () {
                var idvalue = jQuery('#heading-border-radius').val() + 'px';
                jQuery("<style type='text/css'> .ctu-edit-heading{ border-radius:" + idvalue + " " + idvalue + " 0 0;} </style>").appendTo(".ctu-edit-heading");
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
                var idvalue = '0 0 ' + jQuery('#content-box-shadow').val() + 'px ' + jQuery('#content-box-shadow-color').val();
                jQuery("<style type='text/css'> .ctu-ultimate-wrapper{ box-shadow:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#content-box-shadow-color").on("change", function () {
                var idvalue = '0 0 ' + jQuery('#content-box-shadow').val() + 'px ' + jQuery('#content-box-shadow-color').val();
                jQuery("<style type='text/css'> .ctu-ultimate-wrapper{ box-shadow:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
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
                            <label for="heading-font-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Title Font Color, Based on Color">Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-font-color" name="heading-font-color" value="<?php echo$styledata[3]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-background-color" class="col-sm-6 control-label" data-toggle="tooltip" class="tooltipLink" data-original-title="Set Your Title background Color, Based on Color">Background  <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-background-color" name="heading-background-color" value="<?php echo $styledata[5]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-active-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Active Title Font Color, Based on Color">Color Active <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-font-active-color" name="heading-font-active-color" value="<?php echo $styledata[7]; ?>">
                            </div>
                        </div>

                        <div class="form-group row form-group-sm">
                            <label for="icon-font-size" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Title Icon Size, Based on Pixel">Icon Size </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[9]; ?>" id="icon-font-size" name="icon-font-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="icon-margin-bottom" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize your Icon Bottom Space, based on pixel">Icon Margin Bottom </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[11]; ?>" id="icon-margin-bottom" name="icon-margin-bottom">
                            </div>
                        </div>

                        <div class="form-group row form-group-sm">
                            <label for="heading-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Title Preferred font, Based on Google Font"> Font Family <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" type="text" name="heading-font-familly" id="heading-font-familly" value="<?php echo $styledata[13]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-weight" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Title Font Weight, Based on CSS Weight" >Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="heading-font-weight" name="heading-font-weight">
                                    <option value="100"     <?php
                                    if ($styledata[15] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200"     <?php
                                    if ($styledata[15] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300"     <?php
                                    if ($styledata[15] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400"     <?php
                                    if ($styledata[15] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500"     <?php
                                    if ($styledata[15] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600"     <?php
                                    if ($styledata[15] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700"     <?php
                                    if ($styledata[15] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800"     <?php
                                    if ($styledata[15] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900"     <?php
                                    if ($styledata[15] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[15] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold"    <?php
                                    if ($styledata[15] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[15] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial"   <?php
                                    if ($styledata[15] == 'initial') {
                                        echo 'selected';
                                    };
                                    ?>>Initial</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-text-align" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Your Title Position">Heading Align  <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="heading-text-align" name="heading-text-align">
                                    <option value="flex-start"     <?php
                                    if ($styledata[17] == 'flex-start') {
                                        echo 'selected';
                                    };
                                    ?>>Left</option>
                                    <option value="center"     <?php
                                    if ($styledata[17] == 'center') {
                                        echo 'selected';
                                    };
                                    ?>>Center</option>
                                    <option value="flex-end"     <?php
                                    if ($styledata[17] == 'flex-end') {
                                        echo 'selected';
                                    };
                                    ?>>Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-border-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Heading Bottom Border Color">Border Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-border-color" name="heading-border-color" value="<?php echo$styledata[19]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-width" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title=" Set Your Title Background Width, Based on Pixel">Width </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[21]; ?>" id="heading-width" name="heading-width">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-padding" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to generate space around Title, Based on Pixel">Padding </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[23]; ?>" id="heading-padding" name="heading-padding">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-border-radius" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Add Rounded Corner on Up Side, Based on Pixel">Border Radius <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[25]; ?>" id="heading-border-radius" name="heading-border-radius">
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
                                <input class="form-control" type="number" value="<?php echo $styledata[27]; ?>" id="content-font-size" name="content-font-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Content Font Color, Based on Color">Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-font-color" name="content-font-color" value="<?php echo $styledata[29]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-background-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Background Color of Content Box">Background Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-background-color" name="content-background-color" value="<?php echo $styledata[31]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-padding-top" class="col-sm-4 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to Generate Space Around Content as top, right, bottom, left. Based on Pixel">Padding </label>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[33]; ?>" id="content-padding-top" name="content-padding-top">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[35]; ?>" id="content-padding-right" name="content-padding-right">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[37]; ?>" id="content-padding-bottom" name="content-padding-bottom">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[39]; ?>" id="content-padding-left" name="content-padding-left">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-line-height" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Line Height, Based on Point">Line Height </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" step="0.1" value="<?php echo $styledata[41]; ?>" id="content-line-height" name="content-line-height">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Content Font, Based on Google Font"> Font Family <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" value="<?php echo $styledata[43]; ?>" type="text" name="content-font-familly" id="content-font-familly">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Content Font Weight, Based on CSS Weight">Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="content-font-weight" name="content-font-weight">
                                    <option value="100" <?php
                                    if ($styledata[45] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200" <?php
                                    if ($styledata[45] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300" <?php
                                    if ($styledata[45] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400" <?php
                                    if ($styledata[45] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500" <?php
                                    if ($styledata[45] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600" <?php
                                    if ($styledata[45] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700" <?php
                                    if ($styledata[45] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800" <?php
                                    if ($styledata[45] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900" <?php
                                    if ($styledata[45] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[45] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold" <?php
                                    if ($styledata[45] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[45] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial" <?php
                                    if ($styledata[45] == 'initial') {
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
                                    if ($styledata[47] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Left</option>
                                    <option value="center" <?php
                                    if ($styledata[47] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Center</option>
                                    <option value="right" <?php
                                    if ($styledata[47] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-box-shadow" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Attach Shadow Size to Tabs, Based on Pixel">Box Shadow <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[49]; ?>" id="content-box-shadow" name="content-box-shadow">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-box-shadow-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Add custom Shadow Color to Tabs">Box Shadow Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-box-shadow-color" name="content-box-shadow-color" value="<?php echo $styledata[51]; ?>">
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
                            <input type="text "class="form-control" id="cau-title" name="ctu-title" value="<?php echo ctu_admin_special_charecter($title); ?>">
                            <small class="form-text text-muted">Add or Modify Your Tabs Title.</small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-icon">Font Awesome Icon</label>
                            <input type="text "class="form-control" id="ctu-icon" name="ctu-icon" value="<?php echo ctu_admin_special_charecter($font_asesome); ?>">
                            <small class="form-text text-muted">Use Font Awesome icon As icon example fa-address-book </small>
                        </div>
                        <div class="form-group">
                            <label for="ctu-details">Details:</label>
                            <textarea class="form-control" rows="4" id="ctu-details" name="ctu-details"><?php echo ctu_admin_special_charecter($files); ?></textarea>
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