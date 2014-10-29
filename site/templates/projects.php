<?php snippet('header') ?>

<section class="content contact">

  <div class="row section projects">

    <h1 class="row"><?php echo $page->page_title() ?></h1>

    <div class="small-8 small-offset-2">

      <?php foreach($page->children() as $project): ?>
        <?php
          // prep values
          $phone_stripped = preg_replace('/\s+/', '', $project->phone());
        ?>

        <project class="medium-4 medium-offset-2 <?php if (!$project->hasNext()) {echo "end";} ?>">
          <p><strong><?php echo $project->title() ?></strong></p>
        </project>

      <?php endforeach ?>

    </div>

  </div>

</section>

<?php snippet('footer') ?>
