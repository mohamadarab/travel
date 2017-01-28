	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<?php if ($logo): ?>
						<a class="tm-site-name pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
						</a>	
					<?php endif; ?>
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<?php if ($main_menu): ?>
							<div id="main-menu" class="navigation">
								<?php print theme('links__system_main_menu', array(
								'links' => $main_menu,
								'attributes' => array(
								'id' => 'main-menu-links',
								'class' => array('links', 'clearfix'),
								),
								'heading' => array(
								'text' => t('Main menu'),
								'level' => 'h2',
								'class' => array('element-invisible'),
								),
								)); ?>
							</div> <!-- /#main-menu -->
						<?php endif; ?>

					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>


	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title"><?php print $title; ?></h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<?php print render($page['tour']); ?>
			</div>		
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			
		<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">گردشگری با دروپال</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<?php print render($page['article_tour']); ?>
			</div>	
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2017 <a href="http://drupalthemes.ir" target="_blank">Drupalthemes.ir</a></p>
			</div>
		</div>		
	</footer>

