<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */
get_header(); ?>

  <section id="primary" class="main-content">
    <main id="main" class="site-main" role="main">
      <div class="title-wrapper background-cover parallax with-overlay full">
        <div class="bg-image" style="background-color: rgb(255, 255, 255); background-image: url(&quot;http://wdcommunications.com/wp-content/uploads/2014/12/picture-043.jpg&quot;); transform: translate3d(0px, -31.1971%, 0px);"></div>
                <div class="section-overlay" style="background-color:#0a0808;"></div>
        <div class="container">
        <div class="title">
            <h1> <?php the_title() ?></h1>
        </div>
    </div>
    </div>
    <article class="reviewArticle m-singlePost">
      <div class="article-content">
        <div class="container">
          <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_format() );

          the_post_navigation();

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>
        </div>
      </div>  
    </article>
    

    </main><!-- #main -->
  </section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
