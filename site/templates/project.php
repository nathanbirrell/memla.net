<?php snippet('header') ?>

<section class="content project">

  <div class="row section">
    <div class="large-12 columns">

    	<div class = 'fluidHeight'>
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
					<div class = 'slider'>
					
						<div class = 'item imageFill'>
							<img src = 'https://unsplash.imgix.net/reserve/Y1hediOeRoya666XCjYg_forest.jpg?q=75&fm=jpg&s=005a5782dc5648a3acb4ae1fc0c8380c' />
						</div>
						
						<div class = 'item imageFill'>
							<img src = 'https://unsplash.imgix.net/reserve/oIpwxeeSPy1cnwYpqJ1w_Dufer%20Collateral%20test.jpg?q=75&fm=jpg&s=d8cce13e5d977aeec5bdbec256987adf' />
						</div>
						
						<div class = 'item imageFill'>
							<img src = 'https://unsplash.imgix.net/reserve/D9xlw7UxTBqQw5sLf8cJ_reef%20insp-72.jpg?q=75&fm=jpg&s=a46f72e373f7af2b3bba993f565e24be' />
						</div>
						
						<div class = 'item imageFill'>
							<img src = 'https://unsplash.imgix.net/45/YzgdnQ4TTumS8xR9YRKJ_IMG_2761%20(1).jpg?q=75&fm=jpg&s=00fed6480f145821fa3c2fec215e6ca7' />
						</div>
					
					</div>
				</div>
			
			</div>
		
		</div>
    
		<article>

		<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>

		</article>
    </div>
  </div>

</section>

<?php snippet('footer') ?>
