    </main>
    <footer>
        <?php
        $args = array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'footer-menu',
            'after' => '<span class="separator"> | </span>',
        );

        wp_nav_menu($args);

        ?>
        <div class="contact-info">
            <p>Dirección hardcodeada por cambiar<br>
            Teléfono hardcodedado</p>
            <p>&copy; Todos los derechos reservados: <?php bloginfo('name'); ?>, <?php echo date('Y'); ?></p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>