<?php
get_header('v2');
$uri = get_theme_file_uri();
?>

<!-- main body -->
<main class="posts">

  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();

      get_template_part('partials/post/post', 'content');
    }
  }

  ?>

  <!-- posts -->
  <section class="posts" id="posts">
    <div class="posts-container">
      <?php

      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('partials/post/post', 'excerpt');
        }
      }

      ?>

      <div class="post-image-container is-desktop">
        <img src="<?php echo $uri; ?>/assets/img/posts-a.png" alt="post-area-cover">
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>