<ul class="tags small-block-grid-1 medium-block-grid-3">
    <?php foreach($tags as $tag): ?>
    <li>
      <div class="tag-image imageFill">
      	<a href="<?php echo $page->url() . '/tag:' . $tag ?>">
	      	<img src="<?= getTagThumbnail($tag, $page) ?>">
      	</a>
      </div>
      <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
        <?php echo html(displayTag($tag)) ?>
      </a>
    </li>
    <?php endforeach ?>
</ul>