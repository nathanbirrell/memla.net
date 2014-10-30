<?php snippet('header') ?>

<section class="content project">

  <div class="row section">
    <div class="large-12 columns">

    	<div class = 'fluidHeight'>

    		<div class="gallery-controllers">
				<span class="prevslide fa fa-angle-left" style="cursor: pointer;"></span>
				<span class="nextslide fa fa-angle-right" style="cursor: pointer;"></span>
			</div>
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
					<div class = 'slider'>

						<?php foreach($page->images() as $img):?>
							<div class = 'item imageFill'>
								<img src = '<?php echo $img->url() ?>' />
							</div>
						<?php endforeach ?>
					
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
