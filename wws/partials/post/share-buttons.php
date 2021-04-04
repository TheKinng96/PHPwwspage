<div class="blog-social-container my-4 mr-2">
  <div class="column has-text-right">
    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&via=corekara_inc" target="_blank" rel="nofollow" class="button twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank" rel="nofollow" class="button facebook"><i class="fab fa-facebook"></i></a>
    <button class="button rss" id="copy-rss" onclick="copyURL()"><i class="fas fa-rss"></i></button>
    <button class="button copy-link" id="copyUrl" onclick="copyURL('<?php the_permalink() ?>')"><i class="fas fa-link"></i></button>
  </div>
</div>