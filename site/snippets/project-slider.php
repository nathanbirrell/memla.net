<div class = 'iosSlider'>
    <!-- slider -->
    <ul class = 'slider'>
        <!-- slides -->
      
      <?php foreach($page->images() as $img):?>
        <li class="slide" style="background-image: url(<?php echo $img->url() ?>);"></li>
      <?php endforeach ?>

    </ul>
</div>