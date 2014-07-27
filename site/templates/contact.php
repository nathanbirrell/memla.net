<?php snippet('header') ?>

<section class="content contact">

  <div class="row page-body people">
    <h1><?php echo $page->people_title() ?></h1>
      <div class="medium-8 medium-offset-2 columns">
        <?php foreach($page->children() as $person): ?>
          <person class="medium-4 medium-offset-2 columns">
            <?php echo $person->name() ?>
            <?php echo $person->phone() ?>
            <?php echo $person->email() ?>
          </person>
        <?php endforeach ?>
      </div>
  </div>

  <div class="row page-body find-us">
    <h1><?php echo $page->find_title() ?></h1>
      <div class="small-10 columns">

      </div>
  </div>

</section>

<?php snippet('footer') ?>
