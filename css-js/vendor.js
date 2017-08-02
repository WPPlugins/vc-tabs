jQuery(document).ready(function () {
    jQuery('.ctu-vendor-color').each(function () {
        jQuery(this).minicolors({
            control: jQuery(this).attr('data-control') || 'hue',
            defaultValue: jQuery(this).attr('data-defaultValue') || '',
            format: jQuery(this).attr('data-format') || 'hex',
            keywords: jQuery(this).attr('data-keywords') || '',
            inline: jQuery(this).attr('data-inline') === 'true',
            letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
            opacity: jQuery(this).attr('data-opacity'),
            position: jQuery(this).attr('data-position') || 'bottom left',
            swatches: jQuery(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
            change: function (value, opacity) {
                if (!value)
                    return;
                if (opacity)
                    value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    jQuery('#ctu-admin-model-item-data-button').on('click', function () {
        jQuery("#cau-title").val(null);
        jQuery("#cau-icon").val(null);
        jQuery("#ctu-details").val(null);
        jQuery("#item-id").val(null);
    });
    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery(".ctu-draggable").draggable({
        handle: ".modal-header"
    });
});