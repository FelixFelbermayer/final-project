<?php get_header();?>
<main>
<?php 
	if (have_posts()) { 
		while (have_posts()){
			the_post();
			the_title();
            the_content();
            if(has_post_thumbnail()){
                set_post_thumbnail_size(600,600,true);
                the_post_thumbnail();

            }
		}
	}
?>
</main>
<?php get_footer(); ?>
