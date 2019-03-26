<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package financial_empowerment

 */



?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	

 <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>

</head>



<<<<<<< Updated upstream
=======
<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'financial_empowerment' ); ?></a>







	<header id="masthead" class="site-header">



<div class="main_nav">

	<div id="logo_mian">



	<div class="site-branding">
<<<<<<< Updated upstream

			<?php

=======
			 <?php
<<<<<<< HEAD
			if (has_custom_logo()){
			the_custom_logo();
			}else{
				echo'No Logo';
			}
=======
			if (has_custom_logo()){
			the_custom_logo();
			}else{
				echo'No Logo';
			}
>>>>>>> master
>>>>>>> Stashed changes
			the_custom_logo();

			if ( is_front_page() && is_home() ) :

				?>

				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php

			else :

				?>

				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
>>>>>>> Stashed changes



<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header page-section dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">

                        <?php
function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';?>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
					============================================= -->







                    <nav id="primary-menu">

                        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
            
			) );
			?>
                    </nav><!-- #site-navigation -->

                    <!--<ul class="one-page-menu">
                          
							<li class="current"><a href="#" data-href="#header"><div></div></a></li>
							<li><a href="#" data-href="#hwtoQui"><div></div></a></li>
							<li><a href="#" data-href="#section-specs"><div>Be a Volunteer!</div></a></li>
							<li><a href="#" data-href="#fincEmp"><div>Financial Empowerment</div></a></li>
							<li><a href="#" data-href="#locations-area"><div>Locations</div></a></li>
				
                            </ul>-->

                    <!-- #primary-menu end -->


                </div>

            </div>

        </header><!-- #header end -->

        <section id="slider" class="slider-element slider-parallax dark full-screen">

            <div class="slider-parallax-inner">

                <div class="container clearfix">

                    <div class="vertical-middle">

                        <div class="heading-block center nobottomborder">
                            <h1 data-animate="fadeInUp">Durham Tax <strong>Hub</strong></h1>

                            <?php $banner_text_main = get_field('banner_text');?>
                            <span data-animate="fadeInUp" data-delay="300">
                                <?php echo $banner_text_main;?>
                            </span>
                        </div>


                        <div class="subscribe-widget">
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="nobottommargin">
                                <div class="input-group input-group-lg divcenter" style="max-width:600px;">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                    </div>
                                    <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Example $30,000">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">Am I Eligible</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <a href="#" data-scrollto="#section-features" class="one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

                </div>

            </div>

        </section>




