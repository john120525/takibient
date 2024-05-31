<?php get_header(); ?>

  <!-- シングルコンテンツ -->
  <div class="small-wrapper">
    <!-- メイン -->
    <main class="single">
    <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
      <div class="single-contents fadein top_fadein">
        <p class="category" ><?php the_category(); ?></p>
        <p class="date"><?php the_date(); ?></p>
        <h2 class="page-title"><?php the_title(); ?></h2>
        <?php the_post_thumbnail(null, array('class' => 'page-img')); ?>
        <div class="page-content">
          <p><?php the_content(); ?></p>
        </div>

        <h3 class="wp_block_heading"></h3>
      </div>

      <?php
            endwhile;
        else:
            ?>
        <p>投稿データはありません</p>
        <?php endif; ?>

    </main>

    <!-- アサイド -->
    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>

