<ul class="tags small-block-grid-1 medium-block-grid-3">
    <?php foreach($tags as $tag): ?>
    <li>
      <img src="http://placehold.it/350x150">
      <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
        <?php echo html(displayTag($tag)) ?>
      </a>
    </li>
    <?php endforeach ?>
</ul>