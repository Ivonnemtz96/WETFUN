<!-- COMMON SCRIPTS -->
<script src="/js/common_scripts.js"></script>
<script src="/js/common_functions.js"></script>
<script src="/js/datepicker_inline.js"></script>
<script src="phpmailer/validate.js"></script>
<!-- SPECIFIC SCRIPTS -->
<script src="/js/isotope.min.js"></script>
<script>
    $(function() {
        "use strict";
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({
                itemSelector: '.item',
                layoutMode: 'masonry',
            });
        });
    });
</script>
<!-- icons -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>
<!-- Popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
<script>
jQuery(document).ready(function() {

    function openFancybox() {
        setTimeout(function() {
            jQuery('#popuplink').trigger('click');
        }, 500);
    };

    var visited = jQuery.cookie('visited');
    if (visited == 'yes') {
        // second page load, cookie active
    } else {
        openFancybox(); // first page load, launch fancybox
    }
    jQuery.cookie('visited', 'yes', {
        expires: 1 // the number of days cookie  will be effective
    });
    jQuery("#popuplink").fancybox({
        modal: true,
        maxWidth: 1000,
        overlay: {
            closeClick: true
        }
    });
});
</script>