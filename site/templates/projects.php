<?php snippet('header') ?>

<section class="content projects">

  <div class="row section">

    <h1 class="small-10 small-centered columns"><?php echo $page->page_title(); if($tag) { echo html(": " . ucfirst($tag)); } ?></h1>

    <div class="small-10 small-centered columns">

    <!-- If there is no tag set, we show the list of tags -->

    <?php if($tag == null) { 
        snippet('tag-list');
    } ?>

    <!-- If there is a tag set, show every project for that tag -->

    <?php snippet('tag-projects') ?>

    </div>

  </div>

</section>

<?php snippet('footer') ?>
