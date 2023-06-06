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
            $container.isotope({ itemSelector: '.item', layoutMode: 'masonry', });
        });
    });
</script>