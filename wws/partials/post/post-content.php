<article class="column-page columns" itemscope itemtype="http://schema.org/Article">
  <meta itemprop="author" content="<?php the_author(); ?>">
  <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="AIA WWS Team" />
    <meta itemprop="mainEntityOfPage" content="http://knwws.com/">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="thumbnail" content="http://knwws.com/wp-content/themes/wws/assets/img/logo.png">
      <meta itemprop="url" content="http://knwws.com/wp-content/themes/wws/assets/img/logo.png">
    </div>
  </div>
  <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>">

  <section class="blog-main-block">

    <!-- post-image -->
    <div class="blog-header-image">
      <?php the_post_thumbnail('large', ['class' => 'image_fade']); ?>
    </div>

    <!-- post header -->
    <div class="blog-header">
      <div class="blog-title-container">
        <h1 itemprop="headline"><?php the_title(); ?>
          <meta itemprop="name" content="<?php the_title(); ?>">
        </h1>
        <h2><?php the_excerpt(); ?></h2>
      </div>
      <div class="author-container">
        <div class="author-image">
          <?php if (get_avatar(get_the_author_meta('ID'))) : ?>
            <?php echo get_avatar(get_the_author_meta('ID')) ?>
          <?php else : ?>
            <img src="https://robohash.org/no-image-default">
          <?php endif; ?>
        </div>
        <div class="name-time">
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <h3><?php the_author(); ?></h3>
          </a>
          <time datetime="<?php the_modified_time('Y/m/d'); ?>" class="has-text-grey-light">
            <?php the_modified_time('Y/m/d'); ?>
            </span>
          </time>
        </div>
        <div class="blog-category-container">
          <h4>
            <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?>
          </h4>
        </div>
      </div>
    </div>

    <div class="main-all">
      <!-- blog content -->
      <div class="blog-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
        <div class="blog-entry-content" itemprop="articleBody">
          <?php
          if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
            the_excerpt();
          } else {
            the_content(__('Continue reading', 'twentytwenty'));
          } ?>
        </div><!-- .entry-content -->
      </div><!-- .post-inner -->
      <hr>
    </div>

    <!-- blog share icon-->
    <?php get_template_part('partials/post/share', 'buttons'); ?>
  </section>
</article>