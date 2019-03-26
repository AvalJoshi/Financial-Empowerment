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



<section id="content">

    <div class="content-wrap">



        <div class="container clearfix">


            <div id="hwtoQui" class="heading-block title-center page-section">


                <?php $section_one_heading_main = get_field('section_one_heading');?>
                <h2><?php echo $section_one_heading_main;?></h2>

            </div>

            <div class="col_one_third nobottommargin">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">

                    <?php $header_eligible =  get_field('am_i_eligible');?>

                    <h4><?php echo $header_eligible;?></h4>

                </div>
                <?php $eligible_desc =  get_field('am_i_eligible_desc');?>
                <p><?php echo $eligible_desc;?> </p>

                <?php $link_eligible =  get_field('eligible_link');?>

                <p><a class="button" href="<?php echo $eligible_desc;?>" role="button">View details </a></p>

            </div>

            <div class="col_one_third nobottommargin">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <?php $header_receipts =  get_field('receipts');?>
                    <h4><?php echo $header_receipts;?></h4>
                </div>

                <?php $desc_receipts =  get_field('receipts_desc');?>
                <p>
                    <?php echo $desc_receipts;?> </p>

                <?php $link_receipts =  get_field('receipts_link');?>
                <p><a class="button" href="<?php echo $link_receipts?>" role="button">View details </a></p>

            </div>

            <div class="col_one_third nobottommargin col_last">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <?php $header_information_slips =  get_field('information_slips');?>
                    <h4><?php echo $header_information_slips;?></h4>
                </div>
                <?php $information_desc =  get_field('information_slips_desc');?>
                <p>
                    <?php echo $information_desc;?> </p>


                <?php $link_information =  get_field('information_link');?>
                <p><a class="button" href="<?php echo $link_information?>" role="button">View details </a></p>

            </div>

            <div class="clear"></div>

        </div>


        <div class="section">

            <div id="section-specs" class="heading-block title-center page-section">
                <?php $section_two_main =  get_field('section_two_main_heading');?>
                <h2><?php echo $section_two_main?></h2>

            </div>

            <div class="row bottommargin-lg align-items-stretch">

                <div class="col-lg-4 dark col-padding ohidden space_padding" style="background-color: #1abc9c;">
                    <div>
                        <?php $section_two_main =  get_field('section_two_main_heading');?>
                        <h3 class="uppercase" style="font-weight: 600;"><?php echo $section_two_main?></h3>

                        <?php $volunteer_desc =  get_field('volunteer_left_desc');?>
                        <p style="line-height: 1.8;"><?php echo $volunteer_desc?></p>

                        <?php $volunteer_left_read_more =  get_field('volunteer_left_read_more_link');?>
                        <a href="<?php echo $volunteer_left_read_more?>" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>




                <div class="col-lg-4 dark col-padding ohidden " style="background-color: #34495e;">
                    <div>

                        <?php $volunteer_center_head =  get_field('volunteer_center_heading');?>
                        <h3 class="uppercase" style="font-weight: 600; text-align: center;"><?php echo $volunteer_center_head?></h3>

                        <?php $volunteer_video_sec =  get_field('volunteer_video');?>
                        <?php echo $volunteer_video_sec?>

                        <p style="line-height: 1.8;"></p>
                    </div>
                </div>




                <div class="col-lg-4 dark col-padding ohidden space_padding_right" style="background-color: #e74c3c;">
                    <div>
                        <?php $volunteer_right_head =  get_field('volunteer_right_heading');?>
                        <h3 class="uppercase" style="font-weight: 600;"><?php echo $volunteer_right_head?></h3>

                        <?php $volunteer_rgt_desc =  get_field('volunteer_right_desc');?>
                        <p style="line-height: 1.8;"><?php echo $volunteer_rgt_desc?></p>

                        <?php $volunteer_right_read_more =  get_field('volunteer_right_read_more_link');?>
                        <a href="<?php echo $volunteer_right_read_more?>" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>

                <div class="clear"></div>

            </div>


        </div>




        <div id="locations-area" class="heading-block title-center page-section">
            <h2>Locations</h2>

        </div>
        <section id="section-contact" class="page-section full-screen section nopadding nomargin noborder ohidden">

            <div class="vertical-middle">
                <div class="container clearfix">

                    <!-- Contact Form Overlay
							============================================= -->
                    <div id="contact-form-overlay-mini" class="clearfix">

                        <div class="fancy-title title-dotted-border">
                            <h3>Send us an Email</h3>
                        </div>

                        <!-- Contact Form
								============================================= -->
                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                <div class="col_full">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col_full">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col_full hidden">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>

                        </div>

                    </div><!-- Contact Form Overlay End -->

                </div>
            </div>

            <!-- Google Map
					============================================= -->
            <section id="google-map" class="gmap full-screen">
                <iframe width="1225" height="599" id="gmap_canvas" src="https://maps.google.com/maps?q=durham%20college&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </section>

        </section>



        <div class="section-sec">

            <div class="container clearfix">

                <div id="fincEmp" class="heading-block title-center page-section">
                    <?php $financial_empowerment_head =  get_field('financial_empowerment_heading');?>

                    <h2><?php echo $financial_empowerment_head?></h2>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <?php $financial_literacy_coaching_head =  get_field('financial_literacy_coaching_heading');?>
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $financial_literacy_coaching_head?> </a>

                                    <?php $financial_empowerment_two =  get_field('financial_empowerment_head_two');?>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $financial_empowerment_two?></a>

                                    <?php $financial_empowerment_third =  get_field('financial_empowerment_head_third');?>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><?php echo $financial_empowerment_third?></a>

                                    <?php $financial_empowerment_four =  get_field('financial_empowerment_head_four');?>
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><?php echo $financial_empowerment_four?></a>

                                    <?php $financial_empowerment_five =  get_field('financial_empowerment_head_five');?>
                                    <a class="nav-item nav-link" id="nav-consumer-tab" data-toggle="tab" href="#nav-consumer" role="tab" aria-controls="nav-consumer" aria-selected="false"><?php echo $financial_empowerment_five?></a>
                                </div>


                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <?php $financial_empowerment_dsc_one =  get_field('financial_empowerment_desc_one');?>
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <?php echo $financial_empowerment_dsc_one?>
                                </div>

                                <?php $financial_empowerment_dsc_two =  get_field('financial_empowerment_desc_two');?>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <?php echo $financial_empowerment_dsc_two?>
                                </div>

                                <?php $financial_empowerment_dsc_three =  get_field('financial_empowerment_desc_three');?>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <?php echo $financial_empowerment_dsc_three?>
                                </div>

                                <?php $financial_empowerment_dsc_four =  get_field('financial_empowerment_desc_four');?>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <?php echo $financial_empowerment_dsc_four?>
                                </div>

                                <?php $financial_empowerment_dsc_five =  get_field('financial_empowerment_desc_five');?>
                                <div class="tab-pane fade" id="nav-consumer" role="tabpanel" aria-labelledby="nav-consumer-tab">
                                    <?php echo $financial_empowerment_dsc_five?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>



        </div>





        <div class="section topmargin-sm nobottommargin">

            <div class="container clearfix">

                <div class="heading-block center">
                    <h3>Testimonials</h3>
                    <span>Check out some of our Client Reviews</span>
                </div>

                <ul class="testimonials-grid grid-3 clearfix nobottommargin">
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                <div class="testi-meta">
                                    John Doe
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/7.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
                                <div class="testi-meta">
                                    Mary Jane
                                    <span>Google Inc.</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                <div class="testi-meta">
                                    Steve Jobs
                                    <span>Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/4.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                <div class="testi-meta">
                                    Jamie Morrison
                                    <span>Adobe Inc.</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/8.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Porro dolorem saepe reiciendis nihil minus neque. Ducimus rem necessitatibus repellat laborum nemo quod.</p>
                                <div class="testi-meta">
                                    Cyan Ta'eed
                                    <span>Tutsplus</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>






<<<<<<< Updated upstream
=======
				<div class="volunteerVideo">
<<<<<<< Updated upstream

				<?php $video_volunteer =  get_field('video');?>

				<?php echo $video_volunteer; ?>	

=======
				<?php $video_volunteer =  get_field('video');?>
				<?php echo $video_volunteer; ?>	
>>>>>>> Stashed changes
				

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


>>>>>>> Stashed changes

<?php

get_sidebar();

get_footer();