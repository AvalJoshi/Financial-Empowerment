<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package financial_improvement
 */

?>

<div class="container clearfix">

    <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">
        <?php $clients_img1 = get_field('clients');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img1;?>" alt="Clients"></a></div>
        <?php $clients_img2 = get_field('clients_image_2');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img1;?>" alt="Clients"></a></div>
        <?php $clients_img3 = get_field('clients_image_3');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img3;?>" alt="Clients"></a></div>
        <?php $clients_img4 = get_field('clients_image_4');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img4;?>" alt="Clients"></a></div>
        <?php $clients_img5 = get_field('clients_image_5');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img5;?>" alt="Clients"></a></div>
        <?php $clients_img6 = get_field('clients_image_6');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img6;?>" alt="Clients"></a></div>
        <?php $clients_img7 = get_field('clients_image_7');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img7;?>" alt="Clients"></a></div>
        <?php $clients_img8 = get_field('clients_image_8');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img8;?>" alt="Clients"></a></div>
        <?php $clients_img9 = get_field('clients_image_9');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img9;?>" alt="Clients"></a></div>
        <?php $clients_img10 = get_field('clients_image_10');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img10;?>" alt="Clients"></a></div>

    </div>

</div>
 <?php $finder_url = get_field('finder_link');?>
<a href="<?php echo $finder_url;?>" class="button button-full center tright footer-stick">
    <div class="container clearfix">
       
        Government of Canada Benefits <strong> Finder</strong> <i class="icon-caret-right" style="top:4px;"></i>
    </div>
</a>

</div>

</section><!-- #content end -->
<!-- Footer
		============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
			============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
 Copyrights &copy; 2019 
                <a href="<?php echo esc_url( __( '#', 'financialempowerment' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'financialempowerment' ), 'Finacial Emp Inc.' );
				?>
			</a>
			
                
            
            </div>

            <div class="col_half col_last tright">
                <!--<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">How To Qualify</a>/<a href="#">Be a Volunteer!</a>/<a href="#"></a>/<a href="#">Financial Empowerment</a>/<a href="#">Locations</a>
						</div>-->
                <div class="fright clearfix">
                    <a href="<?php echo get_theme_mod( 'financial_empowerment_facebook_url' ); ?>" class="social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>



<?php wp_footer(); ?>

</body>

</html>