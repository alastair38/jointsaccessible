<div class="large-12 columns show-for-medium-up">
	<div class="fixed contain-to-grid">
		<nav class="top-bar" role="navigation" data-topbar>
		    <span class="title-area">
                <h3><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h3>
            </span>
			<section class="top-bar-section">

				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<!-- This is the nav that will show for mobile/small devices -->
<div class="large-12 columns show-for-small-only">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="left-small">
				<a href="#" class="left-off-canvas-toggle menu-icon" aria-label="navigation menu" role="button" aria-controls="navigation" aria-expanded="false" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only" role="navigation">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>
