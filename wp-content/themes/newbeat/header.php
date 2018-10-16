<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	  
	  <!--<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6190532/709866/css/fonts.css" />-->
	  
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  
	<?php wp_head(); ?>
	  
  </head>

  <body>
	  
	<section id="social-top">
		<div class="container">			
			<div class="row">
				
				<div class="col-xs-12 col-sm-6 nav-toggle">
					<img class="main-logo-mobile" src="<?php echo get_bloginfo('template_directory'); ?>/images/A-New-Beat_Horizontal_KO.png" />
					<div class="sponsor-logos">
						<img class="logo-ABC" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-ABC.png" />
						<img class="logo-CRF" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-CRF.png" />
					</div>
					<img class="hamburglar visible-xs" src="<?php echo get_bloginfo('template_directory'); ?>/images/hamburglar.png" />
				</div>
			
				<div class="col-xs-12 col-sm-6 social">
					
					<a href="https://www.facebook.com/CRFheart/" target="_blank"><img class="social" src="<?php echo get_bloginfo('template_directory'); ?>/images/social-fb.png" alt="Facebook" /></a>
					
					<a href="https://twitter.com/CRFHeart" target="_blank"><img class="social" src="<?php echo get_bloginfo('template_directory'); ?>/images/social-tw.png" alt="Twitter" /></a>

					<a href="https://www.linkedin.com/company/20767/" target="_blank"><img class="social" src="<?php echo get_bloginfo('template_directory'); ?>/images/social-li.png" alt="LinkedIn" /></a>
									

				</div>				
			</div>
		</div>
	</section>
	  
	  
	<nav id="main">		
		<div class="container">			
			<div class="row">	
				<div class="col-xs-12 col-sm-4 col-md-3">
					<img class="logo-new-beat" src="<?php echo get_bloginfo('template_directory'); ?>/images/A-New-Beat_Horizontal_KO.png" />
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9 nav-list">	
					
					<div class="closearrow visible-xs">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/images/closearrow.png" />
					</div>
					<ul>					
						<?php wp_list_pages( '&title_li=' ); ?>
					</ul>
				</div>				
			</div>
		</div>			
	</nav>

	  

	
	  

