<?php
/**
 * Template Name: Frontpage
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<!-- Banner Start -->
<?php
	$background_image = simple_fields_value('innovative_background_image');
	$innovative_content = simple_fields_value('innovative_content');
	
	$mission_image = simple_fields_value('mission_image');
	$mission_content = simple_fields_value('mission_content');
	
	$pioneer_content = simple_fields_value('pioneer_content');
	$good_enough_content = simple_fields_value('good_enough_content');
	$video = simple_fields_value('video_url');
?>
<div class="container-fluid">
  <section class="row">
    <div class="banner"> <img src="<?php echo $background_image['url']; ?>" alt="">
      <div class="banner_content hidden-xxs">
        <div class="col-sm-12">
          <div class=" center-block">
		  	<?php echo $innovative_content; ?>		  	
			<img src="<?php echo get_template_directory_uri(); ?>/images/img-scroll.png" alt="" class="scroll_down  hidden-xxs" >
		  </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Banner End -->

<br class="clear">
<!-- Vision Mission Start -->
<section class="container-fluid">
  <div class="row">
    <div class="jumbotron"> <img src="<?php echo $mission_image['url']; ?>" alt="">
      <?php echo $mission_content; ?>
    </div>
  </div>
</section>
<!-- Vision Mission End-->

<!-- What We do Start -->
<section class="container-fluid">
  <div class="row">
    <h2 class="ttl_what_we_do">what we do</h2>
    <?php if( function_exists('cyclone_slider') ) cyclone_slider('homepage-slider'); ?>
  </div>
</section>
<!-- What We do End -->

<br class="clear">
<br>
<br>
<section class="container-fluid">
  <div class="col-sm-3 we_are_outer"> <span>WE ARE</span>
    <h3>PIONEERS OF CHANGE.</h3>
    <p><?php echo $pioneer_content; ?></p>
  </div>
  <div class="col-sm-6 video_outer">
  	<embed style="max-width:100%;" width="630" height="354"
		src="<?php echo $video; ?>"
		type="application/x-shockwave-flash">
	</embed>
  <a href="<?php echo $video; ?>" target="_blank" class="link">Watch our plae video</a> </div>
  <div class="col-sm-3 good_outer"> <span>GOOD ENOUGH</span>
    <h3><span>IS</span> NEVER ENOUGH.</h3>
    <p><?php echo $good_enough_content; ?></p>
  </div>
</section>
<br class="clear">
<br>
<section class="container-fluid who_we">
  <div class="row">
    <h2><span>who we plae with</span></h2>
    <div class="col-sm-12 prod_box_outer center-block">
      <div class="prod_box"></div>
      <div class="prod_box"></div>
      <div class="prod_box"></div>
      <div class="prod_box"></div>
      <div class="prod_box hidden-xs"></div>
      <div class="prod_box hidden-xs"></div>
      <div class="prod_box hidden-xs"></div>
      <div class="prod_box hidden-xs"></div>
      <div class="prod_box hidden-xs"></div>
      <div class="prod_box hidden-xs"></div>
    </div>
    <br class="clear">
    <br>
    <br>
    <br>
    <br>
  </div>
</section>
<!-- Contact section Start -->
<section class="container-fluid">
  <div class="row">
    <div class="contact_bg">
      <div class="contact_outer">
        <h1><span>CONTACT</span></h1>
        <div class="col-sm-6">
          <div class="cont_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-location.png" alt=""><?php echo do_shortcode('[sc:location]'); ?></div>
          <div class="cont_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.png" alt=""><a href="mailto:<?php echo do_shortcode('[sc:email]'); ?>"><?php echo do_shortcode('[sc:email]'); ?></a></div>
          <div class="cont_detail"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-call.png" alt=""><?php echo do_shortcode('[sc:call]'); ?></div>
        </div>
		
		<div class="col-sm-6">
			<div class="seperator"></div>
			<div class="cont_form text-center"> Request More Information
				<?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]'); ?>
			</div>
			
		</div>
		
      </div>
    </div>
  </div>
</section>



<?php
get_footer();
?>