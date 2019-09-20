  
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="assets/jquery/skrollr.js"></script>

    <?php
      
      $js = return_javascript();
      if( ! explode( $js ) ) {
        foreach ($js as $value) {
          ?>
          <script src="<?=$value?>"></script>
          <?php
        }
      }
    ?>
  </body>
</html>
