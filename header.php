<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link rel='stylesheet' id='owl-carousel-css'  href='http://wdcommunications.com/wp-content/themes/Vela/css/owl.carousel.min.css' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()
?>/assets/css/vela.css"><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()
?>/assets/css/custom.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

        <header id="header" class="header-v7 dark sticky full logo-center mobile">
   <div class="header-wrapper">
      <div class="header-top">
         <div class="container">
            <div class="header-left">
            </div>
            <div class="header-right">
               <ul class="social-icons">
                  <li><a href="https://www.facebook.com/pages/Wd-Communications/111037652291989?fref=ts" target="_blank" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/wd-communications" target="_blank" title="" data-placement="bottom" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://twitter.com/wdcomm" target="_blank" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="header wdc-header">
         <div class="container">
            <div class="mobile-nav-icon" style="">
               <i class="fa fa-bars"></i>
            </div>
            <span id="logo">
            <a href="<?php echo home_url() ?>">
            <img class="normal-logo retina-off" src="http://wdcommunications.com/wp-content/uploads/2015/05/116x120.png" data-retina="http://wdcommunications.com/wp-content/uploads/2015/05/116x120.png" alt="Logo" style="height: 60px;">
            <img class="sticky-logo" src="http://wdcommunications.com/wp-content/uploads/2015/05/WD_menu_sticky.png" data-retina="http://wdcommunications.com/wp-content/uploads/2015/05/WD_menu_retina1.png" alt="Logo" style="height: 40px;">
            </a>
            </span>            
            <div class="nav-wrapper">
            </div>
          <!--   <nav id="nav" class="nav mobile-nav">
               <ul class="menu">
                  <li id="menu-item-3427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3427"><a href="http://wdcommunications.com/about/">About</a></li>
                  <li id="menu-item-3612" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3612">
                     <a href="http://wdcommunications.com/products_services/">Seminars</a>
                     <ul class="sub-menu">
                        <li id="menu-item-3807" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3807"><a href="/products_services/">ALL</a></li>
                        <li id="menu-item-3786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3786"><a href="/seminars/business-writing/">BUSINESS WRITING</a></li>
                        <li id="menu-item-3783" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3783"><a href="/seminars/coaching/">COACHING</a></li>
                        <li id="menu-item-3785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3785"><a href="/seminars/cross-cultural-communication/">CROSS-CULTURAL COMMUNICATION</a></li>
                        <li id="menu-item-3782" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3782"><a href="/seminars/interpersonal-communication-skills/">INTERPERSONAL COMMUNICATION SKILLS</a></li>
                        <li id="menu-item-3788" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3788"><a href="/seminars/performance-management/">PERFORMANCE MANAGEMENT</a></li>
                        <li id="menu-item-3789" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3789"><a href="/seminars/presentation-skills/">PRESENTATION SKILLS</a></li>
                        <li id="menu-item-3787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3787"><a href="/seminars/sales-communication/">SALES COMMUNICATION</a></li>
                        <li id="menu-item-3792" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3792"><a href="/seminars/scientific-and-medical-writing/">SCIENTIFIC AND MEDICAL WRITING</a></li>
                        <li id="menu-item-3791" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3791"><a href="/seminars/technical-writing/">TECHNICAL WRITING</a></li>
                        <li id="menu-item-3784" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3784"><a href="/seminars/webinars/">WEBINARS</a></li>
                        <li id="menu-item-3790" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3790"><a href="/seminars/custom-seminars/">CUSTOM SEMINARS</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-3389" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3389"><a href="/news">News</a></li>
                  <li id="menu-item-3430" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3430"><a href="http://wdcommunications.com/connect/">Connect</a></li>
               </ul>
            </nav> -->
              <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'nav',
                    'container_id'    => 'nav',
                    'container_class' => 'nav mobile-nav',
                    'menu_id'         => false,
                    'menu_class'      => 'menu',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
         </div>
      </div>
   </div>
</header>


    <?php /* if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo get_bloginfo('name');
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
            </div>
        </div>
    <?php endif; */?>

                <?php endif; ?>
