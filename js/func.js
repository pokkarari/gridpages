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