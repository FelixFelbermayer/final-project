<?php get_header();?>
<main>
<?php 
	if (have_posts()) { 
		while (have_posts()){

			the_post();
		?>
		<div class="contentcontainer">
			<h2><?php the_content(); ?></h2>
		</div>
		<?php   
			if(has_post_thumbnail()){
                set_post_thumbnail_size(600,600,true);
                the_post_thumbnail();

            }
		}
	}
?>
</main>
<?php get_footer(); ?>