<?php snippet('header') ?>

<div class="clearfix spacer"></div>

<section class="content project">

	<div class="row section project-info">
		<div class="gallery-controllers">
			<span class="fa fa-angle-left prevslide" style="cursor: pointer;"></span>
			<span class="fa fa-angle-right nextslide" style="cursor: pointer;"></span>
		</div>
	    <div class="small-10 small-centered columns">
			<article class="info">
				<h1 class="project-title"><?php echo html($page->title()) ?></h1>
				
				<?php echo kirbytext('**Type:** ' . displayTag($page->tags()->first())) ?>
				<span class="break"> | </span>
				<?php echo kirbytext('**About:** ' . $page->text()->excerpt(150)) ?>
			</article>
	    </div>
	</div>

</section>

<?php snippet('footer') ?>
