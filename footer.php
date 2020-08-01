<?php $tdu = get_template_directory_uri(); ?>

</main>
<footer>



    <div class="container">
        <div class="column_container">
            <div class="column" id="address_column">
                <p>&copy; <?php echo date('Y'); ?> Squadrata sàrl - Quai du Seujet 34 - 1201 Genève</p>

            </div>
            <div class="column" id="email_column">
                <p><a href="mailto:info@squadrata.com">info@squadrata.com</a></p>
            </div>
            <div class="column" id="phone_column">
                <p>t : +41 22 732 56 23 - f : +41 22 732 56 24 </p>
            </div>

        </div>
    </div>
</footer>


<?php if (showFadeInScreen()) : ?>
    </div>
    <!--END OF FADE IN -->
    <div id="loading_screen">
        <p>Squadrata</p>
    </div>
<?php endif; ?>


<?php wp_footer(); ?>


</body>

</html>