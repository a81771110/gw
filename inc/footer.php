    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row" style="text-align:center;">
                <div class="col-lg-3 col-sm-3">
                    <address>
                        <p>�����к�����������·11�������ڳ�����C2��1905A</p>
                        <p>�����ţ���ICP��15026050��</p>
                    </address>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/hover-dropdown.js"></script>
    <script defer src="../js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>

    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/link-hover.js"></script>

    <script src="../assets/fancybox/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="../assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="../assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--common script for all pages-->
    <script src="../js/common-scripts.js"></script>

    <script src="../js/revulation-slide.js"></script>
<script src="../js/nav.js"></script>

  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>

  </body>
</html>
