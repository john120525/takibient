<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | takibient</title>
  <meta name="description" content="Ryoの運営するアウトドアブログサイトです。趣味で発信していきます。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>

</head>
<body>
  <!-- ヘッダー -->
  <header class="header-top">
    <div class="wrapper">

      <h1 class="logo">
        <a href="<?php echo esc_url(home_url()); ?>">takibient</a>
      </h1>
      
      <nav>
        <ul class="global-nav">
          <li><a href="<?php echo esc_url(home_url('/camping')); ?>">Camping</a></li>
          <li><a href="<?php echo esc_url(home_url('/lifestyle')); ?>">Lifestyle</a></li>
          <li><a href="<?php echo esc_url(home_url('/notice')); ?>">Notice</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
        </ul>
        <?php get_search_form(); ?>
      </nav>

      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="modal-nav">
        <nav>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/camping')); ?>">Camping</a></li>
          <li><a href="<?php echo esc_url(home_url('/lifestyle')); ?>">Lifestyle</a></li>
          <li><a href="<?php echo esc_url(home_url('/notice')); ?>">Notice</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
        </ul>
        </nav>
      </div>

      <div class="mask"></div>
    </div>
  </header>

  <!-- ローディングアニメーション -->
  <div id="splash">
    <div id="splash-logo">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/img/fadeUp.jpg') ?>" class="fadeUp" alt="">
    </div>
  </div>

  <!-- メインビジュアル -->
  <div class="mainvisual">
    <ul class="slider">
      <li class="slider-item slider-item01"></li>
      <li class="slider-item slider-item02"></li>
      <li class="slider-item slider-item03"></li>
    </ul>
  </div>

  <!-- メインコンテンツ -->
  <div class="wrapper ">
    <!-- メイン -->
    <main class="main">
      <div class="main-contents masonry">

      <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
      ?>

        <article class="item fadein">
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
            <p>投稿データがありませんでした。</p>
      <?php endif; ?>

      </div>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>


