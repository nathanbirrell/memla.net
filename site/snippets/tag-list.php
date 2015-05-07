<ul class="tags small-block-grid-1 large-block-grid-2">
	<?php foreach($tags as $tag): ?>
		<li>
			<a href="<?php echo $page->url() . '/tag:' . $tag ?>">
				<div class="tag-image imageFill">
					<img src="<?= getTagThumbnail($tag, $page) ?>">
					<div class="tag-bg hide"></div>
					<div class="tag-text">
						<p><?php echo html(displayTag($tag)) ?> <br />
						<i class="fa fa-chevron-circle-right"></i></p>
					</div>
				</div>
			</a>
		</li>
	<?php endforeach ?>
</ul>