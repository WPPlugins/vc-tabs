<?php
if (!defined('ABSPATH'))
    exit;

function tabs_OXI_VC_Pro_Promote() {
    ?>
    <div class="ctu-admin-wrapper-promote">
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
            <h1>Responsive  <span>Tabs with Accordions</span></h1>
            <p>If you have any difficulties in using the options, please follow the link to </br> <a href="https://www.oxilab.org/doc/tabs-with-vc-extension">Documentation</a> </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <p><a target="_blank" href="https://www.oxilab.org/downloads/tabs-with-vc-extension/" class="ctu-admin-wrapper-promote-botton"><i class="fa fa-cart-plus" aria-hidden="true"></i> Upgrade NOW </a> </br> Just click on "Upgrade NOW" to get Pro Version only $9.99.</p>
        </div>
        <div class="col-lg-3 col-md-3  hidden-sm hidden-xs ctu-admin-wrapper-promote-rate">
            <p> <i class="fa fa-heart" aria-hidden="true"></i>  <a  target="_blank" href="https://wordpress.org/support/plugin/vc-tabs/reviews/">Rate Us</a></p>
            <p> <i class="fa fa-life-ring" aria-hidden="true"></i>  <a  target="_blank" href="https://wordpress.org/support/plugin/vc-tabs/">Support Ticket</a></p>
            <p> <i class="fa fa-envelope" aria-hidden="true"></i>  <a  target="_blank" href="https://www.oxilab.org/contact-us/">Contact Oxilab</a></p>
        </div>
    </div>
    <?php
}

function tabs_OXI_VC_Pro_admin_head($data) {
    ?>
    <div class="ctu-admin-style-left-head">
        <span>Custom Settings</span>
        <div class="ctu-admin-style-left-button">
            <button type="button" class="btn btn-success btn-lg" id="ctu-admin-model-item-data-button" data-toggle="modal" data-target="#ctu-admin-model-item-data">Add New Item</button>
        </div>
        <div class="ctu-admin-shortcode">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xm-12">
                <div class="ctu-admin-shortcode-head">
                    Shortcode for posts/pages/plugins
                </div>
                <div class="ctu-admin-shortcode-body">
                    Copy & paste the shortcode directly into any WordPress post or page.
                </div>
                <div class="ctu-admin-shortcode-code">
                    <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="[ctu_ultimate_oxi id=&quot;<?php echo $data; ?>&quot;]">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 hidden-xs">
                <div class="ctu-admin-shortcode-head">
                    Shortcode for templates/themes
                </div>
                <div class="ctu-admin-shortcode-body">
                    Copy & paste this code into a template file to include the slideshow within your theme.
                </div>
                <div class="ctu-admin-shortcode-code">
                    <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[ctu_ultimate_oxi  id=&quot;<?php echo $data; ?>&quot;]&#039;); ?&gt;">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                <div class="ctu-admin-shortcode-head">
                    Shortcode for Visual Composer
                </div>
                <div class="ctu-admin-shortcode-body">
                    Copy & paste this id into a visual composer into content tabs id.
                </div>
                <div class="ctu-admin-shortcode-code">
                    <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="<?php echo $data; ?>">
                </div>
            </div>
            <div class="col-lg-3 hidden-sm hidden-xs hidden-md">
                <div class="ctu-admin-shortcode-head">
                    If you have any difficulties in using the options
                </div>
                <div class="ctu-admin-shortcode-body">
                    See our Video tutorials on youtube Video  <a href="https://youtu.be/-42zCmS2p6c" target="_blank">Video Link</a>.</br>
                    See our user manual's on Oxilab Development  <a href="https://www.oxilab.org" target="_blank">User Manual</a>.
                </div>
            </div>

        </div>
    </div>
    <?php
}

if ($_GET['styleid'] == '') {
    ctu_vendor_js_css('new');
    include content_tabs_ultimate_plugin_url . 'admin/style-new.php';
}
if ($_GET['styleid'] != '' && is_numeric($_GET['styleid'])) {
    $id = $_GET['styleid'];
    global $wpdb;
    $table_name = $wpdb->prefix . 'content_tabs_ultimate_style';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
    include content_tabs_ultimate_plugin_url . 'admin/' . $styledata['style_name'] . '.php';
    ctu_vendor_js_css('style');
}

function ctu_vendor_js_css($data) {
    wp_enqueue_style('ctu-vendor-style', plugins_url('css-js/style.css', __FILE__));
    wp_enqueue_script('ctu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
    wp_enqueue_style('ctu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
    wp_enqueue_script('jQuery');
    if ($data == 'style') {
        wp_enqueue_script('ctu-vendor-minicolors-js', plugins_url('css-js/jquery.minicolors.min.js', __FILE__));
        wp_enqueue_style('ctu-vendor-minicolors', plugins_url('css-js/jquery.minicolors.css', __FILE__));
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-widget');
        wp_enqueue_script('jquery-ui-mouse');
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_script('jquery-ui-draggable');
        wp_enqueue_script('ctu-vendor-jss', plugins_url('css-js/vendor.js', __FILE__));
        wp_enqueue_script('ctu-vendor-font-select', plugins_url('css-js/font-select.js', __FILE__));
    }
}
