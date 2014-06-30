<?php
/**
 * Template Name: List Plae Maker
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

<div class="col-sm-11 center-block center_box_1 tab_outer" style="float:none">

<?php
	$args = array(
		'post_parent' => $post->post_parent,
	);
	$attachments = get_children( $args );// echo what we get back from WP to the browser
?>


<span class="col-xs-2 hidden-sm  hidden-xs "></span>
<?php 

	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			if( $attachment->ID == $post->ID) {
				echo '<a href="'.$attachment->guid.'" class="col-xs-3 col-sm-3 col-md-2 activ"><span>'.$attachment->post_title.'</span></a>';
			} else {
				echo '<a href="'.$attachment->guid.'" class="col-xs-3 col-sm-3 col-md-2"><span>'.$attachment->post_title.'</span></a>';
			}
		}
	}
?>
</div>

<br class="clear">

<?php
	$field_group_values = simple_fields_fieldgroup("plae_maker_field");
	foreach($field_group_values as $key => $val) {
?>
		<div class="col-sm-4 col-md-3 img_outer_list"><a data-lightbox="example-set" href="<?php echo $val['plae_maker_image']['image_src']['large'][0]; ?>"><img src="<?php echo $val['plae_maker_image']['image_src']['post-thumbnail'][0]; ?>" width="335px" height="335px" alt="">
		<div class="img_cnt_box"><h5><?php echo $val['plae_maker_name']; ?></h5>
		<span>products used: <?php echo $val['plae_maker_products_used']; ?></span>
		</div></a></div>
<?php } ?>

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
<script>
$('#menu-item-17').addClass('current-menu-item');
</script>