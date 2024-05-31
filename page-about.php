<?php get_header(); ?>

  <!-- アバウトコンテンツ -->
  <div class="wrapper">
    <!-- メイン -->
    <main class="about">
      <div class="about-contents top_fadein fadein">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/camp5.jpg') ?>" alt="">
        <div class="about-text">
          <h2 class="fadein">豊かな暮らしを探求するブログ</h2>
          <p class="comment">
            takibientとは、Takibi + Ambientを合わせた造語です。<br>焚き火の爆ぜる音に耳を傾け、炎のゆらめきを眺めながら、自分自身が自然に溶け込んでいように、豊かな時間を過ごすことができればと名付けました。<br>主にアウトドアや、食、日用品、トラベルといったテーマから、独自の視点で気になるモノ、コトを紹介します。<br>ぜひブックマックして、たまにみていただけると嬉しいです。
          </p>
          <p class="keyword fadein">
            Long Life ロングライフ<br>
            Authentic オーセンティック<br>
            Minimal ミニマル<br>
            Independent インディペンデント<br>
            Sustainable サスティナブル
          </p>
          <p class="introduce fadein">
            このメディアを運営している私、Ryoについて。<br>
            1993年生まれ。本業は企業で経理をやっています。写真好き。キャンプ好き。料理好き。掃除はこまめにする方です。
          </p>
        </div>
      </div>

    </main>

    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>

