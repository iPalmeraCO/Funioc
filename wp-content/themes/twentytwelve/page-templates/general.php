<?php
/**
 * Template Name: General
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

	<div class="col-md-12 banner nopad">

		<?php

		
		?>
		<?php   
		 $img   = get_field('banner',get_the_ID());
        	  $rutimg = $img["url"];     
        ?>
		<img src="<?php echo $rutimg; ?>">
		
	</div>
	<div class="col-md-12  nopad opages">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
   			  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		}	?>

		<?php  while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	</div>
	<div class="col-md-12 fhome fothers nopad">
		<?php

		$frase =  get_post_field('frase',get_the_ID());
		$autor =  get_post_field('autor',get_the_ID());
        $img   = get_field('imagen',get_the_ID());
        $rutimg = $img["url"];       
        $slug = get_post_field( 'post_name', get_post() );
        $class = "animal_".$slug;
        ?>
        <div class="col-md-4 fbird col-sm-6 col-xs-12 <?php echo $class; ?>">
        	<img src="<?php echo $rutimg; ?>" class="footeranimal">
        </div>
        <div class="col-md-8 frase col-sm-6 col-xs-12">
        	<p class="f"><?php echo $frase; ?></p>
        	<p class="a"><?php echo $autor; ?></p>
        </div>
		
	</div>
	

<?php get_footer(); ?>