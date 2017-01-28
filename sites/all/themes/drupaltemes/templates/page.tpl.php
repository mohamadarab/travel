

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
	


	
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
				<?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title"><?php print $title; ?></h2>
					</div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- Testimonial -->
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
						
						<div id="content" class="column">
					<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
				</div>
					</div>
						
				</div>							
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
