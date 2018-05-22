<?php get_header(); ?>

	<?php while(have_posts()): the_post(); ?>
	
	<?php
	if ( kdmfi_get_featured_image_src( 'hero-image', 'full' ) )
		$the_hero_image = kdmfi_get_featured_image_src( 'hero-image', 'full' );
	else if (get_the_post_thumbnail_url())
        $the_hero_image = get_the_post_thumbnail_url();
    else
        $the_hero_image = get_template_directory_uri() . '/img/hero-default.jpg';
	?>

    <div class="hero" style="background-image:url(<?php echo $the_hero_image; ?>);">
        <div class="hero-content">
            <div class="hero-text">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>

    <div class="main container">
        <main class="text-center page-content">

            <?php the_content(); ?>

        </main>
    </div>

    <?php endwhile; ?>

<?php get_footer();