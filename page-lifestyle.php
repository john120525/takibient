<?php 
/* template name: lifestyle */
get_header(); ?>

<!-- メインコンテンツ -->
<div class="wrapper ">
    <!-- メイン -->
    <main class="main">
      <div class="main-contents masonry">

       <?php
       $lifestyle_query = new WP_Query(array (
        'category_name' => 'lifestyle',
        'posts_per_page' => -1
       ));
         if ($lifestyle_query -> have_posts()):
          while ($lifestyle_query -> have_posts()):
            $lifestyle_query -> the_post();
       ?>
        <article class="item top_fadein fadein">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(null, array('class' => 'thumbnail')); ?>           <p><?php the_time( get_option('date_format') ); ?></p>
            <h3 class="title"><?php the_title(); ?></h3>
          </a>
        </article>

        <?php
            endwhile;
           else:
        ?>
        <p>投稿データがありませんでした。</p>
        <?php 
      endif;
      wp_reset_postdata();
       ?>
      </div>

    </main>

  <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>