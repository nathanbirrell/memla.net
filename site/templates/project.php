<?php snippet('header') ?>

<section class="content project">

	<div class="gallery-controllers">
		<span class="prevslide fa fa-angle-left" style="cursor: pointer;"></span>
		<span class="nextslide fa fa-angle-right" style="cursor: pointer;"></span>
	</div>


	<div class="row section">
	    <div class="large-12 columns">
			<article class="project-info">

				<h1 class="project-title"><?php echo html($page->title()) ?></h1>
				
				<?php echo kirbytext($page->text()) ?>

			</article>
	    </div>
	</div>

</section>

<?php snippet('footer') ?>
