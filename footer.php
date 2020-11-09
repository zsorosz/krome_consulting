</main>
        <footer class="footer">
            <section class="footer__nav">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-bar'
                    )
                );
                ?>
            </section>
            <!-- <section class="social">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter-square"></i>
            </section> -->
            <p class="copyright">&copy; L27 Consulting - 2020</p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>