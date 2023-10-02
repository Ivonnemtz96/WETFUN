<!-- JS VENDOR -->
<script src="/js/vendor/jquery.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/vendor/owl.carousel.js"></script>
<script src="/js/vendor/jquery.magnific-popup.min.js"></script>

<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

<!-- SENDMAIL -->
<script src="/js/vendor/validator.min.js"></script>
<script src="/js/vendor/form-scripts.js"></script>

<script src="/js/script.js"></script>
<!-- icons -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>

<!-- pop up -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/jquery.magnific-popup.min.js">
</script>
<script>
$('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    mainClass: 'mfp-fade'
});
$(document).on('click', '.popup-modal-dismiss', function(e) {
    e.preventDefault();
    $.magnificPopup.close();
});
</script>

<!-- Pop up de cerrado -->
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