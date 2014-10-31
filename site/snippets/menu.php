<section class="top-bar-section">
  <nav data-topbar>
      <ul class="row small-centered">
        <?php foreach($pages->visible() AS $p): ?>
        <li class="medium-4 columns"><a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
  </nav>
</section>
