<ul class="tags">
    <?php foreach($tags as $tag): ?>
    <li>
      <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
        <?php echo html(ucfirst($tag)) ?>
      </a>
    </li>
    <?php endforeach ?>
</ul>