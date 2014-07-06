<?php snippet('header') ?>

<section class="content">

  <div class="row">
    <div class="large-12 columns">
      <article>
        <h1><?php echo html($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
      </article>
    </div>
  </div>

</section>

<?php snippet('footer') ?>
