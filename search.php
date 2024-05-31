<?php get_header(); ?>

  <!-- メインコンテンツ -->
  <div class="wrapper ">
    <!-- メイン -->
    <main class="main top_fadein">
      <p class="search_text">「<?php the_search_query(); ?>」の検索結果<span class="search_count"><?php echo $wp_query->found_posts; ?></span>件</p>

      <div class="main-contents masonry">

      <?php
            if (have_posts() ) :
                while (have_posts()) :
                    the_post();
      ?>

        <article class="item fadein top_fadein">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(null, array('class' => 'thumbnail')); ?>
            <p><?php the_time( get_option('date_format') ); ?></p>
            <h3 class="title"><?php the_title(); ?></h3>
          </a>
        </article>

        <?php
            endwhile;
        else :
            ?>
            <p class="search_result">検索キーワードに該当する記事がありませんでした。</p>
      <?php endif; ?>

      </div>

    </main>
    
    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>