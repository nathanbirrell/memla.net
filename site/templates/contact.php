<?php snippet('header') ?>

<section class="content contact">

  <div class="row section people">
    <h1><?php echo $page->people_title() ?></h1>
      <div class="small-8 small-offset-2 columns">
        <?php foreach($page->children() as $person): ?>
          <?php
            // prep values
            $phone_stripped = preg_replace('/\s+/', '', $person->phone());
          ?>
          <person class="medium-4 medium-offset-2 columns <?php if (!$person->hasNext()) {echo "end";} ?>">
            <p><strong><?php echo $person->name() ?></strong></p>
            <p><a href="tel:<?php echo $phone_stripped ?>"><?php echo $person->phone() ?></a></p>
            <p><a href="mailto:<?php echo $person->email() ?>"><?php echo $person->email() ?></a></p>
          </person>
        <?php endforeach ?>
      </div>
  </div>

  <div class="row section find-us">
    <h1><?php echo $page->find_title() ?></h1>
      <div class="small-8 small-offset-2 columns">
        <div class="medium-10 medium-offset-2 columns">
          <?php echo kirbytext($page->find_address()) ?>
        </div>
        <div class="medium-10 medium-offset-2 columns">
          <a href="<?php echo $page->find_map_link() ?>" target="_blank">
            <img src="<?php echo $page->find_image() ?>" alt="Find us - map" />
          </a>
        </div>
      </div>
  </div>

</section>

<?php snippet('footer') ?>
