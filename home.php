<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php 
if (is_home() && get_option('page_for_posts') ) {
    $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
    $featured_image = $img[0];
}
 ?>

<div class="title-wrapper background-cover with-overlay full">
        <div class="bg-image" style="background-image: url(<?php echo $featured_image ?> )"></div>
                <div class="section-overlay" style="background-color:#00305c;">
    </div>
        <div class="container">
        <div class="title">
           <h1><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
        </div>
    </div>
    </div>

    <div class="container main-content no-sidebar">
    	<div class="row">
    		<div class="main">
    			<div class="page-detail content">
    				<div class="page-detail-inner">
    					<div class="section">
    						<div class="blog-posts medium scrollmore" data-animation="fadeInDown">
    								<div class="item-wrapper">
			<ul class="view row list-style-none">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

?>
</ul>
</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
?>	

<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



<?php
get_footer();
