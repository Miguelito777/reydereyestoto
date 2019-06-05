<?php
//Template Name: Left sidebar layout
//Template Post Type: post
?>

<?php get_header();
$wl_theme_options = weblizar_get_options(); 
if($wl_theme_options['breadcrumb']!='') {  
get_template_part('breadcrums'); } else { ?>
<style>
.row.enigma_blog_wrapper {
    margin-top: 70px;
}
</style>
<?php } ?>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<?php get_sidebar(); ?>
	<div class="col-md-8">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
		<?php get_template_part('post','content'); 
		get_template_part('author','intro');
		endwhile; 
		else : 
		get_template_part('nocontent');
		endif;
		weblizar_navigation_posts();
		comments_template( '', true ); ?>
	</div>	
	</div> <!-- row div end here -->	
</div><!-- container div end here -->
<?php get_footer(); ?>