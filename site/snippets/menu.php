<nav class="top-bar" data-topbar>
  <section class="top-bar-section">
    <ul class="right">
      <?php foreach($pages->visible() AS $p): ?>
      <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>
</nav>
