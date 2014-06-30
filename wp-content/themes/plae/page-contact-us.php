<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- Contact section Start -->
<section class="container-fluid">
  <div class="row">
    <div class="contact_bg contact_us_bg" style="max-height:910px;">
      <div class="contact_outer">
        <div align="center" class="center-block" style="margin-top: 160px; width:48%; border-bottom:1px solid #FFFFFF;">&nbsp;</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/icon-p.png" style="width: 80px;position: relative;top: -31px;background-color: #000000;padding: 0 10px;" alt="" class="center-block">
        <div class="col-sm-9 col-md-7 col-lg-6 center-block" style="float:none;">
          <div class="contus_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-location.png" alt=""><?php echo do_shortcode('[sc:location]'); ?></div>
          <div class="contus_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.png" alt=""><a href="mailto:<?php echo do_shortcode('[sc:email]'); ?>"><?php echo do_shortcode('[sc:email]'); ?></a></div>
          <div class="contus_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-call.png" alt=""><?php echo do_shortcode('[sc:call]'); ?></div>
        </div>
				
      </div>
    </div>
  </div>
</section>
<!-- Contact section End-->

<?php
get_footer();
?>