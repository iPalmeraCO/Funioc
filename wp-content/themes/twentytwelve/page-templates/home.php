<?php
/**
 * Template Name: Home
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="col-md-12">
	<?php     echo do_shortcode("[metaslider id=7]"); ?>
	
		<?php  while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	</div>
	<div class="col-md-12">
	</div>
	<div class="col-md-12 fhome">
		<?php

		$frase =  get_post_field('frase',get_the_ID());
		$autor =  get_post_field('autor',get_the_ID());
        $img   = get_field('imagen',get_the_ID());
        $rutimg = $img["url"];       

        ?>
        <div class="col-md-4 fbird">
        	<img src="<?php echo $rutimg; ?>" class="birdhome">
        </div>
        <div class="col-md-8 frase">
        	<p class="f"><?php echo $frase; ?></p>
        	<p class="a"><?php echo $autor; ?></p>
        </div>
		
	</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">


			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>