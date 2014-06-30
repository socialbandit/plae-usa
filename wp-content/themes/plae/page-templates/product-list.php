<?php
/**
 * Template Name: List Product
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- Vision Mission Start -->
<section class="container-fluid">
<div class="row">

<br class="clear"><br class="clear"><br class="clear"><br class="clear"><br class="clear"><br>
<br>

<div class="col-sm-8 col-md-6 img_outer_list" style="height:336px; padding:60px 60px;background-color:#58585B; color:#fff;">
	<div class="clearfix grpelem" id="u183"><!-- column -->
      <div class="clearfix colelem" id="pu193"><!-- group -->
       <div align="center" class="center-block" style="margin-top: 0px; width:100%; border-bottom:1px solid #FFFFFF;">&nbsp;</div>
       <img src="<?php echo get_template_directory_uri(); ?>/images/icon-p.png" style="width: 80px;position: relative;top: -31px;background-color: #58585B;padding: 0 10px;" alt="" class="center-block">
      </div>
      <div class="clearfix colelem" id="u184-4"><!-- content -->
       <p style="text-align:center; font-family:pt-sans-narrow, sans-serif;">GOOD ENOUGH IS NEVER ENOUGH. WE BLOW PAST THE STATUS QUO TO ENGINEER FLOORING FOR SPECIFIC APPLICATIONS. OUR ENERGY DRIVES US AND WE PERSEVERE WHEN CHALLENGED-JUST LIKE THE ATHLETES WHO USE OUR PRODUCTS.</p>
      </div>
     </div>
</div>
<?php
	query_posts( array('post_type' => 'product') );
	while ( have_posts() ) : the_post();
			// Include the page content template.
		get_template_part( 'content', 'product' );
	endwhile;
?>
		
<br class="clear"><br>
<br>

</div>
</section>
<!-- Vision Mission End-->


<?php 
get_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">