jQuery(document).ready(function($) {
    jQuery('#colorpicker').hide();
    jQuery('#colorpicker').farbtastic('#color');

    jQuery('#color').click(function() {
        jQuery('#colorpicker').fadeIn();
    });

    jQuery(document).mousedown(function() {
        jQuery('#colorpicker').each(function() {
            var display = jQuery(this).css('display');
            if ( display == 'block' )
               jQuery(this).fadeOut();
        });
    });
});