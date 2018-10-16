<?php get_header(); ?>

<section id="carousel">	
		<div id="slide-0" class="slide" data-slide-num="0">
			<div class="container">			
				<div class="row">			
					<div class="col-xs-12">					
						<div class="framer">						
							<div class="framee">
								&nbsp;
							</div>	
							<div class="carousel-nav">
								<span class="dot current" data-num="0"></span>
								<span class="dot" data-num="1"></span>
								<span class="dot" data-num="2"></span>
								<span class="dot" data-num="3"></span>
							</div>
						</div>
					</div>				
				</div>
			</div>	
		</div>
		<div id="slide-1" class="slide" data-slide-num="1">
			<div class="container">			
				<div class="row">			
					<div class="col-xs-12">					
						<div class="framer">						
							<div class="framee">
								&nbsp;					
							</div>	
							<div class="carousel-nav">
								<span class="dot" data-num="0"></span>
								<span class="dot current" data-num="1"></span>
								<span class="dot" data-num="2"></span>
								<span class="dot" data-num="3"></span>
							</div>							
						</div>
					</div>				
				</div>
			</div>	
		</div>
		<div id="slide-2" class="slide" data-slide-num="2">
			<div class="container">			
				<div class="row">			
					<div class="col-xs-12">					
						<div class="framer">						
							<div class="framee">
								&nbsp;
							</div>
							<div class="carousel-nav">
								<span class="dot" data-num="0"></span>
								<span class="dot" data-num="1"></span>
								<span class="dot current" data-num="2"></span>
								<span class="dot" data-num="3"></span>
							</div>
							
						</div>
					</div>				
				</div>
			</div>	
		</div>
		<div id="slide-3" class="slide" data-slide-num="3">
			<div class="container">			
				<div class="row">			
					<div class="col-xs-12">					
						<div class="framer">						
							<div class="framee">
								&nbsp;
							</div>
							<div class="carousel-nav">
								<span class="dot" data-num="0"></span>
								<span class="dot" data-num="1"></span>
								<span class="dot" data-num="2"></span>
								<span class="dot current" data-num="3"></span>
							</div>
							
						</div>
					</div>				
				</div>
			</div>	
		</div>	
	</section> 



	<article id="main-home">		
		<div class="container">	
			<div class="row quote-section">
				<div class="col-xs-2 quote-img">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/quote-left.png" />
				</div>
				<div class="col-xs-8 quote-text">
					<p><em>The more women we have in cardiology, the more women who can help advocate for and care for other women.</em> <br />
					–Cheryl Pegus	
</p>
				</div>
				<div class="col-xs-2 quote-img">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/quote-right.png" />
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 icon-section">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/female.png" />
					<p>Heart disease is the leading cause of death in women. Female leadership within healthcare has been shown to positively impact access to and quality of care for female and minority patients. We believe more women ascending to leadership roles in cardiology will have a tremendous impact on improving care and clinical outcomes not only for women and minorities, but for all patients.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 icon-section">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/hands.png" />
					<p>A New Beat is not only geared to reach women, but also men. We need to work together to inspire and support more women to rise as leaders in the field. This initiative will explore how we can navigate obstacles and take advantage of opportunities together.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 icon-section">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/new-beat.png" />
					<p>A New Beat symbolizes the "beat of a new drum" to which current and future medical leaders will march as well as our "heartbeat" and passion for shaping a new generation of leaders. It serves as a community and resource for women in the medical field who are interested in advancing their careers while improving patient outcomes.</p>
				</div>
			</div>
		</div>	 	  	  
	</article>
			
	<article id="blog-home">		
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>News</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 divider">
					
					<h2 class="blog-title">A New Beat</h2>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<?php if ( in_category( 4 ) ) : ?>

							<h3 class="post-title"><?php the_title(); ?></h3>
							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?><br>
							<?php the_shortlink('Read More'); ?>

						<?php endif; ?>

					<?php endwhile; else: ?>
						<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
					<?php endif; ?>

				</div> 
				
				<div class="col-sm-6">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<?php if ( in_category( 5 ) ) : ?>

							<h3 class="post-title"><?php the_title(); ?></h3>
							<?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>

						<?php endif; ?>

					<?php endwhile; else: ?>
						<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
					<?php endif; ?>

				</div> 
			</div>
		</div>	 	  	  
	</article>

<?php get_footer(); ?>