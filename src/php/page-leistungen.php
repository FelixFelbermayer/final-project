<?php get_header(); ?>
<main class="maxwidthcontainer">
	<section id="leistungen">
		<h2>Leistungen</h2>
		<ul>
<?php
$myquery =	new WP_Query('category_name=leistungen && posts_per_page=3');
if	($myquery->have_posts()) : while ($myquery->have_posts()) :	$myquery->the_post();?>
	<li class="leistungslist">
		<h3><?php the_title();?></h3>	
		<?php
        if(has_post_thumbnail()){
                the_post_thumbnail();
			}
		?>
	</li>	
	<?php endwhile;	
	else :	?>
		<p>Keine Leistungen du looser :(</p>	
		<?php endif;			
	wp_reset_postdata();?>
		</ul>
	</section>
</main>
<?php get_footer(); ?>