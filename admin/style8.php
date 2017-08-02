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
    $data = 'heading-font-size |' . sanitize_text_field($_POST['heading-font-size']) . '| heading-font-color |#ffffff|'
            . ' heading-background-color |#0cccc6| heading-font-active-color |#ffffff|'
            . ' heading-background-active-color |#00b4bd| heading-font-familly |arial| heading-font-weight |' . sanitize_text_field($_POST['heading-font-weight']) . '| heading-width |' . sanitize_text_field($_POST['heading-width']) . '|'
            . ' heading-text-align |' . sanitize_text_field($_POST['heading-text-align']) . '| heading-padding |' . sanitize_text_field($_POST['heading-padding']) . '|'
            . ' content-font-size |' . sanitize_text_field($_POST['content-font-size']) . '| content-font-color |#575757| content-background-color |#e6e6e6|'
            . ' content-padding-top |' . sanitize_text_field($_POST['content-padding-top']) . '| content-padding-right |' . sanitize_text_field($_POST['content-padding-right']) . '| content-padding-bottom |' . sanitize_text_field($_POST['content-padding-bottom']) . '| content-padding-left |' . sanitize_text_field($_POST['content-padding-left']) . '|'
            . ' content-line-height |' . sanitize_text_field($_POST['content-line-height']) . '| content-font-familly |arial| content-font-weight |' . sanitize_text_field($_POST['content-font-weight']) . '| content-font-align |' . sanitize_text_field($_POST['content-font-align']) . '| content-border-color |#e0e0e0| |';
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
                echo '<div class="ctu-ultimate-wrapper-' . $styleid . '"> <ul class="ctu-ulimate-style-' . $styleid . ' ctu-edit-heading">';
                foreach ($listdata as $value) {
                    echo '   <li ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" class="">
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
                                </li>';
                }
                echo '</ul>';
                foreach ($listdata as $value) {
                    echo ' <div class="ctu-ultimate-style-' . $styleid . '-content ctu-edit-content-div">
                                    <div class="ctu-ultimate-style-heading-' . $styleid . ' ctu-edit-heading-h3" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
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
                jQuery("<style type='text/css'> .ctu-edit-heading li{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-font-active-color").on("change", function () {
                var idvalue = jQuery('#heading-font-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-background-active-color").on("change", function () {
                var idvalue = jQuery('#heading-background-active-color').val();
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ background-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li.active{ border-bottom: 1px solid " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
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
                jQuery("<style type='text/css'> .ctu-edit-heading li{ width: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-text-align").on("change", function () {
                var idvalue = jQuery('#heading-text-align').val();
                jQuery("<style type='text/css'> .ctu-edit-heading{ justify-content: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
            });
            jQuery("#heading-padding").on("change", function () {
                var idvalue = jQuery('#heading-padding').val() + 'px 10px';
                jQuery("<style type='text/css'> .ctu-edit-heading li{ padding: " + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
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
            jQuery("#content-border-color").on("change", function () {
                var idvalue = jQuery('#content-border-color').val();
                jQuery("<style type='text/css'> .ctu-edit-content{ border-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
                jQuery("<style type='text/css'> .ctu-edit-heading li{ border-color:" + idvalue + ";} </style>").appendTo(".ctu-edit-heading");
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
                            <label for="heading-background-color" class="col-sm-6 control-label" data-toggle="tooltip" class="tooltipLink" data-original-title="Set Your Title background Color, Based on Color">Background <a class="ctu-pro-only">Pro Only</a></label>
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
                            <label for="heading-background-active-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Your Active Title Background Color, Based on Color">Background Active <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="heading-background-active-color" name="heading-background-active-color" value="<?php echo $styledata[9]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Title Preferred font, Based on Google Font"> Font Family <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" type="text" name="heading-font-familly" id="heading-font-familly" value="<?php echo $styledata[11]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-font-weight" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Title Font Weight, Based on CSS Weight" >Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="heading-font-weight" name="heading-font-weight">
                                    <option value="100"     <?php
                                    if ($styledata[13] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200"     <?php
                                    if ($styledata[13] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300"     <?php
                                    if ($styledata[13] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400"     <?php
                                    if ($styledata[13] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500"     <?php
                                    if ($styledata[13] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600"     <?php
                                    if ($styledata[13] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700"     <?php
                                    if ($styledata[13] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800"     <?php
                                    if ($styledata[13] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900"     <?php
                                    if ($styledata[13] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[13] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold"    <?php
                                    if ($styledata[13] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[17] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial"   <?php
                                    if ($styledata[13] == 'initial') {
                                        echo 'selected';
                                    };
                                    ?>>Initial</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-text-align" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Your Title Position">Heading Align  </label>
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
                            <label for="heading-width" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Set Your Title Background Width, Based on Pixel">Width </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[15]; ?>" id="heading-width" name="heading-width">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="heading-padding" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to generate space around Title, Based on Pixel">Padding </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" value="<?php echo $styledata[19]; ?>" id="heading-padding" name="heading-padding">
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
                                <input class="form-control" type="number" value="<?php echo $styledata[21]; ?>" id="content-font-size" name="content-font-size">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Content Font Color, Based on Color">Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-font-color" name="content-font-color" value="<?php echo $styledata[23]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-background-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Set Custom Background Color of Content Box">Background Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-background-color" name="content-background-color" value="<?php echo $styledata[25]; ?>">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-padding-top" class="col-sm-4 col-form-label"  data-toggle="tooltip" data-placement="top" title="Use Padding to Generate Space Around Content as top, right, bottom, left. Based on Pixel">Padding </label>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[27]; ?>" id="content-padding-top" name="content-padding-top">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[29]; ?>" id="content-padding-right" name="content-padding-right">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[31]; ?>" id="content-padding-bottom" name="content-padding-bottom">
                            </div>
                            <div class="col-sm-2 nopadding2">
                                <input class="form-control" type="number" value="<?php echo $styledata[33]; ?>" id="content-padding-left" name="content-padding-left">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-line-height" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Customize Your Content Font Line Height, Based on Point">Line Height </label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="number" step="0.1" value="<?php echo $styledata[35]; ?>" id="content-line-height" name="content-line-height">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Content Font, Based on Google Font"> Font Family <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input class="cau-admin-font" value="<?php echo $styledata[37]; ?>" type="text" name="content-font-familly" id="content-font-familly">
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Content Font Weight, Based on CSS Weight">Font Weight  </label>
                            <div class="col-sm-6 nopadding">
                                <select class="form-control" id="content-font-weight" name="content-font-weight">
                                    <option value="100" <?php
                                    if ($styledata[39] == '100') {
                                        echo 'selected';
                                    };
                                    ?>>100</option>
                                    <option value="200" <?php
                                    if ($styledata[39] == '200') {
                                        echo 'selected';
                                    };
                                    ?>>200</option>
                                    <option value="300" <?php
                                    if ($styledata[39] == '300') {
                                        echo 'selected';
                                    };
                                    ?>>300</option>
                                    <option value="400" <?php
                                    if ($styledata[39] == '400') {
                                        echo 'selected';
                                    };
                                    ?>>400</option>
                                    <option value="500" <?php
                                    if ($styledata[39] == '500') {
                                        echo 'selected';
                                    };
                                    ?>>500</option>
                                    <option value="600" <?php
                                    if ($styledata[39] == '600') {
                                        echo 'selected';
                                    };
                                    ?>>600</option>
                                    <option value="700" <?php
                                    if ($styledata[39] == '700') {
                                        echo 'selected';
                                    };
                                    ?>>700</option>
                                    <option value="800" <?php
                                    if ($styledata[39] == '800') {
                                        echo 'selected';
                                    };
                                    ?>>800</option>
                                    <option value="900" <?php
                                    if ($styledata[39] == '900') {
                                        echo 'selected';
                                    };
                                    ?>>900</option>
                                    <option value="normal" <?php
                                    if ($styledata[39] == 'normal') {
                                        echo 'selected';
                                    };
                                    ?>>Normal</option>
                                    <option value="bold" <?php
                                    if ($styledata[39] == 'bold') {
                                        echo 'selected';
                                    };
                                    ?>>Bold</option>
                                    <option value="lighter" <?php
                                    if ($styledata[39] == 'lighter') {
                                        echo 'selected';
                                    };
                                    ?>>Lighter</option>
                                    <option value="initial" <?php
                                    if ($styledata[39] == 'initial') {
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
                                    if ($styledata[41] == 'left') {
                                        echo 'selected';
                                    };
                                    ?>>Left</option>
                                    <option value="center" <?php
                                    if ($styledata[41] == 'center') {
                                        echo 'selected';
                                    };
                                    ?>>Center</option>
                                    <option value="right" <?php
                                    if ($styledata[41] == 'right') {
                                        echo 'selected';
                                    };
                                    ?>>Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row form-group-sm">
                            <label for="content-border-color" class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Add Custom color to Border">Border Color <a class="ctu-pro-only">Pro Only</a></label>
                            <div class="col-sm-6 nopadding">
                                <input type="text" class="form-control ctu-vendor-color" id="content-border-color" name="content-border-color" value="<?php echo $styledata[43]; ?>">
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