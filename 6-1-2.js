$(document).ready(function(){
    if (typeof $.fn.slick === 'undefined') {
        console.error('Slick is not loaded properly');
    } else {
        console.log('Slick is loaded successfully');
    }

    console.log('Initializing slider...');

    $('.slider').slick({
        fade: true, // 切り替えをフェードで行う
        autoplay: true, // 自動的に動き出す
        autoplaySpeed: 3000, // 次のスライドに切り替わる待ち時間
        speed: 1000, // スライドの動きのスピード
        infinite: true, // スライドをループさせる
        slidesToShow: 1, // スライドを画面に1枚見せる
        slidesToScroll: 1, // 1回のスクロールで1枚の写真を移動
        arrows: true, // 左右の矢印あり
        prevArrow: '<div class="slick-prev"></div>', // 矢印部分PreviewのHTMLを変更
        nextArrow: '<div class="slick-next"></div>', // 矢印部分NextのHTMLを変更
        dots: true, // 下部ドットナビゲーションの表示
        pauseOnFocus: false, // フォーカスで一時停止を無効
        pauseOnHover: false, // マウスホバーで一時停止を無効
        pauseOnDotsHover: false, // ドットナビゲーションをマウスホバーで一時停止を無効
    });

    console.log('Slider initialized');

    // スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
    $('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
        $('.slider').slick('slickPlay');
    });

});
