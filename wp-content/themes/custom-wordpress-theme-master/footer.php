        <!-- <h3>This is coming from the footer</h3> -->
        <footer class="mt-5 py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php
                        wp_nav_menu( array(
                			'theme_location'    => 'footer_nav',
                            'menu_id' => 'footer-nav',
                		) );
                     ?>
                </div>
                <?php $footerText = get_theme_mod('footer_text_setting'); ?>
                <!-- If there is footer text then render this - if there is no text then dont show -->
                <?php if(strlen($footerText) > 0): ?>
                    <div class="row">
                        <div class="col text-center">
                            <p><?php echo get_theme_mod('footer_text_setting'); ?></p>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
