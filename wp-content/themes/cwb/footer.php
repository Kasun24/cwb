<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cwb
 */

?>
<div id="footer-wrapper">
	<div id="map-section"></div>

	<div class="contact-info">
		<a href="tel:<?php the_field('phone_number', 'option'); ?>"><span class="fa fa-phone"></span><?php the_field('phone_number', 'option'); ?></a>
		<p><span class="fa fa-map-marker"></span><?php the_field('address', 'option'); ?></p>
	</div><!--contact info end-->

	<div class="footer-text">
		<p>&copy; Craftwerk beers Ltd, Website by <a href="#" target="_blank">designfolk</a></p>
	</div><!--footer text end-->

</div><!--footer wrapper end-->

</div><!--main wrapper end-->

<!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/scripts/lightslider/src/js/lightslider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/scripts/ui.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/parallax.js-1.5.0/parallax.js"></script>
<script type="text/javascript">
	$('.parallax-window').parallax({
		imageSrc: '<?php echo get_template_directory_uri(); ?>/inc/images/paralax.jpg'
	});
</script>

</body>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>