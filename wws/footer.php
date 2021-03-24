<?php $uri = get_theme_file_uri(); ?>

<!-- footer -->
  <footer class="footer">
    <div class="row footer-top">
      <div class="company-contact col-md-5 col-7">
        <h1>WWS<span class="is-gold">.</span></h1>
        <h2>Address here Taman Utama ... </h2>
        <p>Contact</p>
        <a href="tel:+60123456789">012-3456789</a>
        <p>Want to email us? <a href="mailto: abc@example.com" class="is-gold">Click here</a></p>
      </div>
      <div class="col-md-3 col-6">
        <ul>
          <li>About</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-6">
        <ul>
          <li>Info</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <img src="<?php echo $uri; ?>/assets/img/logo-mobile.png" alt="wws logo">
      <p>
        Copyright &copy; WWS team. All Rights Reserved. 
      </p>
    </div>
  </footer>

  <!-- javascript -->
  <?php wp_footer(); ?>
</body>
</html>