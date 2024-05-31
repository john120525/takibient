$(function() {
  $(".toggle-btn").click(function() {
    $("header").toggleClass("open")
  });

  $(".mask").click(function() {
    $("header").removeClass("open")
  });

  $(".modal-nav a").click(function() {
    $("header").removeClass("open")
  });

  $(window).on('load',function(){
    $("#splash").delay(1500).fadeOut('slow');
    $("#splash_logo").delay(1200).fadeOut('slow');
  });

  $('.slider').slick({
		fade:true,//切り替えをフェードで行う。初期値はfalse。
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 5000,//次のスライドに切り替わる待ち時間
		speed:1000,//スライドの動きのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 1,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
		arrows: true,//左右の矢印あり
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: true,//下部ドットナビゲーションの表示
        pauseOnFocus: false,//フォーカスで一時停止を無効
        pauseOnHover: false,//マウスホバーで一時停止を無効
        pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
    $('.slider').slick('slickPlay');
});
})

$(function () {
  var $demo1 = $('.masonry');   //コンテナとなる要素を指定

  $demo1.imagesLoaded(function(){ //imagesLoadedを使用し、画像が読み込みまれた段階でMasonryの関数を実行させる
    //Masonryの関数↓
    $demo1.masonry({              //オプション指定箇所
      itemSelector: '.item',   //コンテンツを指定
      // columnWidth: 10,           //カラム幅を設定
      fitWidth: true,  
      gutter: 16,
    });
  });


$(window).on('load', function () {
  // fadeinクラスに対して順に処理を行う
  $(".top_fadein").each(function () {
    // スクロールした距離
    let scroll = $(window).scrollTop();
    // fadeinクラスの要素までの距離
    let target = $(this).offset().top;
    // 画面の高さ
    let windowHeight = $(window).height();
    // fadeinクラスの要素が画面下にきてから200px通過した
    // したタイミングで要素を表示
    if (scroll > target - windowHeight + 200) {
      $(this).css("opacity", "1");
      $(this).css("transform", "translateY(0)");
    }
  });
});

$(window).scroll(function () {
  // fadeinクラスに対して順に処理を行う
  $(".fadein").each(function () {
    // スクロールした距離
    let scroll = $(window).scrollTop();
    // fadeinクラスの要素までの距離
    let target = $(this).offset().top;
    // 画面の高さ
    let windowHeight = $(window).height();
    // fadeinクラスの要素が画面下にきてから200px通過した
    // したタイミングで要素を表示
    if (scroll > target - windowHeight + 200) {
      $(this).css("opacity", "1");
      $(this).css("transform", "translateY(0)");
    }
  });
});

let head = $(".header-top");
// 最初に画面が表示された時は、トップに戻るボタンを非表示に設定
head.hide();

// スクロールイベント（スクロールされた際に実行）
$(window).scroll(function () {
  // スクロール位置が700pxを超えた場合
  if ($(this).scrollTop() > 700) {
    // トップに戻るボタンを表示する
    head.fadeIn();

    // スクロール位置が700px未満の場合
  } else {
    // トップに戻るボタンを非表示にする
    head.fadeOut();
  }
});

});