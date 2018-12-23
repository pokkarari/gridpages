// jquery.masorny.js ギャラリーを並べる

    $(function (){
  var $container = $("#content");
  $conteniner.imagesloaded(function(){
  $conteniner.masonry({
    itemSelector: ".item";//コンテンツのclass名
    columnWidth: 250;//カラムの幅を設定
    isFitWidth: true;//コンテナの親要素のサイズに基づいて、コンテンツのカラムを自動調節します。
      })
    });
  });


    // jquery.masorny.js ギャラリーを並べる
jQuery(function($){

  var container = document.querySelector('#gallery');

  imagesLoaded(container, function () {
    var msnry = new Masonry(container, {
      itemSelector: '.item', //コンテンツのclass名
      isFitWidth: true, //コンテナの親要素のサイズに基づいて、コンテンツのカラムを自動調節します。
      columnWidth: 310, //カラムの幅を設定
    });

    $('#loading').fadeOut(300); //画像が読み込み終わったらloadingを非表示にする
    $('#gallery').addClass('on'); //コンテナにclassを付与して表示を切り替える

  });
});