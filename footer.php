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
        <?php $clients_img1 = get_field('clients');
        //clients image-carousel
        ?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img1;?>" alt="Clients"></a></div>
        
        
        
        <?php $clients_img2 = get_field('clients_image_2');
        //clients image-carousel?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img2;?>" alt="Clients"></a></div>
        
        
        <?php $clients_img3 = get_field('clients_image_3');
        //clients image-carousel
        ?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img3;?>" alt="Clients"></a></div>
        
        
        
        <?php $clients_img4 = get_field('clients_image_4');
        //clients image-carousel
        ?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img4;
            //clients image-carousel
            ?>" alt="Clients"></a></div>
        
        
        
        <?php $clients_img5 = get_field('clients_image_5');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img5;
            //clients image-carousel
            ?>" alt="Clients"></a></div>
        
        
        <?php $clients_img6 = get_field('clients_image_6');
        //clients image-carousel
        ?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img6;        
            //clients image-carousel?>" alt="Clients"></a></div>
        
        
        <?php $clients_img7 = get_field('clients_image_7');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img7;
            //clients image-carousel
            ?>" alt="Clients"></a></div>
        
        
        <?php $clients_img8 = get_field('clients_image_8');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img8;
            //clients image-carousel
            ?>" alt="Clients"></a></div>
        
        
        <?php $clients_img9 = get_field('clients_image_9');
        //clients image-carousel
        ?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img9;?>" alt="Clients"></a></div>
        
        
        
        <?php $clients_img10 = get_field('clients_image_10');?>
        <div class="oc-item"><a href=""><img src="<?php echo $clients_img10;
            //clients image-carousel
            ?>" alt="Clients"></a></div>

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

            </div>
            <div class="fright clearfix">
                <a href="<?php  echo get_theme_mod( 'financial_empowerment_facebook_url' ); 
                         //soical icons
                         ?>" class="social-icon si-small si-borderless nobottommargin si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="<?php  get_theme_mod( 'financial_empowerment_twitter_url' ); 
                         //soical icons
                         ?>" class="social-icon si-small si-borderless nobottommargin si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>



                <a href="<?php  get_theme_mod( 'financial_empowerment_instagram_url' ); ?>" class="social-icon si-small si-borderless nobottommargin si-linkedin">
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