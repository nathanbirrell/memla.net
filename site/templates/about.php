<?php snippet('header') ?>

<section class="content">

  <div class="row section about">
      <article class="medium-4 columns col">
        <!-- <i class="fa fa-users fa-5x"></i> -->
        <?php echo kirbytext($page->col_1()) ?>
      </article>
      <article class="medium-4 columns col">
        <!-- <i class="fa fa-lightbulb-o fa-5x"></i> -->
        <?php echo kirbytext($page->col_2()) ?>
      </article>
      <article class="medium-4 columns col">
        <!-- <i class="fa fa-gavel fa-5x"></i> -->
        <?php echo kirbytext($page->col_3()) ?>
      </article>
  </div>

</section>

<?php snippet('footer') ?>
