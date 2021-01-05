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
	<section id="news">
            <h2>News</h2>
                <ul>
<?php					
$myquery =	new WP_Query('category_name=news && posts_per_page=3');
if	($myquery->have_posts()) : while ($myquery->have_posts()) :	$myquery->the_post();?>
	<li>
		<?php
		$str= get_the_excerpt();
		?>
	
		<span class="bluecolor"><?php the_title();?></span><?= $str?><span class="bluecolor"><a href="<?php the_permalink();?>">[mehr erfahren]</a></span>

		
	</li>	
	<?php endwhile;	
	else :	?>
		<p>Keine News!</p>	
		<?php endif;			
	wp_reset_postdata();?>
                </ul>
		</section>
		<section id="referenzen">
            <h2>Referenzen</h2>
            <div id="grid-container">
                    <div id="tinabild" class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/images/dina-meyer.jpg" alt="Bild von Dina"></div>
                    <div id="tinatext" class="yellow"><p>Tina Ubuntu,<br>
                    CEO headless Ltd.</p> </div>
                    <div id="tinabeschreibung" class="yellow"><p>Alex' Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben! </p></div>  
                    <div id="tombild" class="lightblue"><img src="<?php echo get_template_directory_uri(); ?>/images/thomas-meyer.jpg" alt="Bild von Thomas"></div>
                    <div id="tomtext" class="lightblue"><p>Tom Herzog,<br>
                    Cutter's Finest</p></div>
                    <div id="tombeschreibung" class="lightblue"><p>Große Webkunst - keine Kunst mit Alex Mayer! </p> </div>
                    <div id="tomleer" class="lightblue"></div>
                    <div id="quoteleer" class="darkblue"></div>
                    <div id="zweibild" class="green"><img src="<?php echo get_template_directory_uri(); ?>/images/vorstand.jpg" alt="Bil von Vorstand"></div>
                    <div id="zweibildtext" class="green"><p>Vorstand Müller AG<br>
                    KR Ernst Anker, Dr. Florian Eisner</p></div>
                    <div id="zweibildbeschreibung" class="green"><p>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen. </p></div>
                    <div id="quote" class="darkblue"><img src="<?php echo get_template_directory_uri(); ?>/images/quotation_mark.svg" alt="Bild von Quotes"></div>
                </div>
        </section>
</main>
<?php get_footer(); ?>
