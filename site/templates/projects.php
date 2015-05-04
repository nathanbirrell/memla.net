<?php snippet('header') ?>

<section class="content projects">

  <div class="row section">

    <h1 class="small-10 small-centered columns"><?php echo $page->page_title(); if($tag) { echo html(": " . ucfirst($tag)); } ?></h1>

    <div class="small-10 small-centered columns">

    <!-- If there is no tag set, we show the list of tags -->

    <?php if($tag == null) { ?>
      <ul class="tags">
        <?php foreach($tags as $tag): ?>
        <li>
          <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
            <?php echo html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    <?php } ?>

    <!-- If there is a tag set, show every project for that tag -->

    <?php foreach($page->children()->filterBy('tags', param('tag'), ',') as $project): ?>

      <?php 
        $project_image = $project->images()->first(); 
      ?>

      <project class="medium-4 medium-offset-2 project-summary">
        
        <div class="project-image imageFill clearfix">
          <a href="<?php echo $project->url() ?>">
            <img src="<?php echo $project_image->url() ?>">
          </a>
        </div>

        <h2 class="project-title"><a href="<?php echo $project->url() ?>"><strong><?php echo $project->title() ?></strong></a></h2>

        <p class="project-description"><?php echo $project->text()->excerpt(200) ?></p>
      </project>

    <?php endforeach ?>

    </div>

  </div>

</section>

<?php snippet('footer') ?>
