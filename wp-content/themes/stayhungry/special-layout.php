<?php
/*
 Template Name: Special Layout
 */
get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>
		<article class="post page">
			<div class="info-box">
				<h4>Disclamer Title</h4>
				<p>
					Li Europan lingues es membres del sam familie.
					Lor separat existentie es un myth.
					Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
				</p>
			</div>
			
			<h2><?php the_title(); ?></h2>

			<p><?php  the_content(); ?></p>
		</article>
	<?php endwhile;

else :
	echo '<p> No Content Found</p>';
endif;

get_footer();
?>