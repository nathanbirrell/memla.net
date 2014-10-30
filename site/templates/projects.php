<?php snippet('header') ?>

<?php 

function trimDescription($string,$length=220,$append="&hellip;") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}

?>

<section class="content projects">

  <div class="row section">

    <h1 class="small-12 small-offset-2"><?php echo $page->page_title() ?></h1>

    <div class="small-8 small-offset-2">

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

          <p class="project-description"><?php echo trimDescription($project->text()) ?></p>
        </project>

      <?php endforeach ?>

    </div>

  </div>

</section>

<?php snippet('footer') ?>
