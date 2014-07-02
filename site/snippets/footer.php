  <footer>
    <?php echo kirbytext($site->copyright()) ?>
  </footer>

  <script src="assets/jquery.min.js"></script>
``<script src="assets/fastclick.js"></script>
  <script>
    var _gaq = _gaq || [];
    _gaq.push(
      ['_setAccount', 'UA-xxxxxxx-x'],
      ['_trackPageview'],
      ['b._setAccount', 'UA-xxxxxxxx-xx'],
      ['b._trackPageview']
    );

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>

</html>
