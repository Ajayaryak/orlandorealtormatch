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
<div class="footer_box"><!--footer start-->
 <div class="footer_box_inn">
 
  

     <div class="container">
  <div class="row">
  
     <div class="col-lg-6 col-sm-6 col-md-6"> 
	 <div class="footer_test">Copyright@ <?php echo date('Y'); ?> Orlando Realtor Match   All rights reserved.</div></div>
 
    <div class="col-lg-6 col-sm-6 col-md-6"> 
		<div class="con_test_b">
			<?php if ( is_active_sidebar( 'sidebar-3' ) ) :
				dynamic_sidebar( 'sidebar-3' );
				endif; 
			?>
		</div>
	</div>
 
 
		</div>
	</div>
</div>
 
 </div></div><!--footer end-->
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/budjet.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript">
			jQuery('#nav').affix({
			});
	</script>


	<?php wp_footer(); ?>
</body>
</html>