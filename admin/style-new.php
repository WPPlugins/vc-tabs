<?php
if (!defined('ABSPATH'))
    exit;
if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
if ($_POST['submit'] != '') {
    if ($_POST['style'] == 'style1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style1';
        $css = 'heading-font-size |24| heading-font-color |#545454| heading-background-color |#ffffff| heading-font-active-color |#ffffff| heading-background-active-color |#6dc5db| heading-font-familly |Open+Sans| heading-font-weight |400| heading-text-align |flex-start| heading-width |200| heading-padding |13| heading-Border-radius |0| heading-box-shadow |0| heading-box-shadow-color |#878787| content-font-size |24| content-font-color |#524f4f| content-background-color |#ffffff| content-padding-top |2| content-padding-right |2| content-padding-bottom |2| content-padding-left |2| content-line-height |1.5| content-font-familly |Buda:300| content-font-weight |200| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#cfcfcf| heading-margin-top |0| heading-margin-bottom |7||';
    }
    if ($_POST['style'] == 'style2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style2';
        $css = 'heading-font-size |24| heading-font-color |#c2c2c2| heading-background-color |#6e6e6e| heading-font-active-color |#ffffff| heading-font-familly |arial| heading-font-weight |600| heading-text-align |flex-start| heading-width |200| heading-padding |15| heading-Border-radius |0| content-font-size |18| content-font-color |#6e6e6e| content-background-color |#fff| content-padding-top |4| content-padding-right |5| content-padding-bottom |5| content-padding-left |5| content-line-height |1.5| content-font-familly |arial| content-font-weight |400| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff||';
    }
    if ($_POST['style'] == 'style3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style3';
        $css = 'heading-font-size |24| heading-font-color |#fff| heading-background-color |#757575| heading-border-color |#1abfed| heading-font-active-color |#ffffff| heading-background-active-color |#22b359| heading-border-active-color |#26baeb| heading-font-familly |arial| heading-font-weight |400| heading-text-align |flex-start| heading-width |160| heading-padding |17|heading-box-shadow |0| heading-box-shadow-color |#fff| content-font-size |17| content-font-color |#5c5c5c| content-background-color |#ffffff| content-padding-top |6| content-padding-right |3| content-padding-bottom |5| content-padding-left |4| content-line-height |1.5| content-font-familly |arial| content-font-weight |300| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| heading-margin-right |20||';
    }
    if ($_POST['style'] == 'style4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style4';
        $css = 'heading-font-size |24| heading-font-color |#bfbfbf| heading-background-color |#ffffff| heading-border-color |#bdbdbd| heading-font-active-color |#1cc7a5| heading-font-familly |arial| heading-font-weight |600| heading-width |240| heading-padding-up-bottom |25| heading-padding-left-right |15| heading-padding-box |25|content-font-size |18| content-width |75| content-font-color |#949494| content-background-color |#fafafa| content-border-left-color |#ababab| span-margin-bottom |20| content-padding-top |4| content-padding-right |2| content-padding-bottom |2| content-padding-left |4| content-line-height |1.5| content-font-familly |arial| content-font-weight |200| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| content-border-radius |0| |';
    }
    if ($_POST['style'] == 'style5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style5';
        $css = 'heading-font-size |24| heading-font-color |#949494| heading-background-color |#ededed| heading-font-active-color |#12bee0| icon-font-size |24| icon-margin-bottom |0| heading-font-familly |arial| heading-font-weight |600| heading-text-align |flex-start| heading-border-color |#239cc4| heading-width |275| heading-padding |11| heading-border-radius |0| content-font-size |16| content-font-color |#7a7a7a| content-background-color |#ffffff| content-padding-top |3| content-padding-right |1| content-padding-bottom |5| content-padding-left |2| content-line-height |2.4| content-font-familly |arial| content-font-weight |200| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| |';
    }
    if ($_POST['style'] == 'style6') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style6';
        $css = 'heading-font-size |24| heading-font-color |#ffffff| heading-background-color |#9e9e9e| heading-font-active-color |#ffffff| heading-background-active-color |#0090a6| heading-font-familly |arial| heading-font-weight |500| heading-padding-up-bottom |15| heading-padding-left-right |10| content-font-size |16| content-font-color |#696969| content-background-color |#dbdbdb| content-padding-top |3| content-padding-right |3| content-padding-bottom |3| content-padding-left |3| content-width |80| content-line-height |1.3| content-font-familly |arial| content-font-weight |400| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| |';
    }
    if ($_POST['style'] == 'style7') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style7';
        $css = 'heading-font-size |25| heading-font-color |#ffffff| heading-background-color |#1bd1db| heading-font-active-color |#ffffff| heading-background-active-color |#00ad7f| heading-border-color |#d9d9d9| heading-font-familly |arial| heading-font-weight |300| heading-width |188| heading-text-align |flex-start| heading-padding |15| content-font-size |20| content-font-color |#636363| content-background-color |#f7f7f7| content-padding-top |3| content-padding-right |3| content-padding-bottom |3| content-padding-left |3| content-line-height |1.4| content-font-familly |arial| content-font-weight |300| content-font-align |left| content-border-color |#ebebeb| content-box-shadow |0| content-box-shadow-color |#fff| content-border-radius |0| |';
    }
    if ($_POST['style'] == 'style8') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style8';
        $css = 'heading-font-size |24| heading-font-color |#ffffff| heading-background-color |#0cccc6| heading-font-active-color |#ffffff| heading-background-active-color |#00b4bd| heading-font-familly |arial| heading-font-weight |700| heading-width |150| heading-text-align |center| heading-padding |10| content-font-size |18| content-font-color |#575757| content-background-color |#e6e6e6| content-padding-top |3| content-padding-right |5| content-padding-bottom |3| content-padding-left |3| content-line-height |1.6| content-font-familly |arial| content-font-weight |200| content-font-align |center| content-border-color |#e0e0e0| |';
    }
    if ($_POST['style'] == 'style9') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style9';
        $css = 'heading-font-size |24| heading-font-color | #ffffff| heading-background-color |#999999| heading-font-active-color |#12d9e3| heading-font-border-color |#999999| heading-font-familly |arial| heading-font-weight |600| heading-width |200| heading-text-align |center| heading-padding |10| heading-margin-bottom |15| heading-box-shadow |0| heading-box-shadow-color |#fff| heading-border-radius |0| content-font-size |18| content-font-color |#808080| content-background-color |#e0e0e0| content-padding-top |3| content-padding-right |3| content-padding-bottom |3| content-padding-left |2.4| content-line-height |1.6| content-font-familly |arial| content-font-weight |400| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| |';
    }
    if ($_POST['style'] == 'style10') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = 'style10';
        $css = 'heading-font-size |24| heading-font-color |#8f8f8f| heading-font-active-color |#ffffff| heading-background-active-color |#0dbbde| heading-font-familly |arial| heading-font-weight |300| heading-width |250| heading-number-active-color |#008f8f| heading-padding |15| heading-number-size |12| heading-number-color |#7d7d7d| heading-number-background-color |#ffffff| heading-adsulute-width |46| heading-adsulute-top |4| content-font-size |20| content-font-color |#787878| content-background-color |#ffffff| content-width |77| content-padding-top |4| content-padding-right |4| content-padding-bottom |4.4| content-padding-left |5| content-line-height |1.5| content-font-familly |arial| content-font-weight |300| content-font-align |left| content-box-shadow |0| content-box-shadow-color |#fff| content-border-radius |0| |';
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
    $redirect_id = $wpdb->insert_id;
    if ($redirect_id == 0) {
        $url = admin_url("admin.php?page=content-tabs-ultimate-new");
    }
    if ($redirect_id != 0) {
        $url = admin_url("admin.php?page=content-tabs-ultimate-new&styleid=$redirect_id");
    }
    echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
    exit;
}
?>
<div class="wrap">
    <?php tabs_OXI_VC_Pro_Promote(); ?>
    <div class="ctu-admin-wrapper">
        <h1>Select Style</h1>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">

                <div class="ctu-ultimate-wrapper-01">
                    <ul class="ctu-ulimate-style-01 ctu-edit-heading">
                        <li ref="#ctu-ulitate-style-01-id-48">
                            Definition
                        </li>
                        <li ref="#ctu-ulitate-style-01-id-49" class="">
                            Operators

                        </li> </ul>
                    <div class="ctu-ultimate-style-01-content"> 
                        <div class="ctu-ultimate-style-heading-01" ref="#ctu-ulitate-style-01-id-48"> 
                            Definition

                        </div>
                        <div class="ctu-ulitate-style-01-tabs ctu-edit-content" id="ctu-ulitate-style-01-id-48">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                        </div>  
                        <div class="ctu-ultimate-style-heading-01" ref="#ctu-ulitate-style-01-id-49"> 
                            Operators

                        </div>
                        <div class="ctu-ulitate-style-01-tabs ctu-edit-content" id="ctu-ulitate-style-01-id-49">
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum...

                        </div> 
                    </div> 
                </div>     

            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 1
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-1-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-1-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                        <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style1">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                <div class="ctu-ultimate-wrapper-02 ctu-wrapper-shadow">
                    <ul class="ctu-ulimate-style-02 ">
                        <li ref="#ctu-ulitate-style-02-id-54">
                            Operators
                            <div class="ctu-absolute"></div>
                        </li>
                        <li ref="#ctu-ulitate-style-02-id-55" class="">
                            Defini'tion
                            <div class="ctu-absolute"></div>
                        </li>
                        <li ref="#ctu-ulitate-style-02-id-56" class="">
                            Kotkodi
                            <div class="ctu-absolute"></div>
                        </li>    
                    </ul>
                    <div class="ctu-ultimate-style-02-content ctu-content-shadow">
                        <div class="ctu-ultimate-style-heading-02" ref="#ctu-ulitate-style-02-id-54"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-02-tabs ctu-edit-content" id="ctu-ulitate-style-02-id-54">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </div>
                    </div>
                    <div class="ctu-ultimate-style-02-content ctu-content-shadow">
                        <div class="ctu-ultimate-style-heading-02" ref="#ctu-ulitate-style-02-id-55"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-02-tabs ctu-edit-content" id="ctu-ulitate-style-02-id-55">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div> 
                    <div class="ctu-ultimate-style-02-content ctu-content-shadow">
                        <div class="ctu-ultimate-style-heading-02" ref="#ctu-ulitate-style-02-id-56"> 
                            Kotkodi
                        </div>
                        <div class="ctu-ulitate-style-02-tabs ctu-edit-content" id="ctu-ulitate-style-02-id-56">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                        </div>
                    </div>           
                </div>
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 2
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <div class="ctu-admin-select-row-buttom-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-2-data">Select</button>
                    </div>
                </div>
                <div class="modal fade" id="ctu-style-2-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style2">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                <div class="ctu-ultimate-wrapper-03">
                    <ul class="ctu-ulimate-style-03">
                        <li ref="#ctu-ulitate-style-03-id-58">
                            Definition
                        </li> 
                        <li ref="#ctu-ulitate-style-03-id-59" >
                            Operators
                        </li> 
                        <li ref="#ctu-ulitate-style-03-id-60" >
                            Definition
                        </li>          
                    </ul>
                    <div class="ctu-ultimate-style-03-content">
                        <div class="ctu-ultimate-style-heading-03 " ref="#ctu-ulitate-style-03-id-58"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-03-tabs " id="ctu-ulitate-style-03-id-58">
                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.

                        </div>
                    </div>    
                    <div class="ctu-ultimate-style-03-content">
                        <div class="ctu-ultimate-style-heading-03" ref="#ctu-ulitate-style-03-id-59"> 
                            Operators

                        </div>
                        <div class="ctu-ulitate-style-03-tabs" id="ctu-ulitate-style-03-id-59">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.

                        </div>
                    </div>     <div class="ctu-ultimate-style-03-content">
                        <div class="ctu-ultimate-style-heading-03 " ref="#ctu-ulitate-style-03-id-60"> 
                            Definition

                        </div>
                        <div class="ctu-ulitate-style-03-tabs" id="ctu-ulitate-style-03-id-60">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </div>
                    </div>      
                </div>
              
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 3
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <div class="ctu-admin-select-row-buttom-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-3-data">Select</button>
                    </div>
                </div>
                <div class="modal fade" id="ctu-style-3-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                        <label for="style-name" class="col-sm-6 col-form-label">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style3">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                
                <div class="ctu-ultimate-wrapper-90">
                    <ul class="ctu-ulimate-style-90"> <li ref="#ctu-ulitate-style-90-id-118">
                            Operators 
                            <div class="ctu-absolute"></div>
                        </li> <li ref="#ctu-ulitate-style-90-id-117">
                            Operators 
                            <div class="ctu-absolute"></div>
                        </li> <li ref="#ctu-ulitate-style-90-id-116">
                            Operators 
                            <div class="ctu-absolute"></div>
                        </li></ul>
                    <div class="ctu-ultimate-style-90-content "> <div class="ctu-ultimate-style-heading-90" ref="#ctu-ulitate-style-90-id-118"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-90-tabs" id="ctu-ulitate-style-90-id-118">
                            <div class="ctu-content-span"></div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                        </div> <div class="ctu-ultimate-style-heading-90" ref="#ctu-ulitate-style-90-id-117"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-90-tabs" id="ctu-ulitate-style-90-id-117">
                            <div class="ctu-content-span"></div>
                            Shortcode for templates/themes Copy & paste this code into a template file to include the slideshow within your theme.
                        </div> <div class="ctu-ultimate-style-heading-90" ref="#ctu-ulitate-style-90-id-116"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-90-tabs" id="ctu-ulitate-style-90-id-116">
                            <div class="ctu-content-span"></div>
                            ass
                        </div></div></div> 
              
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 4
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-4-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-4-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style4">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                <div class="ctu-ultimate-wrapper-91">
                    <ul class="ctu-ulimate-style-91"><li ref="#ctu-ulitate-style-91-id-119" class="">
                            <span><i class="fa fa-id-card" aria-hidden="true"></i></span>
                            Definition
                            <div class="ctu-absulote"></div>
                        </li> <li ref="#ctu-ulitate-style-91-id-76" class="">
                            <span><i class="fa fa-id-card" aria-hidden="true"></i></span>
                            Operators
                            <div class="ctu-absulote"></div>
                        </li>   </ul> <div class="ctu-ultimate-style-91-content">
                        <div class="ctu-ultimate-style-heading-91" ref="#ctu-ulitate-style-91-id-119"> 
                            <i class="fa fa-id-card" aria-hidden="true"></i>   Definition

                        </div>
                        <div class="ctu-ulitate-style-91-tabs " id="ctu-ulitate-style-91-id-119">
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div>  <div class="ctu-ultimate-style-91-content">
                        <div class="ctu-ultimate-style-heading-91" ref="#ctu-ulitate-style-91-id-76"> 
                            <i class="fa fa-id-card" aria-hidden="true"></i>   Operators

                        </div>
                        <div class="ctu-ulitate-style-91-tabs " id="ctu-ulitate-style-91-id-76">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use
                        </div>
                    </div> </div>   
              

            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 5
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-5-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-5-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style5">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
 <div class="ctu-ultimate-wrapper-92 ctu-ultimate-wrapper">
                    <ul class="ctu-ulimate-style-92 ctu-edit-heading"><li ref="#ctu-ulitate-style-92-id-120" class="">
                            Defult Title
                            <div class="ctu-absolute"></div>
                        </li><li ref="#ctu-ulitate-style-92-id-78" class="">
                            Defini'tion
                            <div class="ctu-absolute"></div>
                        </li><li ref="#ctu-ulitate-style-92-id-77" class="">
                            Operators
                            <div class="ctu-absolute"></div>
                        </li> </ul><div class="ctu-ultimate-style-92-content"><div class="ctu-ultimate-style-heading-92" ref="#ctu-ulitate-style-92-id-120"> 
                            Defult Title

                        </div>
                        <div class="ctu-ulitate-style-92-tabs" id="ctu-ulitate-style-92-id-120">
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </div><div class="ctu-ultimate-style-heading-92" ref="#ctu-ulitate-style-92-id-78"> 
                            Defini'tion

                        </div>
                        <div class="ctu-ulitate-style-92-tabs" id="ctu-ulitate-style-92-id-78">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                        </div><div class="ctu-ultimate-style-heading-92" ref="#ctu-ulitate-style-92-id-77"> 
                            Operators

                        </div>
                        <div class="ctu-ulitate-style-92-tabs" id="ctu-ulitate-style-92-id-77">
                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                        </div></div> </div>  
               

            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 6
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-6-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-6-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style6">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                <div class="ctu-ultimate-wrapper-93">
                    <ul class="ctu-ulimate-style-93"><li ref="#ctu-ulitate-style-93-id-122">
                            Operators 
                        </li><li ref="#ctu-ulitate-style-93-id-121">
                            Defult Title 
                        </li><li ref="#ctu-ulitate-style-93-id-79">
                            Definition 
                        </li></ul> <div class="ctu-ultimate-style-93-content">
                        <div class="ctu-ultimate-style-heading-93" ref="#ctu-ulitate-style-93-id-122"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-93-tabs" id="ctu-ulitate-style-93-id-122">
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </div>
                    </div>  <div class="ctu-ultimate-style-93-content">
                        <div class="ctu-ultimate-style-heading-93" ref="#ctu-ulitate-style-93-id-121"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-93-tabs" id="ctu-ulitate-style-93-id-121">
                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. 
                        </div>
                    </div>  <div class="ctu-ultimate-style-93-content">
                        <div class="ctu-ultimate-style-heading-93" ref="#ctu-ulitate-style-93-id-79"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-93-tabs" id="ctu-ulitate-style-93-id-79">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </div>
                    </div>  </div>  
                
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 7
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-7-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-7-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style7">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                
                <div class="ctu-ultimate-wrapper-94">
                    <ul class="ctu-ulimate-style-94">   <li ref="#ctu-ulitate-style-94-id-123" class="">
                            Defult Title
                        </li>   <li ref="#ctu-ulitate-style-94-id-81" class="">
                            Definition
                        </li>   <li ref="#ctu-ulitate-style-94-id-80" class="">
                            Operators
                        </li></ul> <div class="ctu-ultimate-style-94-content">
                        <div class="ctu-ultimate-style-heading-94" ref="#ctu-ulitate-style-94-id-123"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-94-tabs ctu-edit-content" id="ctu-ulitate-style-94-id-123">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                        </div>
                    </div>  <div class="ctu-ultimate-style-94-content">
                        <div class="ctu-ultimate-style-heading-94" ref="#ctu-ulitate-style-94-id-81"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-94-tabs ctu-edit-content" id="ctu-ulitate-style-94-id-81">
                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                        </div>
                    </div>  <div class="ctu-ultimate-style-94-content">
                        <div class="ctu-ultimate-style-heading-94" ref="#ctu-ulitate-style-94-id-80"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-94-tabs ctu-edit-content" id="ctu-ulitate-style-94-id-80">
                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance
                        </div>
                    </div> </div> 
                        
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 8
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-8-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-8-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style8">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                
                <div class="ctu-ultimate-wrapper-95">
                    <ul class="ctu-ulimate-style-95"> <li ref="#ctu-ulitate-style-95-id-124" class="">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i> Defult Title
                            <div class="ctu-absolute"></div>
                        </li> <li ref="#ctu-ulitate-style-95-id-83" class="">
                            <i class="fa fa-window-restore" aria-hidden="true"></i> Operators
                            <div class="ctu-absolute"></div>
                        </li> <li ref="#ctu-ulitate-style-95-id-82" class="">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i> Operators
                            <div class="ctu-absolute"></div>
                        </li> </ul><div class="ctu-ultimate-style-95-content">
                        <div class="ctu-ultimate-style-heading-95" ref="#ctu-ulitate-style-95-id-124"> 
                            <i class="fa fa-address-book-o" aria-hidden="true"></i> Defult Title
                        </div>
                        <div class="ctu-ulitate-style-95-tabs" id="ctu-ulitate-style-95-id-124">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                        </div>
                    </div> <div class="ctu-ultimate-style-95-content">
                        <div class="ctu-ultimate-style-heading-95" ref="#ctu-ulitate-style-95-id-83"> 
                            <i class="fa fa-window-restore" aria-hidden="true"></i> Operators
                        </div>
                        <div class="ctu-ulitate-style-95-tabs" id="ctu-ulitate-style-95-id-83">
                            Register Now And Get a $5 Coupon!! 🙋🙋I Know You Won't Enjoy the Feeling of Sharing a Server with Others! 
                            The Game Server from VPB Will Give U the Brilliant Experience in Terms of Security, Storage and Page-Speed.🏃🏃
                        </div>
                    </div> <div class="ctu-ultimate-style-95-content">
                        <div class="ctu-ultimate-style-heading-95" ref="#ctu-ulitate-style-95-id-82"> 
                            <i class="fa fa-address-book-o" aria-hidden="true"></i> Operators
                        </div>
                        <div class="ctu-ulitate-style-95-tabs" id="ctu-ulitate-style-95-id-82">
                            রিয়েল ম্যাচের গোল তো সবসময়ই দেখা হয়, এবার একটু ট্রেইনিং এর গোল হলে মন্দ নয়রিয়েল ম্যাচের গোল তো সবসময়ই দেখা হয়, এবার একটু ট্রেইনিং এর গোল হলে মন্দ নয়
                        </div>
                    </div> </div>
               
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 9
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-9-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-9-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style9">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                
                <div class="ctu-ultimate-wrapper-96">
                    <ul class="ctu-ulimate-style-96"> <li ref="#ctu-ulitate-style-96-id-125" class="">
                            <em>1</em>
                            Defult Title 
                            <span></span>
                        </li> <li ref="#ctu-ulitate-style-96-id-85" class="">
                            <em>2</em>
                            Operators 
                            <span></span>
                        </li> <li ref="#ctu-ulitate-style-96-id-84" class="">
                            <em>3</em>
                            Operators 
                            <span></span>
                        </li></ul>  <div class="ctu-ultimate-style-96-content"><div class="ctu-ultimate-style-heading-96" ref="#ctu-ulitate-style-96-id-125"> 
                            <em>1</em>
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-96-tabs" id="ctu-ulitate-style-96-id-125">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div><div class="ctu-ultimate-style-heading-96" ref="#ctu-ulitate-style-96-id-85"> 
                            <em>2</em>
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-96-tabs" id="ctu-ulitate-style-96-id-85">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                        </div><div class="ctu-ultimate-style-heading-96" ref="#ctu-ulitate-style-96-id-84"> 
                            <em>3</em>
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-96-tabs" id="ctu-ulitate-style-96-id-84">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div> </div> </div>   
                
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 10
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ctu-style-10-data">Select</button>
                </div>
                <div class="modal fade" id="ctu-style-10-data" >
                    <form method="post">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Style Name</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row form-group-sm">
                                       <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Give Your Designs Style Name">Style Name</label>
                                        <div class="col-sm-6 nopadding">
                                            <input class="form-control" type="text" value=""  name="style-name">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="style" value="style10">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                 <div class="ctu-ultimate-wrapper-97">
                    <ul class="ctu-ulimate-style-97"> <li ref="#ctu-ulitate-style-97-id-88" style="color :#10b0b5; border-color: #10b0b5">
                            <span> 
                                <i class="fa fa-battery-empty" aria-hidden="true"></i>
                                Operators 
                            </span>
                        </li> <li ref="#ctu-ulitate-style-97-id-87" style="color :#12a67a; border-color: #12a67a">
                            <span> 
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                Operators 
                            </span>
                        </li> <li ref="#ctu-ulitate-style-97-id-86" style="color :#368aba; border-color: #368aba">
                            <span> 
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                Operators 
                            </span>
                        </li></ul>
                    <div class="ctu-ultimate-style-97-content">
                        <div class="ctu-ultimate-style-heading-97" ref="#ctu-ulitate-style-97-id-88" style="color :#10b0b5"> 
                            <span> 
                                #10b0b5
                                Operators 
                            </span>
                        </div>
                        <div class="ctu-ulitate-style-97-tabs" id="ctu-ulitate-style-97-id-88">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                        </div> 
                        <div class="ctu-ultimate-style-heading-97" ref="#ctu-ulitate-style-97-id-87" style="color :#12a67a"> 
                            <span> 
                                #12a67a
                                Operators 
                            </span>
                        </div>
                        <div class="ctu-ulitate-style-97-tabs" id="ctu-ulitate-style-97-id-87">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                        </div>
                        <div class="ctu-ultimate-style-heading-97" ref="#ctu-ulitate-style-97-id-86" style="color :#368aba"> 
                            <span> 
                                #368aba
                                Operators 
                            </span>
                        </div>
                        <div class="ctu-ulitate-style-97-tabs" id="ctu-ulitate-style-97-id-86">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        </div>  
                    </div>
                </div>
               
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 11
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                    <div class="ctu-ultimate-wrapper-98">
                    <ul class="ctu-ulimate-style-98"> <li ref="#ctu-ulitate-style-98-id-90" class="">
                            Definition
                            <div class="ctu-absolute"></div>
                        </li> <li ref="#ctu-ulitate-style-98-id-89" class="">
                            Operators
                            <div class="ctu-absolute"></div>
                        </li> </ul><div class="ctu-ultimate-style-98-content">  <div class="ctu-ultimate-style-heading-98" ref="#ctu-ulitate-style-98-id-90"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-98-tabs" id="ctu-ulitate-style-98-id-90">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>  <div class="ctu-ultimate-style-heading-98" ref="#ctu-ulitate-style-98-id-89"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-98-tabs" id="ctu-ulitate-style-98-id-89">
                            PHP Constants\\\\\\\\r\\\\\\\\nA constant is an identifier (name) for a simple value. The value cannot be changed during the script.\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\nA valid constant name starts with a letter or underscore (no $ sign before the constant name).\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\nNote: Unlike variables, constants are automatically global across the entire script.
                        </div></div></div> 
                
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 12
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                <div class="ctu-ultimate-wrapper-99">
                    <ul class="ctu-ulimate-style-99"> <li ref="#ctu-ulitate-style-99-id-115" class="">
                            Operators
                        </li> <li ref="#ctu-ulitate-style-99-id-114" class="">
                            Operators
                        </li></ul><div class="ctu-ultimate-style-99-content"><div class="ctu-ultimate-style-heading-99" ref="#ctu-ulitate-style-99-id-115"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-99-tabs" id="ctu-ulitate-style-99-id-115">
                            Shortcode for posts/pages/plugins Copy & paste the shortcode directly into any WordPress post or page.
                        </div><div class="ctu-ultimate-style-heading-99" ref="#ctu-ulitate-style-99-id-114"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-99-tabs" id="ctu-ulitate-style-99-id-114">
                            asdasdasdas
                        </div></div> </div>   
             
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 13
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
              
                <div class="ctu-ultimate-wrapper-100">
                    <ul class="ctu-ulimate-style-100"><li ref="#ctu-ulitate-style-100-id-126" class="">
                            <i class="fa fa-id-card"></i>
                            Defult Title
                            <div class="ctu-absolute"></div>
                        </li><li ref="#ctu-ulitate-style-100-id-92" class="">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Definition
                            <div class="ctu-absolute"></div>
                        </li><li ref="#ctu-ulitate-style-100-id-91" class="">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                            <div class="ctu-absolute"></div>
                        </li> </ul><div class="ctu-ultimate-style-100-content"> <div class="ctu-ultimate-style-heading-100" ref="#ctu-ulitate-style-100-id-126"> 
                            <i class="fa fa-id-card"></i>
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-100-tabs" id="ctu-ulitate-style-100-id-126">
                            Nunc feugiat ac lacus quis imperdiet. Nullam non tortor et sem commodo sollicitudin non vel ante. Sed ultricies viverra urna, non tincidunt tortor dignissim sit amet. Pellentesque nec leo at orci ultricies consectetur sed sit amet nunc. Phasellus volutpat ante sed blandit imperdiet. Donec dictum ac felis vel pulvinar. In vitae sem at elit fermentum imperdiet. Vestibulum sit amet euismod diam, et tempus felis. Morbi a tincidunt purus, eget viverra leo. Donec ornare malesuada tortor a efficitur.
                        </div> <div class="ctu-ultimate-style-heading-100" ref="#ctu-ulitate-style-100-id-92"> 
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-100-tabs" id="ctu-ulitate-style-100-id-92">
                            Aliquam erat volutpat. Donec luctus magna lectus, sit amet laoreet odio egestas et. In porttitor consectetur gravida. Praesent mattis ipsum quis ipsum ultricies, eget sollicitudin leo pulvinar. Nunc cursus quis velit a tempus. Nunc non elit non dolor tempor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        </div> <div class="ctu-ultimate-style-heading-100" ref="#ctu-ulitate-style-100-id-91"> 
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-100-tabs" id="ctu-ulitate-style-100-id-91">
                            Nullam vitae nulla a libero scelerisque ultricies. Etiam sed lorem quis libero pellentesque volutpat in at neque. Sed porta bibendum massa, et pharetra odio molestie vitae. Etiam purus purus, maximus a fermentum quis, porttitor a est. Vestibulum ullamcorper feugiat nulla cursus fringilla. Vestibulum ornare lorem non luctus aliquet. Integer tincidunt dolor sit amet tellus finibus ullamcorper. Proin dignissim dui quis sem finibus auctor. Phasellus in egestas felis, sed fringilla erat.
                        </div> </div> </div>  
                
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 14
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
             
                <div class="ctu-ultimate-wrapper-101">
                    <ul class="ctu-ulimate-style-101">   <li ref="#ctu-ulitate-style-101-id-95" >
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            Operat'ors
                        </li>   <li ref="#ctu-ulitate-style-101-id-94" >
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            Definition
                        </li>   <li ref="#ctu-ulitate-style-101-id-93" >
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                        </li></ul><div class="ctu-ultimate-style-101-content"> <div class="ctu-ultimate-style-heading-101" ref="#ctu-ulitate-style-101-id-95"> 
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            Operat'ors
                        </div>
                        <div class="ctu-ulitate-style-101-tabs" id="ctu-ulitate-style-101-id-95">
                            Aliquam erat volutpat. Donec luctus magna lectus, sit amet laoreet odio egestas et. In porttitor consectetur gravida. Praesent mattis ipsum quis ipsum ultricies, eget sollicitudin leo pulvinar. Nunc cursus quis velit a tempus. 
                        </div> <div class="ctu-ultimate-style-heading-101" ref="#ctu-ulitate-style-101-id-94"> 
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-101-tabs" id="ctu-ulitate-style-101-id-94">
                            Ut ut mauris fringilla, ultricies est quis, gravida elit. Morbi sagittis dui tortor, interdum accumsan ante accumsan sit amet. Ut consectetur sollicitudin purus et rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        </div> <div class="ctu-ultimate-style-heading-101" ref="#ctu-ulitate-style-101-id-93"> 
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-101-tabs" id="ctu-ulitate-style-101-id-93">
                            In hac habitasse platea dictumst. Sed porta lacus ex, nec lacinia ante gravida at. Vivamus tincidunt placerat risus. Quisque euismod enim sit amet enim pulvinar, rhoncus bibendum mauris venenatis.
                        </div></div> </div> 
              
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 15
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
              
                <div class="ctu-ultimate-wrapper-102">
                    <ul class="ctu-ulimate-style-102"> <li ref="#ctu-ulitate-style-102-id-98">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            Operat'ors
                        </li> <li ref="#ctu-ulitate-style-102-id-97">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Defini'tion
                        </li> <li ref="#ctu-ulitate-style-102-id-96">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                        </li></ul><div class="ctu-ultimate-style-102-content"> <div class="ctu-ultimate-style-heading-102" ref="#ctu-ulitate-style-102-id-98"> 
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            Operat'ors
                        </div>
                        <div class="ctu-ulitate-style-102-tabs" id="ctu-ulitate-style-102-id-98">
                            Nullam vitae nulla a libero scelerisque ultricies. Etiam sed lorem quis libero pellentesque volutpat in at neque. Sed porta bibendum massa, et pharetra odio molestie vitae. Etiam purus purus, maximus a fermentum quis, porttitor a est. Vestibulum ullamcorper feugiat nulla cursus fringilla. Vestibulum ornare lorem non luctus aliquet. Integer tincidunt dolor sit amet tellus finibus ullamcorper. Proin dignissim dui quis sem finibus auctor. Phasellus in egestas felis, sed fringilla erat.
                        </div> <div class="ctu-ultimate-style-heading-102" ref="#ctu-ulitate-style-102-id-97"> 
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Defini'tion
                        </div>
                        <div class="ctu-ulitate-style-102-tabs" id="ctu-ulitate-style-102-id-97">
                            Aliquam erat volutpat. Donec luctus magna lectus, sit amet laoreet odio egestas et. In porttitor consectetur gravida. Praesent mattis ipsum quis ipsum ultricies, eget sollicitudin leo pulvinar. Nunc cursus quis velit a tempus. Nunc non elit non dolor tempor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        </div> <div class="ctu-ultimate-style-heading-102" ref="#ctu-ulitate-style-102-id-96"> 
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-102-tabs" id="ctu-ulitate-style-102-id-96">
                            Mauris ut lacus dignissim, consequat nunc nec, malesuada urna. Duis a mollis tortor, id imperdiet erat. Praesent orci dolor, luctus vitae aliquet eget, auctor nec odio. Cras malesuada quis libero ut tincidunt. Curabitur non rhoncus ante. Cras semper hendrerit fermentum. Morbi rutrum non urna eget bibendum. Cras iaculis orci ut pulvinar sodales.
                        </div></div></div> 
                
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 16
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
            
                <div class="ctu-ultimate-wrapper-103">
                    <ul class="ctu-ulimate-style-103">  <li ref="#ctu-ulitate-style-103-id-127">
                            Defult Title 
                        </li>  <li ref="#ctu-ulitate-style-103-id-100">
                            Definition 
                        </li>  <li ref="#ctu-ulitate-style-103-id-99">
                            Operators 
                        </li></ul><div class="ctu-ultimate-style-103-content"><div class="ctu-ultimate-style-heading-103" ref="#ctu-ulitate-style-103-id-127"> 
                            Defult Title 
                        </div>
                        <div class="ctu-ulitate-style-103-tabs" id="ctu-ulitate-style-103-id-127">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor. 
                        </div><div class="ctu-ultimate-style-heading-103" ref="#ctu-ulitate-style-103-id-100"> 
                            Definition 
                        </div>
                        <div class="ctu-ulitate-style-103-tabs" id="ctu-ulitate-style-103-id-100">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor. 
                        </div><div class="ctu-ultimate-style-heading-103" ref="#ctu-ulitate-style-103-id-99"> 
                            Operators 
                        </div>
                        <div class="ctu-ulitate-style-103-tabs" id="ctu-ulitate-style-103-id-99">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor. 
                        </div></div></div>   
             
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 17
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
                

                <div class="ctu-ultimate-wrapper-104">
                    <ul class="ctu-ulimate-style-104"><li ref="#ctu-ulitate-style-104-id-128" class="">
                            Defult Title
                        </li><li ref="#ctu-ulitate-style-104-id-102" class="">
                            Definition
                        </li><li ref="#ctu-ulitate-style-104-id-101" class="">
                            Operators
                        </li>  </ul><div class="ctu-ultimate-style-104-content"><div class="ctu-ultimate-style-heading-104" ref="#ctu-ulitate-style-104-id-128"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-104-tabs" id="ctu-ulitate-style-104-id-128">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum euismod est, ac pellentesque dui rutrum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porta metus, ac sollicitudin tellus. Sed purus metus, iaculis a lacinia vel, imperdiet nec diam. Cras pretium auctor massa, eu condimentum tortor porta id. Cras tempus elit convallis odio lobortis, sit amet iaculis ipsum ornare. Duis tempus consequat lacus, sit amet facilisis diam laoreet commodo. Cras et justo nec turpis euismod ultrices non sed risus.
                        </div><div class="ctu-ultimate-style-heading-104" ref="#ctu-ulitate-style-104-id-102"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-104-tabs" id="ctu-ulitate-style-104-id-102">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor.
                        </div><div class="ctu-ultimate-style-heading-104" ref="#ctu-ulitate-style-104-id-101"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-104-tabs" id="ctu-ulitate-style-104-id-101">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div> </div></div>    
            
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 18
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
             
                <div class="ctu-ultimate-wrapper-105">
                    <ul class="ctu-ulimate-style-105">   <li ref="#ctu-ulitate-style-105-id-129">
                            Defult Title 
                            <div class="ctu-absolute"></div>
                        </li>   <li ref="#ctu-ulitate-style-105-id-104">
                            Definition 
                            <div class="ctu-absolute"></div>
                        </li>   <li ref="#ctu-ulitate-style-105-id-103">
                            Definition 
                            <div class="ctu-absolute"></div>
                        </li> </ul><div class="ctu-ultimate-style-105-content"><div class="ctu-ultimate-style-heading-105" ref="#ctu-ulitate-style-105-id-129"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-105-tabs" id="ctu-ulitate-style-105-id-129">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor.
                        </div><div class="ctu-ultimate-style-heading-105" ref="#ctu-ulitate-style-105-id-104"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-105-tabs" id="ctu-ulitate-style-105-id-104">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum euismod est, ac pellentesque dui rutrum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porta metus, ac sollicitudin tellus. Sed purus metus, iaculis a lacinia vel, imperdiet nec diam. Cras pretium auctor massa, eu condimentum tortor porta id. Cras tempus elit convallis odio lobortis, sit amet iaculis ipsum ornare. Duis tempus consequat lacus, sit amet facilisis diam laoreet commodo. Cras et justo nec turpis euismod ultrices non sed risus.
                        </div><div class="ctu-ultimate-style-heading-105" ref="#ctu-ulitate-style-105-id-103"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-105-tabs" id="ctu-ulitate-style-105-id-103">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div> </div> </div> 
              
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 19
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">

                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
               
                <div class="ctu-ultimate-wrapper-106"><ul class="ctu-ulimate-style-106"><li ref="#ctu-ulitate-style-106-id-130" class="" style="color: #ffffff; background-color:  #008fb3">
                            Defult Title
                        </li><li ref="#ctu-ulitate-style-106-id-106" class="" style="color: #ffffff; background-color:  #07a87d">
                            Definition
                        </li><li ref="#ctu-ulitate-style-106-id-105" class="" style="color: #ffffff; background-color:  #0e73ad">
                            Operators
                        </li></ul><div class="ctu-ultimate-style-106-content"> <div class="ctu-ultimate-style-heading-106" ref="#ctu-ulitate-style-106-id-130" style="color: #ffffff; background-color:  #008fb3"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-106-tabs" id="ctu-ulitate-style-106-id-130" style="color: #ffffff; background-color:  #008fb3">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum euismod est, ac pellentesque dui rutrum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porta metus, ac sollicitudin tellus. Sed purus metus, iaculis a lacinia vel, imperdiet nec diam. Cras pretium auctor massa, eu condimentum tortor porta id. Cras tempus elit convallis odio lobortis, sit amet iaculis ipsum ornare. Duis tempus consequat lacus, sit amet facilisis diam laoreet commodo. Cras et justo nec turpis euismod ultrices non sed risus.
                        </div> <div class="ctu-ultimate-style-heading-106" ref="#ctu-ulitate-style-106-id-106" style="color: #ffffff; background-color:  #07a87d"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-106-tabs" id="ctu-ulitate-style-106-id-106" style="color: #ffffff; background-color:  #07a87d">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor.
                        </div> <div class="ctu-ultimate-style-heading-106" ref="#ctu-ulitate-style-106-id-105" style="color: #ffffff; background-color:  #0e73ad"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-106-tabs" id="ctu-ulitate-style-106-id-105" style="color: #ffffff; background-color:  #0e73ad">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div></div></div>   
               
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 20
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                </div>

            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
               
                <div class="ctu-ultimate-wrapper-107">
                    <ul class="ctu-ulimate-style-107">  <li ref="#ctu-ulitate-style-107-id-131" class="">
                            Defult Title
                            <div class="ctu-absolute"></div>
                        </li>  <li ref="#ctu-ulitate-style-107-id-108" class="">
                            Definition
                            <div class="ctu-absolute"></div>
                        </li>  <li ref="#ctu-ulitate-style-107-id-107" class="">
                            Operators
                            <div class="ctu-absolute"></div>
                        </li></ul><div class="ctu-ultimate-style-107-content"><div class="ctu-ultimate-style-heading-107" ref="#ctu-ulitate-style-107-id-131"> 
                            Defult Title
                        </div>
                        <div class="ctu-ulitate-style-107-tabs ctu-edit-content" id="ctu-ulitate-style-107-id-131">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div><div class="ctu-ultimate-style-heading-107" ref="#ctu-ulitate-style-107-id-108"> 
                            Definition
                        </div>
                        <div class="ctu-ulitate-style-107-tabs ctu-edit-content" id="ctu-ulitate-style-107-id-108">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum euismod est, ac pellentesque dui rutrum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porta metus, ac sollicitudin tellus. Sed purus metus, iaculis a lacinia vel, imperdiet nec diam. Cras pretium auctor massa, eu condimentum tortor porta id. Cras tempus elit convallis odio lobortis, sit amet iaculis ipsum ornare. Duis tempus consequat lacus, sit amet facilisis diam laoreet commodo. Cras et justo nec turpis euismod ultrices non sed risus.
                        </div><div class="ctu-ultimate-style-heading-107" ref="#ctu-ulitate-style-107-id-107"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-107-tabs ctu-edit-content" id="ctu-ulitate-style-107-id-107">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div></div></div>   
         
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 21
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                </div>
            </div>
        </div>
        <div class="ctu-admin-select-row">
            <div class="ctu-admin-select-row-upper">
             
                <div class="ctu-ultimate-wrapper-108"><ul class="ctu-ulimate-style-108 ctu-edit-heading"><li ref="#ctu-ulitate-style-108-id-111" class="">
                            Operators
                        </li><li ref="#ctu-ulitate-style-108-id-110" class="">
                            Kotkodi
                        </li><li ref="#ctu-ulitate-style-108-id-109" class="">
                            Operators
                        </li></ul><div class="ctu-ultimate-style-108-content"><div class="ctu-ultimate-style-heading-108" ref="#ctu-ulitate-style-108-id-111"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-108-tabs" id="ctu-ulitate-style-108-id-111">
                            Nunc at hendrerit lectus, nec laoreet enim. Nam id mauris finibus, lobortis magna sed, convallis tellus. Donec ut est vel nunc facilisis auctor. In finibus pulvinar ligula eget hendrerit. Nam porttitor dui nec libero congue pretium. Fusce sed posuere dolor. Sed vehicula odio eget euismod ornare. Vestibulum vitae velit ut purus pretium rhoncus sed vitae tortor.
                        </div><div class="ctu-ultimate-style-heading-108" ref="#ctu-ulitate-style-108-id-110"> 
                            Kotkodi
                        </div>
                        <div class="ctu-ulitate-style-108-tabs" id="ctu-ulitate-style-108-id-110">
                            Sed pulvinar risus non venenatis vulputate. Curabitur molestie suscipit facilisis. Aliquam imperdiet convallis ligula, ac placerat ex semper vel. Vivamus posuere sed risus vitae hendrerit. Vestibulum vitae nisi a felis pulvinar efficitur. Nullam porta sem sit amet sapien malesuada, eu congue mauris tincidunt. Donec bibendum urna vitae enim pharetra, in rutrum erat porttitor.
                        </div><div class="ctu-ultimate-style-heading-108" ref="#ctu-ulitate-style-108-id-109"> 
                            Operators
                        </div>
                        <div class="ctu-ulitate-style-108-tabs" id="ctu-ulitate-style-108-id-109">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum euismod est, ac pellentesque dui rutrum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porta metus, ac sollicitudin tellus. Sed purus metus, iaculis a lacinia vel, imperdiet nec diam. Cras pretium auctor massa, eu condimentum tortor porta id. Cras tempus elit convallis odio lobortis, sit amet iaculis ipsum ornare. Duis tempus consequat lacus, sit amet facilisis diam laoreet commodo. Cras et justo nec turpis euismod ultrices non sed risus.
                        </div></div></div>    
             
            </div>
            <div class="ctu-admin-select-row-buttom">
                <div class="ctu-admin-select-row-buttom-left">
                    Style 22
                </div>
                <div class="ctu-admin-select-row-buttom-right">
                    <a class="ctu-pro-only-big">Pro Only</a>
                </div>

            </div>
        </div>
    </div>
</div>
<style>.ctu-ultimate-wrapper-01{width: 100%; float: left;}.ctu-ulimate-style-01{width: 100%; display: flex; float: left; overflow: hidden; margin-top: px; margin-top: 5px; text-align: center; justify-content: flex-start ; border-top: 5px solid #6dc5db; margin-bottom: 10px; background-color: #ffffff; border-radius: 2px 2px 0 0; box-shadow: 0 0 5px #878787;}.ctu-ulimate-style-01 li{cursor: pointer; text-align: center; padding: 11px 10px; margin: 0; font-size: 24px; width: 152px; float: left; font-family: "Carter One"; color: #545454; border-right: 1px solid #ccc; font-weight: 400;}.ctu-ulimate-style-01 li:last-of-type{border-right: none;}.ctu-ulimate-style-01 li.active{color: #ffffff; position: relative; transition: all 0.5s linear; background-color: #6dc5db;}.ctu-ultimate-style-01-content{width: 100%; float: left;}.ctu-ultimate-style-heading-01{cursor: pointer; border-radius: 2px; padding: 11px 5px; text-align: center; font-size: 24px; width: 100%; display: inline-block; margin-bottom: 3px; color: #545454; background-color: #ffffff; font-family: "Carter One"; font-weight: 400; display: none; margin-bottom: 8px;}.ctu-ultimate-style-heading-01.active{color: #ffffff; transition: all 0.5s linear; background-color: #6dc5db;}.ctu-ulitate-style-01-tabs{width: 100%; background-color: #ffffff ; padding: 5% 1% 5% 5%; font-size: 20px; color: #524f4f; line-height: 1.5; text-align: left; display: none; font-family: "Buda"; font-weight: 300; box-shadow: 0 0 18px #cfcfcf; margin-bottom:10px;}@media only screen and (max-width: 900px){.ctu-ulimate-style-01{display: none;}.ctu-ultimate-style-heading-01{display: block;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-01 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-01:first").addClass("active"); jQuery(".ctu-ulitate-style-01-tabs:first").show(); jQuery(".ctu-ulimate-style-01 li").click(function (){jQuery(".ctu-ulimate-style-01 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-01-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-01").click(function (){jQuery(".ctu-ultimate-style-heading-01").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-01-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); var contentliwidth=jQuery(".ctu-ulimate-style-01 li").outerWidth(); var count=jQuery(".ctu-ulimate-style-01 li").length; var fullwidth=jQuery(".ctu-ulimate-style-01").width(); var widthresult=contentliwidth * count; if (fullwidth <=widthresult){var eachwidth=parseInt(fullwidth / count) + 'px'; $(".ctu-ulimate-style-01 li").css("width", eachwidth);}});</script><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-02 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-02:first").addClass("active"); jQuery(".ctu-ulitate-style-02-tabs:first").show(); jQuery(".ctu-ulimate-style-02 li").click(function (){jQuery(".ctu-ulimate-style-02 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-02-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-02").click(function (){jQuery(".ctu-ultimate-style-heading-02").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-02-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); var contentliwidth=jQuery(".ctu-ulimate-style-02 li").outerWidth(); var count=jQuery(".ctu-ulimate-style-02 li").length; var fullwidth=jQuery(".ctu-ulimate-style-02").width(); var widthresult=contentliwidth * count; if (fullwidth <=widthresult){var eachwidth=parseInt(fullwidth / count) + 'px'; $(".ctu-ulimate-style-02 li").css("width", eachwidth);}});</script><style>.ctu-ultimate-wrapper-02{width: 100%; float: left; background: transparent; overflow: hidden; border-radius: 7px 7px 0 0; box-shadow: 0 0 10px #b0b0b0;}.ctu-ulimate-style-02{width: 100%; display: flex; float: left; text-align: center; justify-content: center; background-color: #6e6e6e; margin-bottom: 0;}.ctu-ulimate-style-02 li{cursor: pointer; float: left; text-align: center; position: relative; margin: 10px 0; padding: 0 10px; font-size: 26px; line-height: 130%; border-right: 1px solid #ccc; color: #c2c2c2; width: 200px; font-family: Give You Glory; font-weight: 500;}.ctu-ulimate-style-02 li:last-of-type{border-right: none;}.ctu-ulimate-style-02 li.active{position: relative; transition: all 0.5s linear; color: #ffffff;}.ctu-ulimate-style-02 li .ctu-absolute{position: absolute; margin: auto; bottom: -10px; left: 0; right: 0; width: 30px; height: 30px; display: none; width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 10px solid #ffffff;}.ctu-ulimate-style-02 li.active .ctu-absolute{display: block;}.ctu-ultimate-style-02-content{width: 100%; float: left;}.ctu-ultimate-style-heading-02{cursor: pointer; display: none; width: 100%; font-size: 26px; font-weight: 500; font-family: Give You Glory; line-height: 120%; padding: 10px 10px; text-align: center; border-radius: 7px; background-color: #6e6e6e; color: #c2c2c2;}.ctu-ultimate-style-heading-02.active{transition: all 0.5s linear; border-radius: 7px 7px 0 0; color: #ffffff;}.ctu-ulitate-style-02-tabs{width: 100%; display: none; padding: 4% 5% 5% 5%; font-size: 19px; color: #6e6e6e; line-height: 1.5; text-align: center; background-color: #ffffff; font-family: Cardo; font-weight: 400;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-02{box-shadow: none !important;}.ctu-ulimate-style-02{display: none;}.ctu-ultimate-style-heading-02{display: block;}.ctu-ultimate-style-02-content{margin-bottom: 10px;}.ctu-ultimate-wrapper-02{box-shadow: none !important;}}.ctu-edit-heading-h3, .ctu-edit-heading li{position: relative;}.ctu-edit-heading li:hover .ctu-admin-absulote, .ctu-edit-heading-h3:hover .ctu-admin-absulote, .ctu-edit-content:hover .ctu-admin-absulote{display: block;}.ctu-edit-content{position: relative;}</style><style>.ctu-ultimate-wrapper-03{width: 100%; float: left;}.ctu-ulimate-style-03{width: 100%; display: flex; float: left; text-align: center; justify-content: flex-start; overflow: hidden; margin-bottom: 0;}.ctu-ulimate-style-03 li{cursor: pointer; float: left; margin-bottom: 0; box-shadow: 0 0 13px #c9abab; text-align: center; position: relative; margin: 0 20px 0 0; padding: 17px 10px; bottom: -5px; font-size: 24px; line-height: 120%; border-color: #1abfed; border-top: 5px solid; color: #ffffff; background-color: #757575; width: 160px; font-family: Radley; font-weight: 400;}.ctu-ulimate-style-03 li:last-of-type{margin-right: 0;}.ctu-ulimate-style-03 li.active{position: relative; transition: all 0.5s linear; color: #ffffff; background-color: #22b359; border-color: #d10b0b; bottom: 0; z-index: 1;}.ctu-ultimate-style-03-content{width: 100%; float: left;}.ctu-ultimate-style-heading-03{cursor: pointer; display: none; width: 100%; font-weight: 400; font-size: 24px; font-family: heading-font-size ; line-height: 120%; padding: 17px 10px; text-align: center; font-family: #757575; background-color: #757575; color: #ffffff;}.ctu-ultimate-style-heading-03.active{transition: all 0.5s linear; color: #ffffff; background-color: #22b359;}.ctu-ulitate-style-03-tabs{width: 100%; display: none; padding: 6% 3% 5% 4%; font-size: 17px; color: #5c5c5c; line-height: 120%; text-align: left; background-color: #ffffff; font-family: Muli; box-shadow: 0 0 6px #a6a6a6; font-weight: 300;}@media only screen and (max-width: 900px){.ctu-ulimate-style-03{display: none;}.ctu-ultimate-style-heading-03{display: block;}.ctu-ultimate-style-03-content{margin-bottom: 10px;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-03 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-03:first").addClass("active"); jQuery(".ctu-ulitate-style-03-tabs:first").show(); jQuery(".ctu-ulimate-style-03 li").click(function (){jQuery(".ctu-ulimate-style-03 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-03-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-03").click(function (){jQuery(".ctu-ultimate-style-heading-03").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-03-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); var contentliwidth=jQuery(".ctu-ulimate-style-03 li").outerWidth(); var count=jQuery(".ctu-ulimate-style-03 li").length; var fullwidth=jQuery(".ctu-ulimate-style-03").width(); var widthresult=contentliwidth * count; if (fullwidth <=widthresult){var eachwidth=parseInt(fullwidth / count) + 'px'; $(".ctu-ulimate-style-03 li").css("width", eachwidth);}});</script><style>.ctu-ultimate-wrapper-90{width: 100%; float: left; display: flex; box-shadow: 0 0 4px #8a8a8a; border-radius: 5px; overflow: hidden;}.ctu-ulimate-style-90{width: calc(100% - 75%); float: left; list-style: none; text-align: center; justify-content: flex-start; overflow: hidden; margin-bottom: 0; background-color: #ffffff; padding: 25px;}.ctu-ulimate-style-90 li{width: 100%; float:left; position: relative; list-style: none; cursor: pointer; max-width: 240px; position: relative; display: block; margin-bottom: 0; border-left: 1px solid #bdbdbd; padding: 25px 15px; text-align: left; color: #bfbfbf; font-size: 24px; font-family: Anonymous Pro; font-weight: 800; line-height: 120%;}.ctu-ulimate-style-90 li.active{color: #1cc7a5;}.ctu-ulimate-style-90 li.active .ctu-absolute{position: absolute; top: 15%; bottom: 15%; width: 3px; background-color: #1cc7a5; left: -2px;}.ctu-ultimate-style-90-content{width: 75%; float: left; display: -webkit-box; overflow: hidden;}.ctu-ultimate-style-heading-90{width: 100%; cursor: pointer; display: none; line-height: 100%; background-color: #ffffff; font-size: 24px; padding: 25px 10px; font-weight: 800; font-family: Anonymous Pro;}.ctu-ultimate-style-heading-90.active{color: #1cc7a5}.ctu-ulitate-style-90-tabs{width:100%; floar:left; display: none; font-size: 18px; color:#949494; background-color: #fafafa; font-weight: 200; line-height: 1.5; padding: 4% 2% 2% 4%; border-left: 1px solid #ababab; font-family: News Cycle;}.ctu-content-span{max-width: 50px; height: 3px; background-color: #1cc7a5; margin: 0 auto 0 0; margin-bottom: 20px;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-90{display: block; box-shadow: none; overflow: visible; border-radius: 0;}.ctu-ultimate-style-90-content{width: 100%; display: block; overflow: visible;}.ctu-ulimate-style-90{display: none;}.ctu-ultimate-style-heading-90{display: block; box-shadow: 0 0 5px #8a8a8a; margin-bottom: 10px;}.ctu-ulitate-style-90-tabs{margin-bottom: 10px; box-shadow: 0 0 5px #8a8a8a; border-left: none;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-90 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-90:first").addClass("active"); jQuery(".ctu-ulitate-style-90-tabs:first").show(); jQuery(".ctu-ulimate-style-90 li").click(function (){jQuery(".ctu-ulimate-style-90 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-90-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-90").click(function (){jQuery(".ctu-ultimate-style-heading-90").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-90-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-91{width: 100%; float: left; box-shadow: 0 0 11px #6e6e6e; border-radius: 5px 5px 0 0;}.ctu-ulimate-style-91{width: 100%; display: flex; list-style:none; float: left; text-align: center; margin-bottom: 0; border-radius: 5px 5px 0 0; justify-content: center; border-bottom: 1px solid #239cc4; background-color: #ededed; z-index: 1; position: relative;}.ctu-ulimate-style-91 li{cursor: pointer; float: left; list-style:none; margin-bottom: 0; text-align: center; position: relative; padding: 11px 10px; font-size: 24px; line-height: 120%; color: #949494; width: 275px; font-family: Anonymous Pro; font-weight: 600;}.ctu-ulimate-style-91 li span{width: 100%; display: block; text-align: center;}.ctu-ulimate-style-91 li span .fa{margin-bottom: 0px; font-size: 24px;}.ctu-ulimate-style-91 li.active{position: relative; transition: all 0.5s linear; color: #12bee0;}.ctu-absulote{position: absolute; width: 11px; height: 11px; margin: auto; left: 0; right: 0; border-color: #239cc4; border: 1px solid; border-radius: 10px; bottom: -6px; background-color: transparent;}.ctu-ulimate-style-91 li.active .ctu-absulote{background-color: #12bee0; border-color: #12bee0;}.ctu-ultimate-style-91-content{width: 100%; float: left;}.ctu-ultimate-style-heading-91{cursor: pointer; display: none; width: 100%; font-weight: #239cc4; font-family: Anonymous Pro ; line-height: 120%; padding: 11px 10px; text-align: center; font-size: 24px; color: #949494; background-color: #ededed; border-radius: 5px;}.ctu-ultimate-style-heading-91.active{transition: all 0.5s linear; color: #12bee0; border-bottom: 1px solid #239cc4; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-91-tabs{width: 100%; display: none; padding: 3% 1% 5% 2%; font-size: 16px; color: #7a7a7a; line-height: 2.4; text-align: left; font-family: Nobile; font-weight: 200; background-color: #ffffff;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-91{box-shadow: none; border-radius: 0;}.ctu-ulimate-style-91{display: none;}.ctu-ultimate-style-heading-91{display: block;}.ctu-ultimate-style-91-content{margin-bottom: 10px; box-shadow: 0 0 5px #ffffff; border-radius: 5px; overflow: hidden;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-91 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-91:first").addClass("active"); jQuery(".ctu-ulitate-style-91-tabs:first").show(); jQuery(".ctu-ulimate-style-91 li").click(function (){jQuery(".ctu-ulimate-style-91 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-91-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-91").click(function (){jQuery(".ctu-ultimate-style-heading-91").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-91-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); var contentliwidth=jQuery(".ctu-ulimate-style-91 li").outerWidth(); var count=jQuery(".ctu-ulimate-style-91 li").length; var fullwidth=jQuery(".ctu-ulimate-style-91").width(); var widthresult=contentliwidth * count; if (fullwidth <=widthresult){var eachwidth=parseInt(fullwidth / count) + 'px'; $(".ctu-ulimate-style-91 li").css("width", eachwidth);}});</script><style>.ctu-ultimate-wrapper-92{width: 100%; float: left; display: flex; background-color: #e8e8e8; box-shadow: 0 0 6px #595959;}.ctu-ulimate-style-92{float: left; list-style: none; width: calc(100% - 78%); margin-bottom: 0;}.ctu-ulimate-style-92 li{width: 95%; margin-bottom: 0; transition: all 0.3s linear; cursor: pointer; position: relative; padding: 20px 20px; margin-right: 5%; font-size: 24px; color: #ffffff; background-color: #2aa8c4; font-weight: 600; font-family: Open Sans;}.ctu-ulimate-style-92 li.active{color: #ffffff; width: 100%; margin-right: 0; background-color: #0d9aba;}.ctu-ulimate-style-92 li.active .ctu-absolute{position: absolute; left: 0; top: 15%; bottom: 15%; width: 3px; background-color: #ffffff;}.ctu-ultimate-style-92-content{width: 78%; float: left;}.ctu-ultimate-style-heading-92{width: 100%; cursor: pointer; display: none; line-height: 100%; background-color: #2aa8c4; font-size: 24px; padding: 20px 20px; font-weight: 600; font-family: Open Sans;}.ctu-ultimate-style-heading-92.active{color: #ffffff; background-color: #0d9aba;}.ctu-ulitate-style-92-tabs{display: flex; display: none; text-align: left; font-size: 20px; color: #636363; font-family: News Cycle; font-weight: 78; line-height: 1.6; padding: 6%3% 5% 4%;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-92{display: block; box-shadow: none; background-color: transparent;}.ctu-ultimate-style-92-content{width: 100%; border-left: none; display: block; overflow: visible;}.ctu-ulimate-style-92{display: none;}.ctu-ultimate-style-heading-92{display: block; box-shadow: 0 0 5px #595959; margin-bottom: 10px;}.ctu-ulitate-style-92-tabs{margin-bottom: 10px; background-color: #e8e8e8; box-shadow: 0 0 5px #595959;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-92 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-92:first").addClass("active"); jQuery(".ctu-ulitate-style-92-tabs:first").show(); jQuery(".ctu-ulimate-style-92 li").click(function (){jQuery(".ctu-ulimate-style-92 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-92-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-92").click(function (){jQuery(".ctu-ultimate-style-heading-92").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-92-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-93{width: 100%; float: left; box-shadow: 0 0 8px #8c8c8c; border: 1px solid #fffafa; border-radius: 8px 8px 0 0; overflow: hidden;}.ctu-ulimate-style-93{width: 100%; display: flex; margin-bottom: 0; list-style: none; background-color: #228275; justify-content: center; border-bottom: 1px solid #fcfcfc;}.ctu-ulimate-style-93 li{width: 200px; float: left; list-style: none; text-align: center; cursor: pointer; margin-bottom: 0; font-size: 24px; color: #ffffff; font-family: Buda; font-weight: 600; padding: 20px 10px; border-right: 1px solid #fcfcfc;}.ctu-ulimate-style-93 li:last-of-type{border-right: none;}.ctu-ulimate-style-93 li.active{color: #27add9; background-color: #ffffff;}.ctu-ultimate-style-93-content{width: 100%; float: left;}.ctu-ultimate-style-heading-93{width: 100%; cursor: pointer; float: left; display: none; line-height: 100%; background-color: #228275; font-size: 24px; color: #ffffff; padding: 20px 10px; font-weight: 600; font-family: Buda;}.ctu-ultimate-style-heading-93.active{color: #003eff; background-color: #ffffff; border-bottom: 1px solid #fcfcfc;}.ctu-ulitate-style-93-tabs{width: 100%; float: left; display: none; font-size: 20px; color: #787878; background-color: #d9d9d9; font-weight: 300; line-height: 1.6; font-family: Buda; padding: 5% 4% 5% 5%;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-93{display: block; box-shadow: none; border: none;}.ctu-ultimate-style-93-content{box-shadow: 0 0 8px #8c8c8c; border: 1px solid #fffafa; border-radius: 8px; overflow: hidden; margin-bottom: 10px;}.ctu-ulimate-style-93{display: none;}.ctu-ultimate-style-heading-93{display: block;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-93 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-93:first").addClass("active"); jQuery(".ctu-ulitate-style-93-tabs:first").show(); jQuery(".ctu-ulimate-style-93 li").click(function (){jQuery(".ctu-ulimate-style-93 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-93-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-93").click(function (){jQuery(".ctu-ultimate-style-heading-93").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-93-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-94{width: 100%; float: left;}.ctu-ulimate-style-94{width: 100%; float: left; list-style: none; display: flex; text-align: center; justify-content: center; margin-bottom: 0;}.ctu-ulimate-style-94 li{width: 244px; float: left; z-index: 2; position: relative; bottom: -1px; list-style: none; cursor: pointer; margin-bottom: 0; border-top: 1px solid; border-right: 1px solid; border-bottom: 1px solid; border-color: #d6bcbc; padding: 20px 10px; text-align: center; color: #ffffff; background-color: #ababab; font-size: 24px; font-family: Buda; font-weight: 700; line-height: 130%;}.ctu-ulimate-style-94 li:first-child{border-left: 1px solid #d6bcbc;}.ctu-ulimate-style-94 li.active{color: #f2f2f2; background-color: #12b3ab; border-bottom-color: #12b3ab;}.ctu-ultimate-style-94-content{width: 100%; float: left;}.ctu-ultimate-style-heading-94{width: 100%; cursor: pointer; display: none; line-height: 100%; color: #ffffff; background-color: #ababab; font-size: 24px; padding: 20px 10px; font-weight: 244; font-family: Buda;}.ctu-ultimate-style-heading-94.active{color: #f2f2f2; background-color: #12b3ab; border-bottom: 1px solid #d6bcbc;}.ctu-ulitate-style-94-tabs{display: none; border: 1px solid #d6bcbc; font-size: 20px; color: #5c5c5c; background-color:#ffffff; font-weight: 200; line-height: 1.6; padding: 5% 4% 5% 4% ; text-align: center; font-family: News Cycle;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-94{display: block;}.ctu-ultimate-style-94-content{width: 100%; margin-bottom: 10px; border: 1px solid #d6bcbc;}.ctu-ulimate-style-94{display: none;}.ctu-ultimate-style-heading-94{display: block;}.ctu-ulitate-style-94-tabs{border:none;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-94 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-94:first").addClass("active"); jQuery(".ctu-ulitate-style-94-tabs:first").show(); jQuery(".ctu-ulimate-style-94 li").click(function (){jQuery(".ctu-ulimate-style-94 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-94-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-94").click(function (){jQuery(".ctu-ultimate-style-heading-94").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-94-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script> <style>.ctu-ultimate-wrapper-95{width: 100%; float: left;}.ctu-ulimate-style-95{width: 100%; float: left; list-style: none; text-align: center; display: flex; justify-content: center; margin-bottom: 10px; box-shadow: 0 0 6px #55c0e0; background-color: #ffffff; border-radius: 5px 5px 0 0 ; margin-bottom: 10px}.ctu-ulimate-style-95 li{position: relative; list-style: none; cursor: pointer; width: 200px; float: left; padding: 5px 10px ; text-align: center; color: #828282; font-size: 24px; font-family: Buda; font-weight: 600; line-height: 130%; margin: 10px 0; border-right: 1px solid; border-color: #dbdbdb;}.ctu-ulimate-style-95 li:last-of-type{border-right: none}.ctu-ulimate-style-95 li.active{color: #03979c;}.ctu-ulimate-style-95 li.active .ctu-absolute{position: absolute; left: 0; right: 0; bottom: calc(-10px - 10px ); margin: 0 auto; width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid #ffffff;}.ctu-ultimate-style-95-content{width: 100%; float: left;}.ctu-ultimate-style-heading-95{width: 100%; cursor: pointer; float: left; display: none; line-height: 100%; color: #828282; background-color: #ffffff; font-size: 24px; padding: 10px 10px; font-weight: 600; box-shadow: 0 0 6px #55c0e0; font-family: Buda; border-radius: 5px;}.ctu-ultimate-style-heading-95.active{color: #03979c; margin-bottom: 10px; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-95-tabs{width: 100%; float: left; display: none; font-size: 20px; color: #7d7d7d; background-color: #ffffff; font-weight:300; line-height: 2; text-align: left; box-shadow: 0 0 6px #9e9e9e; padding: 4% 4% 4% 4% ; border-radius: 0 0 5px 5px; font-family: Buda;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-95{display: block;}.ctu-ultimate-style-95-content{width: 100%; margin-bottom: 10px;}.ctu-ulimate-style-95{display: none;}.ctu-ultimate-style-heading-95{display: block;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-95 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-95:first").addClass("active"); jQuery(".ctu-ulitate-style-95-tabs:first").show(); jQuery(".ctu-ulimate-style-95 li").click(function (){jQuery(".ctu-ulimate-style-95 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-95-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-95").click(function (){jQuery(".ctu-ultimate-style-heading-95").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-95-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-96{width: 100%; float: left;}.ctu-ulimate-style-96{width: calc(20% + 52px); float: left; list-style: none; text-align: center; margin-bottom: 0;}.ctu-ulimate-style-96 li{width: calc(100% - 52px); position: relative; list-style: none; cursor: pointer; max-width: 240px; display: block; padding-left: 10px; margin-bottom: 0; padding-top: 19px; padding-bottom:19px; text-align: left; color: #8f8f8f; border-left: 5px solid; border-left-color: transparent; font-size: 24px; font-family: Buda; font-weight: 600; line-height: 100%;}.ctu-ulimate-style-96 li.active{color: #ffffff; border-left-color: #ffffff; background-color: #1394bf; border-radius: 5px 0 0 5px;}.ctu-ulimate-style-96 li em{display: inline-block; float: left; margin-right: 10px; background: #919191; text-align: center; height: 24px; width: 24px; border-radius: 50%; font-style: normal; font-size: 12px; color: #ffffff; line-height: 24px;}.ctu-ulimate-style-96 li.active{border-color: #ffffff;}.ctu-ulimate-style-96 li.active em{background-color: #ffffff; color: #17a8b5;}.ctu-ulimate-style-96 li.active span{width: 52px; position: absolute; right: -26px; top: 5px; height: 52px; border-radius: 14px; -webkit-border-radius: 14px; -moz-border-radius: 14px; -ms-border-radius: 14px; transform: rotate(45deg); -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); display: block; background-color: #1394bf;}.ctu-ultimate-style-96-content{width: calc(80% - 52px); float: left;}.ctu-ultimate-style-heading-96{width: 100%; cursor: pointer; display: none; float: left; line-height: 100%; color: #8f8f8f; background-color: #1394bf; font-size: 24px; padding: 19px 10px; font-weight: 240; border-radius: 5px; font-family: Buda;}.ctu-ultimate-style-heading-96 em{display: inline-block; float: left; margin-right: 10px; background: #919191; text-align: center; height: 24px; width: 24px; border-radius: 50%; font-weight: normal; font-size: 12px; color: #ffffff; line-height: 24px;}.ctu-ultimate-style-heading-96.active em{background-color: #ffffff; color: #17a8b5;}.ctu-ultimate-style-heading-96.active{color: #ffffff; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-96-tabs{float: left; width: 100%; display: none; float: left; text-align: left; font-family: Buda; border-radius: 5px; font-size: 20px; color: #7a7a7a; background-color: #ffffff; font-weight: 200; line-height: 1.8; box-shadow: 0 0 5px #cfcfcf; padding: 6% 5% 6% 5% ;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-96{display: block;}.ctu-ultimate-style-96-content{width: 100%; float: left;}.ctu-ulimate-style-96{display: none;}.ctu-ultimate-style-heading-96{display: block; box-shadow: 0 0 5px #cfcfcf; margin-bottom: 10px;}.ctu-ulitate-style-96-tabs{margin-bottom: 10px; box-shadow: 0 0 5px #cfcfcf; border-radius: 0 0 5px 5px;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-96 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-96:first").addClass("active"); jQuery(".ctu-ulitate-style-96-tabs:first").show(); jQuery(".ctu-ulimate-style-96 li").click(function (){jQuery(".ctu-ulimate-style-96 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-96-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-96").click(function (){jQuery(".ctu-ultimate-style-heading-96").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-96-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-97{width: 100%; float: left;}.ctu-ulimate-style-97{width: 100%; float: left; list-style: none; display: flex; text-align: center; justify-content: center; margin-bottom: 5px;}.ctu-ulimate-style-97 li{list-style: none; width: 100%; float: left; cursor: pointer; max-width: 192px; position: relative; margin-bottom: 0; border-top: 5px solid ; padding: 15px 10px; margin-right: 5px; text-align: center; background-color: #ffffff; font-size: 24px; font-family: Buda; font-weight: 192; line-height: 100%; box-shadow: 0 0 5px #7d7777;}.ctu-ulimate-style-97 li span{color: #a6a6a6; width: 100%; text-align: center; float: left; display: flex; justify-content: center; align-items: center;}.ctu-ulimate-style-97 li.active span{color: inherit;}.ctu-ulimate-style-97 li:last-of-type{margin-right: none;}.ctu-ulimate-style-97 li span .fa, .ctu-ultimate-style-heading-97 span .fa{padding-right: 8px; font-size: 20px;}.ctu-ultimate-style-97-content{width:100%; float: left;}.ctu-ultimate-style-heading-97{width: 100%; float: left; cursor: pointer; display: none; line-height: 100%; background-color:#ffffff; font-size: 24px; padding: 15px 10px; font-weight: 600; font-family: Buda; box-shadow: 0 0 3px #7d7777;}.ctu-ultimate-style-heading-97 span{color: #a6a6a6; width: 100%; text-align: center; float: left; display: flex; justify-content: center; align-items: center;}.ctu-ultimate-style-heading-97 span .fa{font-size:20px;}.ctu-ultimate-style-heading-97.active span{color: inherit;}.ctu-ulitate-style-97-tabs{width: 100%; float: left; display: none; font-size: 20px; color: #5c5c5c; background-color: #dedede; font-weight: 300; line-height: 1.8; padding: 3% 1% 5% 1% ; font-family: Buda; text-align: center; box-shadow: 0 0 4px #b57777;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-97{display: block; box-shadow: none;}.ctu-ultimate-style-97-content{width: 100%; border-left: none; display: block; overflow: visible;}.ctu-ulimate-style-97{display: none;}.ctu-ultimate-style-heading-97{display: block; box-shadow: 0 0 3px #7d7777; margin-bottom: 10px;}.ctu-ulitate-style-97-tabs{margin-bottom: 10px;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-97 li:first").addClass("active"); jQuery(".ctu-ulimate-style-97 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-97:first").addClass("active"); jQuery(".ctu-ulitate-style-97-tabs:first").show(); jQuery(".ctu-ulimate-style-97 li").click(function (){jQuery(".ctu-ulimate-style-97 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-97-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-97").click(function (){jQuery(".ctu-ultimate-style-heading-97").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-97-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ulimate-style-97 li:first").attr("ref");});</script><style>.ctu-ultimate-wrapper-98{width: 100%; float: left;}.ctu-ulimate-style-98{width: calc(100% - 74%); float: left; list-style: none; margin-bottom: 0;}.ctu-ulimate-style-98 li{width: calc(100% - 10px); position: relative; list-style: none; cursor: pointer; max-width: 242px; display: block; margin-bottom: 6px; padding: 20px 10px; text-align: left; color: #f7f7f7; font-size: 24px; font-family: Buda; font-weight: 600; background-color: #1d9da1; line-height: 100%; box-shadow: 0 0 4px #636363;}.ctu-ulimate-style-98 li.active{color: #ffffff; background-color: #1c97d9;}.ctu-ulimate-style-98 li.active .ctu-absolute{position: absolute; top: 22px; right: -10px; width: 0; height: 0; border-top: 10px solid transparent; border-left: 10px solid #1c97d9; border-bottom: 10px solid transparent;}.ctu-ultimate-style-98-content{width: 74%; float: left;}.ctu-ultimate-style-heading-98{width: 100%; float: left; cursor: pointer; display: none; line-height: 100%; color: #f7f7f7; background-color: #1d9da1; font-size: 24px; padding: 20px 10px; font-weight: 600; font-family: "Buda"; box-shadow: 0 0 3px #636363; border-radius: 5px;}.ctu-ultimate-style-heading-98.active{color: #ffffff; background-color: #1c97d9; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-98-tabs{display: none; float: left; width: 100%; font-size: 20px; border: 1px solid; border-color: #999999; color: #828282; border-radius: 3px; background-color: #f0f0f0; font-weight: 300; line-height: 1.6; text-align: left; padding: 3.5% 3.6% 5% 5% ; font-family: "Buda"; box-shadow: 0 0 4px #b8b8b8;}@media only screen and (max-width: 900px){.ctu-ultimate-style-98-content{width: 100%;}.ctu-ulimate-style-98{display: none;}.ctu-ultimate-style-heading-98{display: block; margin-bottom: 10px;}.ctu-ulitate-style-98-tabs{margin-bottom: 10px; border-radius: 0 0 5px 5px; box-shadow: 0 0 3px #b8b8b8;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-98 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-98:first").addClass("active"); jQuery(".ctu-ulitate-style-98-tabs:first").show(); jQuery(".ctu-ulimate-style-98 li").click(function (){jQuery(".ctu-ulimate-style-98 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-98-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-98").click(function (){jQuery(".ctu-ultimate-style-heading-98").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-98-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-99{width: 100%; float: left;}.ctu-ulimate-style-99{width: 100%; float: left; display: flex; list-style: none; text-align: center; justify-content: center; margin-bottom: 13px;}.ctu-ulimate-style-99 li{width: 100%; list-style: none; cursor: pointer; float: left; max-width: 250px; margin-bottom: 0; padding: 10px 10px; text-align: center; color: #ffffff; background-color: #519ad1; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%; border-radius: 20px; box-shadow: 0 0 4px #736363; margin-right: 10px;}.ctu-ulimate-style-99 li:last-of-type{margin-right: 0;}.ctu-ulimate-style-99 li.active{color: #159ed9; background-color: #ffffff;}.ctu-ultimate-style-99-content{width: 100%; float: left;}.ctu-ultimate-style-heading-99{width: 100%; float: left; cursor: pointer; display: none; line-height: 100%; color: #ffffff; background-color: #519ad1; font-size: 24px; padding: 10px 10px; font-weight: 600; font-family: "Buda"; border-radius:5px; box-shadow: 0 0 4px #736363;}.ctu-ultimate-style-heading-99.active{color: #159ed9; background-color: #ffffff;}.ctu-ulitate-style-99-tabs{display: none; width: 100%; float: left; font-size: 20px; color: #525252; background-color: transparent; font-weight: 300; line-height: 2; padding: 3% 5% 3% 3%; font-familly: Buda; text-align: center; border-radius: 8px; box-shadow: 0 0 0px #a6a6a6;}@media only screen and (max-width: 900px){.ctu-ulimate-style-99{display: none;}.ctu-ultimate-style-heading-99{display: block; box-shadow: 0 0 3px #736363; margin-bottom: 10px;}.ctu-ulitate-style-99-tabs{margin-bottom: 10px;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-99 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-99:first").addClass("active"); jQuery(".ctu-ulitate-style-99-tabs:first").show(); jQuery(".ctu-ulimate-style-99 li").click(function (){jQuery(".ctu-ulimate-style-99 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-99-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-99").click(function (){jQuery(".ctu-ultimate-style-heading-99").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-99-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script><style>.ctu-ultimate-wrapper-100{width: 100%; float: left;}.ctu-ulimate-style-100{width: 100%; float: left; list-style: none; text-align: center; display: flex; justify-content: center; margin-bottom: 20px;}.ctu-ulimate-style-100 li{width: 100%; float: left; position: relative; display: flex; justify-content: center; align-items: center; list-style: none; cursor: pointer; max-width: 200px; margin-bottom: 0; padding: 15px 12px; text-align: center; color: #8a8a8a; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%;}.ctu-ulimate-style-100 li.active{color: #ffffff; background-color: #1abfed; border-radius: 16px; box-shadow: 0 0 15px #9e9c9c;}.ctu-ulimate-style-100 li .fa{padding-right: 8px; font-size: 26px;}.ctu-ulimate-style-100 li.active .ctu-absolute{position: absolute; bottom: -10px; left: 0; right: 0; margin: 0 auto; width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid #1abfed;}.ctu-ultimate-style-100-content{width: 100%; float: left;}.ctu-ultimate-style-heading-100{width: 100%; float: left; display: flex; justify-content: center; align-items: center; cursor: pointer; display: none; line-height: 100%; background-color: #1abfed; font-size: 24px; padding:15px 10px; font-weight: 600; font-family: "Buda"; border-radius: 5px; box-shadow: 0 0 15px #9e9c9c;}.ctu-ultimate-style-heading-100.active{color: #ffffff;}.ctu-ultimate-style-heading-100 .fa{font-size: 26px;}.ctu-ulitate-style-100-tabs{width: 100%; float: left; display: none; font-size: 20px; color: #828282; background-color: #ffffff; font-weight: 300; line-height: 1.6; padding: 2% 2% 2% 2% ; border-radius: 5px; font-family:"Buda"; box-shadow: 0 0 3px #828282; text-align:center;}@media only screen and (max-width: 900px){.ctu-ultimate-style-100-content{width: 100%;}.ctu-ulimate-style-100{display: none;}.ctu-ultimate-style-heading-100{display: block; margin-bottom: 10px;}.ctu-ulitate-style-100-tabs{margin-bottom: 10px;}}</style><script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-100 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-100:first").addClass("active"); jQuery(".ctu-ulitate-style-100-tabs:first").show(); jQuery(".ctu-ulimate-style-100 li").click(function (){jQuery(".ctu-ulimate-style-100 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-100-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-100").click(function (){jQuery(".ctu-ultimate-style-heading-100").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-100-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});});</script> <style>.ctu-ultimate-wrapper-101{width: 100%; float: left; border-radius: 5px; overflow: hidden; background-color: #ffffff; box-shadow: 0 0 5px #a33636;}.ctu-ulimate-style-101{width: calc(100% - 80%); float: right; list-style: none; text-align: center; overflow: hidden; margin-bottom: 0;}.ctu-ulimate-style-101 li{width: 100%; list-style: none; cursor: pointer; display: block; display: flex; align-items: center; margin-bottom: 2px; padding: 15px 12px; text-align: left; color: #ffffff; background-color: #17b1d4; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%;}.ctu-ulimate-style-101 li.active{color: #ffffff; background-color: #1fa3ba;}.ctu-ulimate-style-101 li .fa{font-size: 28px; margin-right: 10px;}.ctu-ulimate-style-101 li:last-of-type{margin-bottom: 0;}.ctu-ultimate-style-101-content{width: 80%; float: left;}.ctu-ultimate-style-heading-101{width: 100%; float: left; display: flex; align-items: center; cursor: pointer; display: none; line-height: 100%; color: #ffffff; background-color: #17b1d4; font-size: 24px; padding: 15px 10px; font-weight: 600; font-family: "Buda";}.ctu-ultimate-style-heading-101.active{color: #ffffff; background-color:#1fa3ba; border-radius: 5px 5px 0 0;}.ctu-ultimate-style-heading-101 .fa{font-size: 28px; margin-right: 10px;}.ctu-ulitate-style-101-tabs{float: left; width: 100%; display: none; font-size: 18px; color: #8c8989; font-weight: 200; line-height: 1.6; padding: 3% 3% 3% 3% ; text-align: right; font-family: "Buda";}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-101{display: block; overflow: visible; border-radius: 0; background-color: transparent; box-shadow: none;}.ctu-ultimate-style-101-content{width: 100%; display: block; overflow: visible;}.ctu-ulimate-style-101{display: none;}.ctu-ultimate-style-heading-101{width: 100%; float: left; display: block; border-radius: 5px; box-shadow: 0 0 5px #a33636; margin-bottom: 10px;}.ctu-ulitate-style-101-tabs{margin-bottom: 10px; border-radius: 0 0 5px 5px; box-shadow: 0 0 5px #a33636;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-101 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-101:first").addClass("active"); jQuery(".ctu-ulitate-style-101-tabs:first").show(); jQuery(".ctu-ulimate-style-101 li").click(function (){jQuery(".ctu-ulimate-style-101 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-101-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-101").click(function (){jQuery(".ctu-ultimate-style-heading-101").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-101-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-102{width: 100%; float: left; border-radius: 5px; box-shadow: 0 0 3px #404040; background-color: #ffffff;}.ctu-ulimate-style-102{width: calc(100% - 80%); float: left; list-style: none; text-align: center; overflow: hidden; margin-bottom: 0; padding: 10px;}.ctu-ulimate-style-102 li{width: 100%; list-style: none; cursor: pointer; display: block; margin-bottom: 10px; padding: 10px 10px; text-align: center; color: #ffffff; background-color: #4a4a4a ; font-size: 20px; font-family: "Buda"; font-weight: 600; line-height: 100%; border-radius: 5px; box-shadow: 0 0 6px #383838}.ctu-ulimate-style-102 li:last-of-type{margin-bottom: 0;}.ctu-ulimate-style-102 li.active{color: #ffffff; background-color: #2da690;}.ctu-ulimate-style-102 li .fa{display: block; padding-bottom: 5px; font-size: 24px;}.ctu-ultimate-style-102-content{width: 80%; float: left; overflow: hidden;}.ctu-ultimate-style-heading-102{width: 100%; float:left; cursor: pointer; display: none; line-height: 100%; font-size: 20px; padding: 20px 10px; font-weight: 600; font-family: "Buda"; box-shadow: 0 0 3px #383838; border-radius: 5px; color: #ffffff; background-color: #4a4a4a;}.ctu-ultimate-style-heading-102.active{color: #ffffff; background-color: #2da690;}.ctu-ulitate-style-102-tabs{display: none; width:100%; float:left; font-size: 18px; color:#474747; font-weight: 200; line-height: 1.8; padding: 4% 3% 4% 3% ; font-family: "Buda"; text-align: left}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-102{display: block; box-shadow: none; border-radius:0; background-color:transparent;}.ctu-ultimate-style-102-content{width: 100%; float: left; overflow: visible;}.ctu-ulimate-style-102{display: none;}.ctu-ultimate-style-heading-102{display: block; margin-bottom: 10px;}.ctu-ulitate-style-102-tabs{border-radius: 5px; margin-bottom: 10px; box-shadow: 0 0 3px #404040;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-102 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-102:first").addClass("active"); jQuery(".ctu-ulitate-style-102-tabs:first").show(); jQuery(".ctu-ulimate-style-102 li").click(function (){jQuery(".ctu-ulimate-style-102 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-102-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-102").click(function (){jQuery(".ctu-ultimate-style-heading-102").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-102-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-103{width: 100%; float: left;}.ctu-ulimate-style-103{width: 100%; float: left; list-style: none; text-align: center; display: flex; justify-content: center; margin-bottom: 11px;}.ctu-ulimate-style-103 li{width: 100%; float: left; list-style: none; cursor: pointer; max-width: 187px; display: block; margin-bottom: 0; padding: 16px 10px; text-align: center; color: #f7f7f7; background-color: #038f9e; border: 1px solid ; border-color: #94a8b0; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%; border-radius: 5px; margin-right: 5px; box-shadow: 0 0 3px #707070;}.ctu-ulimate-style-103 li:last-of-type{margin-right: 0;}.ctu-ulimate-style-103 li.active{color: #ffeded; background-color: #02a1bd; border-color: #02a1bd;}.ctu-ultimate-style-103-content{width: 100%; float: left;}.ctu-ultimate-style-heading-103{width: 100%; float:left; cursor: pointer; display: none; line-height: 100%; color: #f7f7f7; background-color: #038f9e; border: 1px solid #94a8b0; font-size: 24px; padding: 16px 10px; font-weight: 600; font-family: "Buda"; margin-bottom: 10px; box-shadow: 0 0 3px #707070; border-radius: 5px;}.ctu-ultimate-style-heading-103.active{color: #ffeded; background-color: #02a1bd; border-color: #02a1bd; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-103-tabs{display: none; width:100%; float:left; font-size: 17px; color: #595959; background-color: transparent; font-family: "Buda"; font-weight: 300; text-align: center; line-height: 1.6; padding: 4% 2% 3% 2% ; border-radius: 23px; box-shadow: 0 0 0px #cccccc;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-103{display: block;}.ctu-ultimate-style-103-content{width: 100%; display: block;}.ctu-ulimate-style-103{display: none;}.ctu-ultimate-style-heading-103{display: block;}.ctu-ulitate-style-103-tabs{margin-bottom: 10px; border-radius: 0 0 5px 5px;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-103 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-103:first").addClass("active"); jQuery(".ctu-ulitate-style-103-tabs:first").show(); jQuery(".ctu-ulimate-style-103 li").click(function (){jQuery(".ctu-ulimate-style-103 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-103-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-103").click(function (){jQuery(".ctu-ultimate-style-heading-103").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-103-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-104{width: 100%; float: left; text-align: center; background-color: #ffffff; box-shadow: 0 0 3px #0d0d0d; border-radius: 5px;}.ctu-ulimate-style-104{display: inline-block; list-style: none; text-align: center; overflow: hidden; margin-bottom: 0; margin-top: 10px; background-color: #0099c7; border-radius: 5px; padding: 5px; box-shadow: 0 0 5px #878787;}.ctu-ulimate-style-104 li{list-style: none; cursor: pointer; width: 207px; display: inline-block; margin-bottom: 0; padding: 15px 10px; text-align: center; color: #ffffff; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%; border-radius: 5px;}.ctu-ulimate-style-104 li.active{color: #ffffff; background-color: #3fd9ab;}.ctu-ultimate-style-104-content{width: 100%; float: left;}.ctu-ultimate-style-heading-104{width: 100%; float: left; cursor: pointer; display: none; line-height: 100%; color: #ffffff; background-color:#0099c7; font-size: 24px; padding: 15px 10px; font-weight: 600; font-family: "Buda"; box-shadow: 0 0 5px #878787; margin-bottom: 10px; border-radius: 5px;}.ctu-ultimate-style-heading-104.active{color: #ffffff; background-color:#3fd9ab; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-104-tabs{width: 100%; float: left; display: none; font-size: 20px; color: #7d7d7d; font-family: "Buda"; font-weight: 100; text-align: left; line-height: 1.4; padding: 3% 3% 3% 3% ;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-104{display: block; background-color: transparent; box-shadow: none; border-radius: 0;}.ctu-ultimate-style-104-content{width: 100%;}.ctu-ulimate-style-104{display: none;}.ctu-ultimate-style-heading-104{display: block;}.ctu-ulitate-style-104-tabs{margin-bottom: 10px; background-color: #ffffff; box-shadow: 0 0 5px #0d0d0d; border-radius: 0 0 5px 5px;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-104 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-104:first").addClass("active"); jQuery(".ctu-ulitate-style-104-tabs:first").show(); jQuery(".ctu-ulimate-style-104 li").click(function (){jQuery(".ctu-ulimate-style-104 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-104-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-104").click(function (){jQuery(".ctu-ultimate-style-heading-104").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-104-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-105{width: 100%; float: left; box-shadow: 0 0 5px #4a4a4a; background-color: #ffffff; border-radius: 5px;}.ctu-ulimate-style-105{width: 100%; float: left; list-style: none; text-align: center; display: flex; justify-content: center; margin-bottom: 10px;}.ctu-ulimate-style-105 li{width: 100%; float: left; position: relative; list-style: none; cursor: pointer; max-width: 190px; margin-bottom: 0; padding: 20px 10px; text-align: center; color: #06b5a9; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%;}.ctu-ulimate-style-105 li.active{color: #05deff; border-bottom: 2px solid; border-bottom-color: #05deff;}.ctu-ulimate-style-105 li.active .ctu-absolute{position: absolute; bottom: -10px; left: 0; right: 0; margin: 0 auto; width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid; border-top-color: #05deff;}.ctu-ultimate-style-105-content{width: 100%; float: left;}.ctu-ultimate-style-heading-105{width: 100%; float:left; cursor: pointer; display: none; line-height: 100%; background-color: #ffffff; color: #06b5a9; font-size: 24px; padding: 20px 10px; font-weight: 600; font-family: "Buda"; border-radius: 5px; box-shadow: 0 0 3px #4a4a4a;}.ctu-ultimate-style-heading-105.active{color: #05deff; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-105-tabs{display: none; float: left; text-align: center; font-size: 20px; color: #787878; font-weight: 300; font-family: "Buda"; line-height: 1.6; padding: 3% 2% 3% 2%;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-105{display: block; background-color: transparent; box-shadow: none; border-radius: 0;}.ctu-ulimate-style-105{display: none;}.ctu-ultimate-style-heading-105{display: block; margin-bottom: 10px;}.ctu-ulitate-style-105-tabs{margin-bottom: 10px; box-shadow: 0 0 3px #4a4a4a;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-105 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-105:first").addClass("active"); jQuery(".ctu-ulitate-style-105-tabs:first").show(); jQuery(".ctu-ulimate-style-105 li").click(function (){jQuery(".ctu-ulimate-style-105 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-105-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-105").click(function (){jQuery(".ctu-ultimate-style-heading-105").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-105-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-106{width: 100%; float: left;}.ctu-ulimate-style-106{width: 100%; float: left; position: relative; list-style: none; display: flex; overflow: hidden; text-align: center; justify-content: flex-end; margin-bottom: 0;}.ctu-ulimate-style-106 li{width: 100%; float: left; position: relative; list-style: none; cursor: pointer; max-width: 200px; margin-bottom: 0; margin-right: 5px; padding: 20px 10px; text-align: center; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 100%; bottom: -5px; border-radius: 5px 5px 0 0;}.ctu-ulimate-style-106 li:last-of-type{margin-right: 0;}.ctu-ulimate-style-106 li.active{bottom: 0;}.ctu-ultimate-style-106-content{width: 100%; float: left; overflow: hidden;}.ctu-ultimate-style-heading-106{width: 100%; float:left; cursor: pointer; display: none; line-height: 100%; font-size: 24px; padding: 20px 10px; font-weight: 600; font-family: "Buda"; border-radius: 5px;}.ctu-ultimate-style-heading-106.active{border-radius: 5px 5px 0 0;}.ctu-ulitate-style-106-tabs{display: none; float:left; width: 100%; font-size: 16px; text-align: right; font-weight: 300; line-height: 2; padding: 6% 5% 6% 4% ; font-family: "News Cycle";}@media only screen and (max-width: 900px){.ctu-ultimate-style-106-content{width: 100%; overflow: visible;}.ctu-ulimate-style-106{display: none;}.ctu-ultimate-style-heading-106{display: block; margin-bottom: 10px;}.ctu-ulitate-style-106-tabs{margin-bottom: 10px;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-106 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-106:first").addClass("active"); jQuery(".ctu-ulitate-style-106-tabs:first").show(); jQuery(".ctu-ulimate-style-106 li").click(function (){jQuery(".ctu-ulimate-style-106 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-106-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-106").click(function (){jQuery(".ctu-ultimate-style-heading-106").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-106-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-107{width: 100%; float: left; box-shadow: 0 0 5px #474747; border-radius: 5px; background-color:#ffffff;}.ctu-ulimate-style-107{width: 100%; float: left; list-style: none; text-align: center; display: flex; justify-content: center; margin-bottom: 0; border-bottom: 2px solid ; border-color: #75d7f5;}.ctu-ulimate-style-107 li{width: 100%; position: relative; list-style: none; cursor: pointer; max-width: 200px; margin-bottom: 0; padding: 20px 10px; text-align: center; color: #8c8c8c; font-size: 24px; font-family: "Buda"; font-weight: bold; line-height: 100%;}.ctu-ulimate-style-107 li.active{color: #0dccd6;}.ctu-ulimate-style-107 li.active .ctu-absolute{position: absolute; left: 0; right: 0; bottom: -2px; width: 100%; height: 2px; background-color: #2daad4;}.ctu-ultimate-style-107-content{width: 100%; float: left;}.ctu-ultimate-style-heading-107{width: 100%; cursor: pointer; display: none; line-height: 100%; border-radius: 5px; color: #8c8c8c; background-color: #ffffff; font-size: 24px; padding: 20px 10px; font-weight: bold; font-family: "Buda";}.ctu-ultimate-style-heading-107.active{color: #0dccd6; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-107-tabs{display: none; font-size: 20px; color: #949494; font-family: "Buda"; font-weight: 300; line-height: 1.7; padding: 3% 3% 5% 3%;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-107{display: block; box-shadow: none; border-radius: 0; background-color: transparent;}.ctu-ultimate-style-107-content{width: 100%;}.ctu-ulimate-style-107{display: none;}.ctu-ultimate-style-heading-107{display: block; box-shadow: 0 0 3px #474747; margin-bottom: 10px;}.ctu-ulitate-style-107-tabs{margin-bottom: 10px; background-color: #ffffff; box-shadow: 0 0 5px #474747; border-radius: 0 0 5px 5px;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-107 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-107:first").addClass("active"); jQuery(".ctu-ulitate-style-107-tabs:first").show(); jQuery(".ctu-ulimate-style-107 li").click(function (){jQuery(".ctu-ulimate-style-107 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-107-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-107").click(function (){jQuery(".ctu-ultimate-style-heading-107").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-107-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script> <style>.ctu-ultimate-wrapper-108{width: 100%; float: left; box-shadow: 0 0 5px #1f1f1f; background-color: #d6d6d6; overflow: hidden; border-radius: 5px;}.ctu-ulimate-style-108{width: calc(100% - 75.5%); float: right; list-style: none; text-align: center; margin-bottom: 0;}.ctu-ulimate-style-108 li{width: 100%; list-style: none; cursor: pointer; display: block; margin-bottom: 2px; padding: 20px 10px; text-align: left; color: #ffffff; background-color: #616161; font-size: 24px; font-family: "Buda"; font-weight: 600; line-height: 130%;}.ctu-ulimate-style-108 li.active{color: #ffffff; background-color: #10aad1;}.ctu-ultimate-style-108-content{width: 75.5%; float: left;}.ctu-ultimate-style-heading-108{width: 100%; float: left; cursor: pointer; display: none; line-height: 100%; border-radius: 5px; color: #ffffff; background-color: #616161; font-size: 24px; padding: 20px 10px; font-weight: 600; font-family: "Buda";}.ctu-ultimate-style-heading-108.active{color: #ffffff; background-color: #10aad1; border-radius: 5px 5px 0 0;}.ctu-ulitate-style-108-tabs{width: 100%; float: left; display: none; font-size: 16px; color: #8a8a8a; font-weight: 200; line-height: 1.8; text-align: right; font-family: "Droid Sans"; padding: 4% 5% 5% 5%;}@media only screen and (max-width: 900px){.ctu-ultimate-wrapper-108{display: block; box-shadow: none; background-color: transparent; border-radius: 0; overflow: visible;}.ctu-ultimate-style-108-content{width: 100%; overflow: visible;}.ctu-ulimate-style-108{display: none;}.ctu-ultimate-style-heading-108{display: block; box-shadow: 0 0 3px #1f1f1f; margin-bottom: 10px;}.ctu-ulitate-style-108-tabs{margin-bottom: 10px; background-color: #d6d6d6; box-shadow: 0 0 3px #1f1f1f; border-radius: 0 0 5px 5px;}}</style> <script type="text/javascript">jQuery(document).ready(function (){jQuery(".ctu-ulimate-style-108 li:first").addClass("active"); jQuery(".ctu-ultimate-style-heading-108:first").addClass("active"); jQuery(".ctu-ulitate-style-108-tabs:first").show(); jQuery(".ctu-ulimate-style-108 li").click(function (){jQuery(".ctu-ulimate-style-108 li").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-108-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();}); jQuery(".ctu-ultimate-style-heading-108").click(function (){jQuery(".ctu-ultimate-style-heading-108").removeClass("active"); jQuery(this).toggleClass("active"); jQuery(".ctu-ulitate-style-108-tabs").slideUp(); var activeTab=jQuery(this).attr("ref"); jQuery(activeTab).slideDown();});}); </script>