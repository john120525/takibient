    <!-- アサイド -->
    <aside class="aside">
      <div class="profile fadein top_fadein">
        <div class="picture">
          <img class="profile-pic" src="<?php echo esc_url(get_template_directory_uri() . '/img/camp4.jpg') ?>" alt="プロフィール画像">
          <img class="author-pic" src="<?php echo esc_url(get_template_directory_uri() . '/img/author.jpg') ?>" alt="Ryoのプロフィール画像">  
        </div>
        <div class="profile-contents">
          <h4 class="name">Ryo</h4>
          <p class="profile-text">自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。</p>
        </div>
      </div>
      <div class="pick-up fadein">
        <h4>Pick Up</h4>
        <ul class="pick-up-list">

        <?php
       $pickup_query = new WP_Query(array (
        'category_name' => 'pickup',
        'posts_per_page' => 5
       ));
         if ($pickup_query -> have_posts()):
          while ($pickup_query -> have_posts()):
            $pickup_query -> the_post();
       ?>

          <li class="pick-up-item fadein">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(null, array('class' => 'thumbnail'));?>           
              <p><?php the_time( get_option('date_format') ); ?></p>
              <h5><?php the_title(); ?></h5>
            </a>
          </li>

          <?php
            endwhile;
           else:
        ?>
        <p>投稿データがありませんでした。</p>
        <?php 
      endif;
      wp_reset_postdata();
       ?>
        </ul>
      </div>

    </aside>

