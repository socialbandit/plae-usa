<?php
/**
 * Template Name: Plae Maker
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<style>
.classname { text-align:center; background:#575757; width: 100px; height: 439px; margin:0px 50px;}

/* =Your Generated css 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
.classname a{position:absolute; left:40%; -webkit-transform:  rotate(270deg);-moz-transform:  rotate(270deg);-o-transform:  rotate(270deg);writing-mode: bt-lr;}
/* End of Your Generated css 

</style>

<?php
$args = array(
		'post_parent' => $post->ID,
	);

	$attachments = get_children( $args );// echo what we get back from WP to the browser

?>

<!-- Vision Mission Start -->
<section class="container-fluid">
	<div class="row">

		<br class="clear"><br class="clear"><br class="clear"><br class="clear"><br class="clear"><br class="clear"><br class="clear">

		<div class="col-sm-6 center-block center_box">
			<?php
				if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
//echo '<pre>';print_r($attachment);exit;
//get_the_post_thumbnail($attachment->ID)
						echo '<div class="col-xs-3 maker_link_box" style="width: 22%;">
							<a href="'.$attachment->guid.'" class="">'.get_the_post_thumbnail($attachment->ID).'</a>
						</div>';
					}
				}
			?>
		</div>
		<br class="clear"><br><br>

	</div>
</section>
<!-- Vision Mission End-->


<?php
get_footer();
?>