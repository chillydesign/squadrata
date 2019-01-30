
<?php $tdu = get_template_directory_uri(); ?>

<footer>
  <div id="horse_div" style="background-image:url(<?php echo get_template_directory_uri();?>/img/cheval-pas.jpg);">
    <div style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; background: rgba(51, 51, 52, 0.5); z-index:1;"></div>
    <div class="container" style="z-index:2; position:relative" >
        <div class="footer_columns" >
            <div class="footer_column">

                <h4>Contact</h4>
                <p>
                  <strong>Garzetta Kernen Sàrl</strong><br>
                  <!-- Chemin du Môlan 4<br> -->1223 COLOGNY<br>
                  <strong>Téléphone :</strong> <a color="white; text-decoration:none; border-bottom:none" href="tel:+41 22 849 05 49">+41 22 849 05 49</a><br>
                  <strong>Email :</strong> <a href="mailto:contact@gkservice.ch" target="_blank">contact@gkservice.ch</a>
                </p>


            </div>
            <div class="footer_column">

                <h4>Nos services</h4>
                <p>
                  <a style="margin-left:-10px;padding-left:10px" class="social_icon" href="<?php echo get_home_url(); ?>/serrurerie-depannage-et-securite/">Dépannage Serrurerie</a> <br>
                  <a style="margin-left:-10px;padding-left:10px" class="social_icon" href="<?php echo get_home_url(); ?>/service/">Services</a>
                </p>


            </div>

            <div class="footer_column">

                <h4>Suivez-nous</h4>
                <p> <a  class="social_icon social_icon_facebook" href="https://www.facebook.com/garzettakernensarl/" target="_blank">Suivez-nous sur Facebook</a>  <br>
                  <a  class="social_icon social_icon_instagram" href="https://www.instagram.com/garzettakernensarl/" target="_blank">Suivez-nous sur Instagram</a>  <br>
                    <a  class="social_icon social_icon_linkedin" href="https://www.linkedin.com/company/garzetta-kernen-sarl/"  target="_blank">Suivez-nous sur LinkedIn</a> </p>


            </div>

            </div>


        </div>
    </div>
    <div id="copyright">
        <div class="container"><p>&copy; <?php echo date('Y'); ?> GK Service.  Website by <a href="https://webfactor.ch">Webfactor</a></p></div>
    </div>

</footer>


</main>



<?php wp_footer(); ?>
<script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyAxQfqRqtPLAW4BolFMCxTiv9y--R8CXdU&#038;ver=4.8.1'></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/min/scripts.bundle.js?v=<?php echo wf_version(); ?>"></script>
<script>
// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
// ga('send', 'pageview');
</script>

</body>
</html>
