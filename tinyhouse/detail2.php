<?php
// エラー出力しない場合
ini_set('display_errors', 0);
//更新ページ
$id=$_GET["id"];

//0.外部ファイル読み込み
session_start();
include("function.php");
chkSsid();


//2.DB接続など
$pdo = db_con();



//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM tiny_info WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();
//３．データ表示
if($status==false){
  queryError($stmt);
}else{
  
  while( $result = $stmt->fetch()){
   
    $view1 .= '<img src="'.$result["image1"].'" ">';
    $view2 .=$result["housename"];
    $view3 .=$result["introduction"];
    $view4 .=$result["price"];
    $view5 .=$result["tel"];
    $view4.=$result["tag1"];
    $view5.=$result["tag2"];
    $view6.=$result["tag3"];
    
    
    
  
    }
  
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>テスト | DIYしたい人と職人を結ぶマッチングサービス</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#">テストテストテスト</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a href="select3.php">ホーム</a></li>
              
              
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">テストテストとは？</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">オーナー募集</a></li>
              <li><a href="login2.php">ログイン</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">お問い合わせ</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">お知らせ</a></li> 
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
     
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-3 sidebar">
                <div class="widget">
                  <form role="form">
                    <div class="search-box">
                      <input class="form-control" type="text" placeholder="検索する"/>
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
  
                
                <div class="widget">
                  <h5 class="widget-title font-alt">タグ</h5>
                  <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#" rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
                  </div>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">テスト</h5>テスト
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">テスト</h5>
                  <ul class="icon-list">
                    <li>テスト<a href="#">テスト</a></li>
                    <li>テスト<a href="#">テスト</a></li>
                    <li>テスト<a href="#">テスト</a></li>
                    <li>テスト<a href="#">テスト</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-1">
                <div class="post">
                  <div class="post-thumbnail"> <?=$view1?></div>
                  <br>
                  <br>
                  <div class="post-header font-alt">
                    <h2 class="post-title">物件名 | <?=$view2?></h2>
                   
                  </div>
                  <div class="post-entry">
                    <p><?=$view3?></p>
                  </div>

                </div>
                <div class="post #">
                  <div class="post-header font-alt">
                    <h2 class="post-title">基本情報</h2>
                    ああああああああああああああああああああ
                    ああああああああああああああああああああ
                  </div>
                  <div class="post-entry">
                    <p></p>
                  </div>
                  <div class="post-more"><a class="more-link" href="Post with text only">Read more</a></div>
                </div>
               
               
              
                <div role="tabpanel">
                  <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active"><a href="#support" data-toggle="tab"><span class="icon-tools-2"></span>料金</a></li>
                    <li><a href="#sales" data-toggle="tab"><span class="icon-tools-2"></span>備考</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="support"><?=$view4?></div>
                    <div class="tab-pane" id="sales"><?=$view5?></div>
                  </div>
                </div>
                <h4 class="font-alt mb-0">テスト</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">テスと</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="support1">
                      <div class="panel-body">テスト
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">テスト</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support2">
                      <div class="panel-body">テスト
                      </div>
                    </div>
                  </div>
                </div>
             
                <div class="post">
                  <div class="post-quote">
                    <blockquote class="font-serif">
                      <p>&quot; 彼は素晴らしい人です。彼のような人なら素晴らしい仕事をしてくれるでしょう &quot;</p>
                      <p class="font-inc font-uppercase">- 建築家 xxxxx氏</p>
                    </blockquote>
                  </div>
                </div>
                <div class="post">
                <label>物件名：<input type="text" name="housename" value="<?=$row["housename"]?>"></label><br>
     <label>紹介文：<textArea name="introduction" rows="4" cols="40" value="<?=$row["introduction"]?>"></textArea></label><br>
     <label>住所：<input type="text" name="address" value="<?=$row["address"]?>"></label><br>
     <label>電話番号：<input type="text" name="tel" value="<?=$row["tel"]?>"></label><br>
     <label>料金：<input type="text" name="price" value="<?=$row["price"]?>"></label><br>
     <label>収容人数：<input type="text" name="person" value="<?=$row["person"]?>"></label><br>
     <label>アクセス：<input type="text" name="access" value="<?=$row["access"]?>"></label><br>
     <label>リッチの特徴：<input type="text" name="tag1" value="<?=$row["tag1"]?>"></label><br>
     <label>貸切or共有：<input type="text" name="tag2" value="<?=$row["tag2"]?>"></label><br>
     <label>設備：<input type="text" name="tag3" value="<?=$row["tag3"]?>"></label><br>
     
     <h4 class="font-alt mb-0">xxxさんの得意 / 不得意な分野</h4>
                <hr class="divider-w mt-10 mb-20">
                <h6 class="font-alt"><span class="icon-tools-2"></span> かっこよさ
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-strategy"></span> おしゃれさ
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-target"></span> かわいさ
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-camera"></span> 自然さ
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">テストテスト</h5>
                  <p>テストテストテストテスト</p>
                  <p>テストテストテストテスト</p>テストテストテストテスト
                  <p>メール:<a href="#">テストテストテストテスト</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">テストテストテストテスト</h5>
                  <ul class="icon-list">
                    <li>テスト<a href="#">テストテストテストテスト</a></li>
                    <li>テスト<a href="#">テストテストテストテスト</a></li>
                    <li>テスト<a href="#">テストテストテストテスト</a></li>
                    <li>テスト<a href="#">テストテストテストテスト</a></li>
                    <li>テスト<a href="#">テストテストテストテスト</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">テスト</h5>
                  <ul class="icon-list">
                    <li><a href="#">テスト</a></li>
                    <li><a href="#">テスト</a></li>
                    <li><a href="#">テスト</a></li>
                    <li><a href="#">テスト</a></li>
                    <li><a href="#">テスト</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">テスト</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">テスト</a></div>
                        <div class="widget-posts-meta">テスト</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">テスト</a></div>
                        <div class="widget-posts-meta">テスト</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">テスト</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>

    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>