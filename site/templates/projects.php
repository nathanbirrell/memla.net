<?php snippet('header') ?>

<?php 



?>

<section class="content projects">

  <div class="row section">

    <h1 class="small-10 small-centered columns"><?php echo $page->page_title() ?></h1>

    <div class="small-10 small-centered columns">

      <?php foreach($page->children() as $project): ?>

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
