<section id="footer">
	<div class="container">			
		<div class="row">	
			<div class="col-sm-3">
				<img class="logo-CRF" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-CRF.png" />
				<br /><br />
				<img class="logo-ABC" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-ABC.png" />				
			</div>
			<div class="col-sm-9">

				<ul>					
					<?php wp_list_pages( '&title_li=' ); ?>
				</ul>
				

			</div>				
		</div>
		<div class="row">	
			<div class="col-sm-12 contact">
				<a href="mailto:info@crf.org">info@crf.org</a>
			</div>
		</div>
	</div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js"></script>
	
	<script>
		
		$(document).ready(function() {		

			Carousel.init({

				carouselID			: 'carousel',
				carouselSlideClass	: 'slide',
				carouselButtonClass	: 'dot',
				numOfSlides			: 4,
				timeBtwnSlides		: 5000

			});
			
			MobileNav.init({
				
				hamClass		: 'hamburglar',
				closeClass		: 'closearrow'
				
			});

		});
			
		
	</script> 


	<?php wp_footer(); ?>

  </body>
</html>