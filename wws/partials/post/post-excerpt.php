<div class="post">
  <h4 class="category"><?php the_category(' '); ?></h4>
  <div class="post-main-content">
    <h3 class="post-title">
      <?php the_title(); ?>
    </h3>
    <p class="post-excerpt">
      <?php the_excerpt(); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="btn">Keep Reading</a>
  </div>
</div>
