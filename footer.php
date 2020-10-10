</main>
        <footer>
            <section>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-bar'
                    )
                );
                ?>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>