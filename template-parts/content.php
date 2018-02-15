<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
	<?php 
   		if ( !is_single() ) :
			?> 
<li class="item clear"><?php
else: 
	 ?> 


	 <div class="blog-detail content">
	 	<div class="blog-detail-inner">
	 	<?php
        endif;
   		 ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   	<div class="post-header">
   		<?php 
   		if ( !is_single() ) :
			?> 
			 <div class="post-date">
	            <span class="date"><?php the_date('M d, Y');?></span>
	         </div>
			<?php
        endif;
   		 ?>
     
         <div class="image-wrapper">
            <a href="<?php echo get_permalink() ?>">
            	<?php the_post_thumbnail(); ?>
            </a>
         </div>
      </div>

	<div class="post-detail">
	   <h3 class="post-title"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
	   <div class="post-meta">
	      <span class="post-datetime">
	      	<?php  if ( is_single() ) :
				the_date('M d, Y');
       		 endif;?> 
	      </span>
	      <div class="meta-right">
	         <div class="share-icons navbar-right">
	            <a href="#"><i class="fa fa-share-alt"></i></a>
	            <ul class="dropdown-menu">
	               <li>
	                  <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink())?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
	               </li>
	               <li>
	                  <a href="https://twitter.com/intent/tweet?source=webclient&amp;url=<?php echo urlencode(get_permalink())?>" target="_blank"><i class="fa fa-twitter"></i>Twitter</a>
	               </li>
	               <li>
	                  <a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink())?>" target="_blank"><i class="fa fa-google-plus"></i>Google+</a>
	               </li>
	            </ul>
	         </div>
	      </div>
	   </div>
	   <div class="post-summary">
	      <p>
	      	<?php
        if ( is_single() ) :
			the_content();
        else :
           the_excerpt();
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	      </p>
	   </div>
	   <p class="post-more"><a class="ghost-button" href="<?php echo get_permalink() ?>">Read More</a></p>
	</div>


<?php /*
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
		<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
*/?>

</article><!-- #post-## -->
<?php 
   		if ( !is_single() ) :
			?> 
</li><?php
	else: 
		?>
	</div>
</div>
		<?php
        endif;
   		 ?>




