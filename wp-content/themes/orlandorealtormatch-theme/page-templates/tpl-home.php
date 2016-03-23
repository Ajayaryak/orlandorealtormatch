<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="header_bottom12">
   <figure><img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"></figure>
  
    <div class="header_bottom_c">
   <div class="container">
  <div class="row">
  
     <div class="col-lg-12">
         <div class="header_bottom_con">
         <?php 
		 if ( is_active_sidebar( 'sidebar-5' ) ) :
			dynamic_sidebar( 'sidebar-5' );
			endif; 
		?>
  
         <div class="h_form" data-spy="affix" data-offset-top="470">
	
		   <div class="row">
		   <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
		   
           <!--<div class="col-md-15 col-sm-3"><span><input type="text" placeholder="Name"></span>    </div>
           <div class="col-md-15 col-sm-3"><span><input type="Email" placeholder="Email"></span></div>
            <div class="col-md-15 col-sm-3">  <span><input type="Phone" placeholder="Phone"></span></div>
	       <div class="col-md-15 col-sm-3 "> <span><select>
            <option value="volvo">Your Budget</option>
         <option value="saab">$55</option>
        <span></select></div>
       <div class="col-md-15 col-lg-3 col-sm-12 col-md-12"> <p><input type="button"  value="Submit"></p></div>-->
	   
     </div>
	 </div>
    </div> </div> </div>  </div>
      
	  
<div class="header_b_client">
  <div class="container">
  <div class="row">
	<?php 
	 if ( is_active_sidebar( 'sidebar-6' ) ) :
		dynamic_sidebar( 'sidebar-6' );
	endif; 
	?>
</div>   </div> </div> 
   </div>
   
  </div><!--header end-->
  
  
  <div class="container">
  <div class="row">
 
 
 
 <div class="col-lg-12">
	  <div class="con_about">
	<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	?>
  </div>
  </div>
  
    </div></div>
	
	
	
<div class="con_how_work">
     <div class="container">
  <div class="row">
  
    <div class="con_how_b">
  <h1>how it works</h1>
  
    <?php 

		if ( is_active_sidebar( 'sidebar-4' ) ) :
		dynamic_sidebar( 'sidebar-4' );
		endif; 
	?> 
		
	 </div></div>
  </div> </div>
  
  
<div class="top_clientt_outer">
     <div class="container">
  <div class="row">
  
    <div class="top_clientt">
  <h1>Meet One Of Our Agents</h1>

  <div class="col-lg-10 col-lg-push-1">
  <?php 
		$args22 = array(
			'post_type' => 'top_agents',
			'order'=> 'DESC',
			'posts_per_page' =>-1
			); 
		$loop22 = new WP_Query($args22);
		while($loop22->have_posts()) : $loop22->the_post();
	?>
	 <div class="col-lg-12">
       <div class="con_tp">
         <figure><?php the_post_thumbnail('large'); ?></figure>
         <h2><?php the_title();?></h2>
      </div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
	 

		</div>
	
 </div></div></div></div>

<div class="top_simplcity">
     <div class="container">
  <div class="row">
  
	<?php 
		if ( is_active_sidebar( 'sidebar-7' ) ) :
			dynamic_sidebar( 'sidebar-7' );
		endif; 
	?>

  </div></div></div>


<!--<div class="con_testimonial">
     <div class="container">
  <div class="row">
    <div class="con_test">
 
 <h1>What People Are Saying About Orlando Realtor Match <h1>
	<?php 
		/*$args22 = array(
			'post_type' => 'testimonial',
			'order'=> 'DESC',
			'posts_per_page' =>-1
			); 
		$loop22 = new WP_Query($args22);
		while($loop22->have_posts()) : $loop22->the_post();*/
	?>
 
    <div class="col-lg-4 col-sm-4 col-md-4">
       <div class="con_testimon">
         <figure><?php //the_post_thumbnail('large'); ?></figure>
       <?php //the_content(); ?>
         <h2><?php //the_title();?></h2>
	 
      </div>
	</div>

  <?php //endwhile; wp_reset_postdata(); ?>
 
 
</div></div>
 
 </div></div>-->
 
 <!--content end-->  
<?php
get_footer();
?>