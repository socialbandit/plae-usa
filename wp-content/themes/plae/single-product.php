<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
?>
		<!-- Product Detil Start -->
		<section class="container-fluid">
		<div class="row prod_dtl" style="margin-top:75px;">
		<br class="clear"> 
		
		
		<h1 class="col-sm-3"><?php the_title(); ?></h1>
				
		<img id="prod_banner" src="<?php echo get_field('product_banner'); ?>" alt="" class="img_prod_dtl" >
		
		<div class="extra-info">
			<div>
				<div class="recycled"></div>
				<div class="country-region"></div>
			</div>
		</div>
		
		
		<div class="col-sm-5">
			<h2>Recommended Uses:</h2>
			<?php 
				$rec_custom_field_keys = $field_group_values = simple_fields_fieldgroup("recommended_uses");
				foreach($rec_custom_field_keys as $key => $val) {
			?>
				<span class="col-xs-6"><img src="<?php echo $val['rec_image']['url']; ?>" class="img_icon" alt=""><span class="text_reco"><?php echo $val['rec_name']; ?></span></span>
			<?php } ?>		
		</div>
		
		<br class="clear">
		
		<div class="col-sm-6 mrg_top_20">
		<h2>Color Options: <span id="option_title">902 Light Brown</span></h2>
		
		<div class="color_box">
			<?php 
				$col_custom_field_keys = $field_group_values = simple_fields_fieldgroup("color_option");
				foreach($col_custom_field_keys as $key => $val) {
			?>
				<a href="#" class="col-sm-2 col-xs-3" onclick="return setOptionVal('<?php echo $val['col_large_image']['url']; ?>', '<?php echo $val['col_name']; ?>')"><img src="<?php echo $val['col_thumb_image']['url']; ?>" alt=""></a>
			<?php } ?>
		</div>
		
		
		
		
		</div>
		
		
		
		
		
		<div id="img_outer" class="hidden-xs"></div>
		
		
		
		<br class="clear">
		<br>
		
		
		
		
		</div>
		
		<br class="clear">
		
		
		<div class="row prod_dtl detail-space" style="display:none;">
		
		<div class="video_box_prd col-sm-7">
			<embed style="max-width:100%;" width="757" height="424"
				src="<?php echo get_field('product_video'); ?>"
				type="application/x-shockwave-flash">
			</embed>
		</div>
		
		<h2>About <?php the_title(); ?> Product Copy</h2>
		<div class="col-sm-4"><?php the_content(); ?></div>
		</div>
		
		</section>
		<!-- Product Detil End -->
		
		<br class="clear"><br>
		<br>

<?php		
	endwhile;
?>

<?php
get_footer();
?>
<script>
function setOptionVal(thumbImage, name) {
	$('#prod_banner').attr('src', thumbImage);
	$('#option_title').html(name);
}

$('#menu-item-14').addClass('current-menu-item');
</script>