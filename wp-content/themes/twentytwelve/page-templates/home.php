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

<style type="text/css">
.comment-respond{
	display: none;
}
</style>
	<div class="col-md-12 nopad">
	<?php     echo do_shortcode("[metaslider id=7]"); ?>
	
		<?php  while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	</div>	




	  <div class="col-md-12 blogs containerpage2">

                        <div class="row">
                            <div class="col-md-12">
                                <p id="text3">Publicaciones</p>
                            </div>
                    	</div>

 			
<?php query_posts('showposts=5'); ?> 

<?php while (have_posts()) : the_post(); ?> 

 <div class="row blogshome">
                                     <div class="col-md-3  col-sm-3 image">
                                         <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="col-md-9 col-sm-9 titleblog">
                                        <a href="<?php echo get_permalink(); ?>"><h3 class="titbloghome"><?php echo the_title(); ?></h3></a>
                                         <?php echo print_excerpt(550); ?>
                                        <div class="separa">                          
                                    	</div> 
                                    	   <div class="metadatos">
                                         	 <div class="col-md-5 col-xs-6 rowmeta">
                                         	 	<div class="col-md-2 icon col-xs-3">
                                         	 		<img src="wp-content/uploads/2016/09/icondateblog.png">
                                         	 	</div>
                                         	 	<div class="col-md-10 content col-xs-9">
                                         	 		<?php echo get_the_date(); ?>
                                         	 	</div>
                                         	 </div>
                                         	 <div class="col-md-5 col-xs-6 rowmeta" onclick="showcoments();">
                                         	 	<div class="col-md-2 icon col-xs-3">
                                         	 		<img src="wp-content/uploads/2016/09/iconcomentarios.png">
                                         	 	</div>
                                         	 	<div class="col-md-10 content col-xs-9">
                                         	 		<p>Comentarios</p>
                                         	 	</div>
                                         	 </div>

                                         	
                                         </div> 
                                         
                                    </div>   
                                    
                                    
                                    
                                         <?php comment_form(); ?>
                                </div>
                                <div class="separa2">                          
                                    	</div> 


<?php endwhile;
wp_reset_query();
?>

                
 
    
</div>


	<div class="col-md-12 fhome nopad">
		<?php

		$frase =  get_post_field('frase',get_the_ID());
		$autor =  get_post_field('autor',get_the_ID());
        $img   = get_field('imagen',get_the_ID());
        $rutimg = $img["url"];       

        ?>
        <div class="col-md-4 fbird  col-sm-6 col-xs-12">
        	<img src="<?php echo $rutimg; ?>" class="birdhome">
        </div>
        <div class="col-md-8 frase col-sm-6 col-xs-12">
        	<p class="f"><?php echo $frase; ?></p>
        	<p class="a"><?php echo $autor; ?></p>
        </div>
		
	</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">


			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>