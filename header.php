<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package financial_empowerment

 */



?>



<h4>

<?php echo get_theme_mod( 'financial_empowerment_facebook_url' ); ?>

</h4>



<h4>

<?php echo get_theme_mod( 'financial_empowerment_twitter_url' ); ?>

</h4>



<h4>

<?php echo get_theme_mod( 'financial_empowerment_instagram_url' ); ?>

</h4>







<?php wp_footer(); ?>



</body>

</html>

front-page.php 

<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *checking 

 * @package financial_empowerment

 */



get_header();

?>



<!-- <<<<<<< HEAD -->

    <div id="primary" class="content-area">

        <main id="main" class="site-main">



<!-- <<<<<<< HEAD -->



<div id="primary" class="content-area">

		<main id="main" class="site-main">

        

            



		<section id="howDoIqualify">

		<?php $header_howDoIqualigy =  get_field('home_page_header_text');?>

			<h2><?php echo $header_howDoIqualigy; ?></h2>



			<div class="qualifyDetails">

                

               <div class="container">

 

  <ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#home">Am I Eligible?</a></li>

    <li><a data-toggle="tab" href="#menu1">Receipts</a></li>

    <li><a data-toggle="tab" href="#menu2">Information Slips</a></li>



  </ul>



  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">

		<?php $h3_iAmeligible =  get_field('h3_eligible');?>

      <h3><?php echo $h3_iAmeligible; ?></h3>

		<?php $iAmeligible_desc =  get_field('eligible_desc');?>	

      <p><?php echo $iAmeligible_desc; ?></p>

    </div>

    <div id="menu1" class="tab-pane fade">

		<?php $h3_receipts =  get_field('h3_receipts');?>	

      <h3><?php echo $h3_receipts; ?></h3>

			<?php $receipts_desc =  get_field('receipts_desc');?>		

      <p><?php echo $receipts_desc; ?></p>

    </div>

    <div id="menu2" class="tab-pane fade">

		<?php $h3_information_Slips =  get_field('h3_information_Slips');?>

          <h3><?php echo $h3_information_Slips; ?></h3>

					<?php $information_slips_desc =  get_field('information_slips_desc');?>			

      <p><?php echo $information_slips_desc; ?></p>

    </div>

  </div>

</div>



		</div>

		</section>



		<section id="locations">

		<?php $locations_header =  get_field('locations_header');?>

			<h2><?php echo $locations_header; ?></h2>



			<div class="map">



			<div class="mapouter">

				<div class="gmap_canvas">

				<?php $location_area =  get_field('location_area');?>

				<?php echo $location_area; ?>

					<a href="https://www.jetzt-drucken-lassen.de"></a>

				</div>

				<style>.mapouter{text-align:right;height:739px;width:1225px;}.gmap_canvas {overflow:hidden;background:none!important;height:799px;width:1225px;}</style><a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank"></a>

			</div>



			</div> 	

		</section>



		<section id="beAvolunteer">

		<?php $header_volunteer =  get_field('be_a_volunteer_header');?>

			<h2><?php echo $header_volunteer; ?></h2>



			<div class="beVolunteer">

				<div class="howToBecomeAVolunteer">

				<?php $left_h3_volunteer =  get_field('h3_volunteer');?>

					<h3><?php echo $left_h3_volunteer; ?></h3>



					<?php $left_volunteer_desc =  get_field('volunteer_desc');?>

					<p>

					<?php echo $left_volunteer_desc; ?>

					</p>

				</div>	



				<div class="volunteerVideo">

				<?php $video_volunteer =  get_field('video');?>

				<?php echo $video_volunteer; ?>	

				

				</div>



				<div class="howTorunTaxClinic">

				<?php $right_tax_clinic =  get_field('h3_tax_clinic');?>

					<h3><?php echo $right_tax_clinic; ?></h3>



					<?php $right_tax_clinic_desc =  get_field('tax_clinic_desc');?>	

					<p>

					<?php echo $right_tax_clinic_desc; ?>

					</p>

				</div>

			</div>

		</section>



		<section id="financialEmpowerment">

			<h2> Financial Empowerment </h2>



			



			<div class="financialEmpowermentDetails">



				<h3>

<!-- >>>>>>> master

					Overview -->

				</h3>



				<p>

					Financial empowerment is an approach to poverty reduction that focuses

					troducing a set of interventions that together help low-income Canadians to

					grow their incomes, improve their credit scores, savings and debt levels, and

					build wealth through education, employment, entrepreneurship and im

					proved housing.

				</p>

				

				<p>



					Financial empowerment isn’t like most other poverty reduction approaches.

					It focuses on helping low-income people participate and feel included in

					fosters behaviours that are critical to their economic security and their abili

					ty to invest in their future.

				</p>







			</div>



		</section>



		<section id="testimonials" >

			<h2> Testimonials </h2>

			<div class="testimonialsDetails"></div>	

		</section>



		<section id="contact-us">

				<h2>Contact Us </h2>



				<div class="contactUs">

				<?php $contact_us =  get_field('contact_us');?>

				<?php echo $contact_us; ?>

				</div>

		</section>



		</main>

	</div>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">



<h1></h1>

		<?php

		while ( have_posts() ) :

			the_post();



			get_template_part( 'template-parts/content', 'page' );



			// If comments are open or we have at least one comment, load up the comment template.

			if ( comments_open() || get_comments_number() ) :

				comments_template();

			endif;



		endwhile; // End of the loop.

		?>



		</main><!-- #main -->

	</div><!-- #primary -->



<?php

get_sidebar();

get_footer();

header.php 

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

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

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

<!-- arrow link to go down -->

  <a class="fa fa-chevron-down fa-2x" href="#howDoIqualify"></a>

</div>





</div>

			</div>

	</header><!-- #masthead -->



	<div id="content" class="site-content">