      <footer class="row">
        <div class="small-10 small-centered columns  text-center">
          <?php echo kirbytext($site->copyright()) ?> 
          <span class="credit"><i class="fa fa-code"></i> built by <a href="http://nathanbirrell.me/" target="_blank">Nathan Birrell</a></span>
        </div>
      </footer>

    <?php if ($page->template() == "project") { ?>
      <!-- end project page body div -->
      </div>
    <?php }; ?>

    <script src="<?php echo u(); ?>/assets/js/dist/app.min.js"></script>
  </body>
</html>
