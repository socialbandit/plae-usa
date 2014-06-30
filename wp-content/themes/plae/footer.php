<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<br class="clear">
<!-- Footer Start -->
<section class="container-fluid">
  <div class="row footer">
    <div class="col-sm-6 footer_link"> <a href="<?php echo ROOT_PATH; ?>contact-us">CONTACT</a> <a href="#">DOWNLOADS</a>
	<a href="<?php echo do_shortcode('[sc:twitterurl]'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.png" alt=""></a> <a href="<?php echo do_shortcode('[sc:fburl]'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-fb.png" alt=""></a> </div>
    <div class="col-sm-6"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-p.png" alt=""> <span class="copy_text">&copy; <?php echo date('Y'); ?> PLAE USA, INC. All Rights Reserved</span> </div>
  </div>
</section>
<!-- Footer End -->

	<?php //wp_footer(); ?>
</body>
</html>