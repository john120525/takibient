<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?> | takibient</title>
  <meta name="description" content="Ryoの運営するアウトドアブログサイトです。趣味で発信していきます。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>

</head>
<body>
  <!-- ヘッダー -->
  <header>
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

