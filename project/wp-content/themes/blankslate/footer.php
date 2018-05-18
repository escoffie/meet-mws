        <div class="clear"></div>
    </div><!--/#container -->
    <footer id="footer" role="contentinfo">
        <nav id="menu-3" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'menu-1' ) ); ?>
        </nav>
        <div id="copyright">
            <?php echo sprintf( __( '%1$s %2$s %3$s. Todos los derechos reservados.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
        </div>
    </footer>
    </div><!--/#wrapper -->
    <?php wp_footer(); ?>
</body>
</html>