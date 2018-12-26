<?php
require_once 'util.inc.php';
require_once 'db.inc.php';

try{
    $pdo = db_init();
    // newsテーブルからデータの取得
    // CURDATE()は現在の日時を取得
    // ⇒現在の日付以前の新着情報のみ表示
    // ⇒あらかじめ先々の新着情報をいれておける
    $sqi = "SELECT *FROM news
            WHERE posted <= CURDATE()
            ORDER BY posted DESC
            LIMIT 0, 5";
    $stmt = $pdo -> query($sqi);
    $newsList = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//     var_dump($newsList);

}
catch(PDOException $e){
    echo $e -> getMessage();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width">
<title>ろう画と猫のウォネとハンドメイド｜エフリエこうぼう</title>
<meta name="description" content="エフリエこうぼうは、">
<!-- <meta name="keywords" content="ろう画,蝋画,ウォネとその他の皆さん,ハンドメイド,イラストレーション"> -->
<meta name="robots" content="noindex,nofollow,noarchive" />
<!-- 検索エンジンに検索されないようにする -->
<link rel="icon" href="favicon.ico"><!-- ファビコン -->
<link href="css/sanitize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/nav01.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){

});
</script>
</head>


<body id="top" class="page news_page">

<header class="page-head">
    <div class="logo">
<a href="index.html" id=""><img src="images/logo2.svg" alt=""></a></div>
    <ul class="top_sns">
        <li><a href="https://twitter.com/friekobo"><i class="fab fa-twitter"></i></a></li>
         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>

    <nav class="page-nav">
        <ul class="top-nav">
            <li><a href="index.html">Top</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="http://blog.friekobo.com">Blog</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="index.html#contact">Contact</a></li>
        </ul>
    </nav>
</header>




<main class="page-main">

<!-- row ここからがいるもの-->
      <div class="news_main">
        <div class="news_title">
            <h2>News</h2>
            <h3>最新情報・お知らせ</h3>
        </div>
      <?php foreach ($newsList as $news): ?>

            <div class="news_body">
                <dl>
                    <dt><p><?php h($fmt); ?>
                    <?php h($news["title"]); ?>
                <?php
                    $d = new DateTime($news["posted"]);
                    $fmt = $d -> format("F j, Y")?></p>
                </dt><!-- タイトル -->
                    <dd>
                        <p><?php h($news["message"]); ?></p><!-- お知らせの中身 -->
                    </dd>
                </dl>
            </div>
            <?php endforeach; ?>

    </div><!-- /row ここまでがいるもの-->



<div class="top_bgimg">
    <img class="dassensunzen" src="images/top/top_dassen.jpg" alt="">
</div>
</main>
<!-- /.main -->

<button type="button" class="page-btn" onclick="myFunc()">
    <span class="fas fa-bars" title="メニューを開く"></span>
</button>

<button type="button" class="page-btn-close" onclick="myFunc()">
    <span class="fas fa-times" title="メニューを閉じる"></span>
</button>

<footer class="page-foot">
    <ul>
        <li><a href="https://twitter.com/friekobo/"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/friekobo/"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/friekobo/"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <small>copyright &copy; 2018 FRiekobo</small>
</footer>

<script>
function myFunc() {
    document.querySelector('.page').classList.toggle('open');
}
</script>


</body>
</html>