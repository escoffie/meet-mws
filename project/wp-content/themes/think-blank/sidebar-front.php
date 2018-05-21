<aside id="sidebar-front" role="complementary">
    <?php if ( is_active_sidebar( 'front-widget-area' ) ) : ?>
    <div id="front" class="widget-area">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'front-widget-area' ); ?>
        </ul>
    </div>
    <?php endif; ?>
</aside>