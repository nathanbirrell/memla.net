<?php snippet('header') ?>

<div class="clearfix spacer"></div>

<section class="content project">

	<div class="row section project-info">
		<div class="gallery-controllers">
			<span class="prevslide fa fa-angle-left" style="cursor: pointer;"></span>
			<span class="nextslide fa fa-angle-right" style="cursor: pointer;"></span>
		</div>
	    <div class="small-10 small-centered columns">
			<article class="info">
				<h1 class="project-title"><?php echo html($page->title()) ?></h1>
				
				<?php echo kirbytext($page->text()) ?>
			</article>
	    </div>
	</div>

</section>

<?php snippet('footer') ?>
