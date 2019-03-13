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


	</div><!-- #content -->
</div><!-- #page -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

<?php
 
//// Advanced Custom Fiels social links
$twitter_username       = get_field('twitter');
$instagram_username     = get_field('instagram');
$facebook_username      = get_field('facebook');



?>



</body>
</html>
