<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section id="get-involved" class="page-content">	
	<div class="container">	
		<div class="row">	
			<div class="col-xs-12">	
				
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			the_title( '<h1 class="entry-title">', '</h1>' );
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
				//comments_template();
			//endif;

			

		// End the loop.
		endwhile;
		?>

			</div>							
		</div>
	</div>	 	  	  
</section>			

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
