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
            <p class="copyright">&copy; L27 Consulting - 2020</p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>