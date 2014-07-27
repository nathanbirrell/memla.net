<?php snippet('header') ?>

<section class="content contact">

  <div class="row section people">
    <h1><?php echo $page->people_title() ?></h1>
      <div class="medium-8 medium-offset-2 columns">
        <?php foreach($page->children() as $person): ?>
          <person class="medium-4 medium-offset-2 columns <?php if (!$person->hasNext()) {echo "end";} ?>">
            <p><strong><?php echo $person->name() ?></strong></p>
            <p><?php echo $person->phone() ?></p>
            <p><?php echo $person->email() ?></p>
          </person>
        <?php endforeach ?>
      </div>
  </div>

  <div class="row section find-us">
    <h1><?php echo $page->find_title() ?></h1>
      <div class="small-10 columns">

      </div>
  </div>

</section>

<?php snippet('footer') ?>
