<!-- main jQuery -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- fontawesome -->
<script src="assets/fontawesome/js/all.min.js"></script>
<!-- bx slider -->
<script src="assets/js/jquery.bxslider.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="assets/js/jquery-parallax.js"></script>
<!-- validate -->
<script src="assets/js/validate.js"></script>
<!-- mixit up -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="assets/js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- circle progress -->
<script src="assets/js/circle-progress.js"></script>
<!-- appear js -->
<script src="assets/js/jquery.appear.js"></script>
<!-- count to -->
<script src="assets/js/jquery.countTo.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzS7kYaXQy0aJGMMArSfa2dDYTyuOzYUc"></script>
<!-- gmap main script -->
<script src="assets/js/gmap.js"></script>
<!-- isotope script -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- jQuery ui js -->
<script src="assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- revolution scripts -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- thm custom script -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- For demo purposes – can be removed on production -->
<script src="assets/switchstylesheet/switchstylesheet.js"></script>

<script>
    $(document).ready(function () {
        $(".changecolor").switchstylesheet({ seperator: "color" });
        $(".show-theme-options").click(function () {
            $(this).parent().toggleClass("open");
            return false;
        });
    });

    $(window).bind("load", function () {
        $(".show-theme-options").delay(2000).trigger("click");
    });
</script>
<script>
    new WOW().init();
</script>