<ul class="tags small-block-grid-1 medium-block-grid-2">
	<?php foreach($tags as $tag): ?>
		<li>
			<div class="tag-image imageFill">
				<a href="<?php echo $page->url() . '/tag:' . $tag ?>">
					<img src="<?= getTagThumbnail($tag, $page) ?>">
					<div class="tag-text hover">
						<p><?php echo html(displayTag($tag)) ?> <br />
						<i class="fa fa-chevron-circle-right"></i></p>
					</div>
				</a>
			</div>

		</li>
	<?php endforeach ?>
</ul>