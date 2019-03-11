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

<<<<<<< HEAD
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

<<<<<<< HEAD
=======

>>>>>>> master
            <section id="howDoIqualify">
                <h2> <?php the_field('home_page_header_text')?></h2>

                <div class="qualifyDetails">

                    <div class="container">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Am I Eligible!</a></li>
                            <li><a data-toggle="tab" href="#menu1">Receipts</a></li>
                            <li><a data-toggle="tab" href="#menu2">Information Slips</a></li>

                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3><?php the_field ( 'h3_eligible')?></h3>
                                <p>
                                    <?php the_field('eligible_desc') ?>
                                </p>
                            </div>
                            <div id="menu1 more" class="tab-pane fade">
                                <h3><?php the_field ( 'h3_receipts')?></h3>
                                <p>
                                    <?php the_field('receipts_desc') ?>
                                </p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3><?php the_field ( 'h3_nformation_Slips')?></h3>
                                <p>
                                    <?php the_field('information_slips_desc') ?>
                                </p>
                            </div>
                        </div>
                    </div>






                </div>
            </section>

            <section id="locations">
                <h2>  <?php the_field('locations_header')?></h2>

                <div class="map">

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <?php the_field('location_area')?>

                                <a href="https://www.jetzt-drucken-lassen.de"></a>
                        </div>
                        
                    </div>

                </div>
            </section>

            <section id="beAvolunteer">
                <h2> Be a Volunteer </h2>

                <div class="beVolunteer">
                    <div class="howToBecomeAVolunteer">
                        <h3>How to become a Volunteer!</h3>

                        <p>
                            It’s never too late to file your income tax return! By filing you may be eligible for many benefits! It’s never too late to file your income tax return! By filing you may be eligible for many benefits! It’s never too late to file your income tax return! By filing you may be eligible for many benefits! By filing you may be eligible for many benefits!
                        </p>
                    </div>

                    <div class="volunteerVideo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-RjHEhK6p1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="howTorunTaxClinic">
                        <h3>How to run a tax clinic</h3>

                        <p>
                            It’s never too late to file your income tax return! By filing you may be eligible for many benefits! It’s never too late to file your income tax return! By filing you may be eligible for many benefits! It’s never too late to file your income tax return! By filing you may be eligible for many benefits! By filing you may be eligible for many benefits!
                        </p>
                    </div>
                </div>
            </section>

            <section id="financialEmpowerment">
                <h2> Financial Empowerment </h2>



                <div class="financialEmpowermentDetails">

                    <h3>
=======
<div id="primary" class="content-area">
		<main id="main" class="site-main">
        
            

		<section id="howDoIqualify">
			<h2> <?php get_field('home_page_header_text')?></h2>

			<div class="qualifyDetails">
                
               <div class="container">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Am I Eligible?</a></li>
    <li><a data-toggle="tab" href="#menu1">Receipts</a></li>
    <li><a data-toggle="tab" href="#menu2">Information Slips</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3><?php get_field ( 'h3_eligible')?></h3>
      <p>	<?php get_field('eligible_desc') ?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3><?php get_field ( 'h3_receipts')?></h3>
      <p>	<?php get_field('receipts_desc') ?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
          <h3><?php get_field ( 'h3_nformation_Slips')?></h3>
      <p>	<?php get_field('information_slips_desc') ?></p>
    </div>
  </div>
</div> 
                
                
                
                
			

			</div>
		</section>

		<section id="locations">
			<h2>  <?php get_field('locations_header')?></h2>

			<div class="map">

			<div class="mapouter">
				<div class="gmap_canvas">
				<?php get_field('location_area')?>
					
					<a href="https://www.jetzt-drucken-lassen.de"></a>
				</div>
				<style>.mapouter{text-align:right;height:739px;width:1225px;}.gmap_canvas {overflow:hidden;background:none!important;height:799px;width:1225px;}</style><a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank"></a>
			</div>

			</div> 	
		</section>

		<section id="beAvolunteer">
			<h2> Be a Volunteer </h2>

			<div class="beVolunteer">
				<div class="howToBecomeAVolunteer">
					<h3>How to become a volunteer</h3>

					<!--<p>
					It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! By filing you may be eligible for many benefits!
					</p>-->
				</div>	

				<div class="volunteerVideo">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/-RjHEhK6p1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="howTorunTaxClinic">
					<h3>How to run a tax clinic</h3>

					<p>
					It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! It’s never too late to file your income tax return! By filing you may be eligible for
					many benefits! By filing you may be eligible for many benefits!
					</p>
				</div>
			</div>
		</section>

		<section id="financialEmpowerment">
			<h2> Financial Empowerment </h2>

			

			<div class="financialEmpowermentDetails">

				<h3>
>>>>>>> master
					Overview
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

		<section id="testimonials">
			<h2> Testimonials </h2>

			<div class="testimonialsDetails">

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
