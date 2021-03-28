<article class="column-page columns" itemscope itemtype="http://schema.org/Article">
  <!-- <meta itemprop="author" content="AdSIST Team">
  <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="株式会社これから" />
    <meta itemprop="mainEntityOfPage" content="https://corekara.co.jp/">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="thumbnail" content="https://adsist.ai/wp-content/themes/adsist.makeshop/assets/img/corekara-logo.png">
      <meta itemprop="url" content="https://adsist.ai/wp-content/themes/adsist.makeshop/assets/img/corekara-logo.png">
    </div>
  </div>
  <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>"> -->
  <section class="column blog-main-block">

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
              <img src="" alt="">
            </div>
            <div class="name-time">
              <h3><?php the_author(); ?></h3>
              <time datetime="" class="has-text-grey-light">
                <?php if(get_the_modified_date() === get_the_date()) : ?>
                <span itemprop="datePublished">
                  <?= get_the_date('Y/m/d'); ?></span>
                <br class="blog-date">
                <meta itemprop="dateModified" content="<?php the_modified_time('Y/m/d'); ?>">
                <span>
                  <?php 
                    the_modified_time('Y/m/d'); 
                  endif; ?>
                </span>
              </time>
            </div>
            <div class="blog-tags-container">
              <?php
              $posttags = get_the_tags(get_the_ID());
              if ($posttags) :
                foreach ($posttags as $tag) { ?>
                  <a href="<?php echo get_tag_link($tag); ?>" class="button is-outlined is-danger mx-1" target="_self" itemprop="keywords">
                    <?php
                    echo $tag->name . ' '; ?>
                  </a>
                <?php }
              else : ?>

              <?php endif; ?>
            </div>
            <div class="blog-header-tag">
              <!-- change to adsist.ai if copy to prod -->
              <!-- <a href="http://localhost:8000/<?php the_category()?>" class="button blog-provider-name<?= $providersClass[get_the_category()[0]->slug] ?? ''; ?> has-text-white" target="_self" itemprop="keywords">
                <?php
                echo $providersName[get_the_category()[0]->slug] ?? 'ネットショップ全般'; ?></a> -->
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
        <?php get_template_part( 'partials/post/share', 'buttons'); ?>
  </section>
</article>