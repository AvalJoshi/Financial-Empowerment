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
get_header();
?>
<!--
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
-->

<body <?php body_class(); ?>>
    
    
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
					<!--<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div>--><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu">
							<li class="current"><a href="#" data-href="#header"><div></div></a></li>
							<li><a href="#" data-href="#hwtoQui"><div>How To Qualify</div></a></li>
							<li><a href="#" data-href="#section-specs"><div>Be a Volunteer!</div></a></li>
							<li><a href="#" data-href="#fincEmp"><div>Financial Empowerment</div></a></li>
							<li><a href="#" data-href="#locations-area"><div>Locations</div></a></li>
				
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
    
    
    
    
    
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'financial_empowerment' ); ?></a>



	<header id="masthead" class="site-header">

<div class="main_nav">
	<div id="logo_mian">

	<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$financial_empowerment_description = get_bloginfo( 'description', 'display' );
			if ( $financial_empowerment_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $financial_empowerment_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


	</div>

	<div id="menu_main">

	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'financial_empowerment' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
		
			</div>


			
<div id="durham_tax">

<h1>Durham Tax <span>Hub</span></h1>
<p>It's never too late to file your taxes! Tax filing can boost your income, and we can show you how.</p>

<p>Enter your yearly income below to see if you are eligible for free tax filing</p>


<input type="text" class="textbox" placeholder="Income">

<button class="button"><span>Am I eligible?</span></button>

<div class="arrow_main">
<div class="arrow bounce">
  <a class="fa fa-chevron-down fa-2x" href="#"></a>
</div>


</div>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
