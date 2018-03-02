<?php
//0.外部ファイル読み込み
include("function.php");

//0.wordpress新着記事読み込み
require('./news/wp-load.php');

//1.  DB接続します
$pdo = db_con();


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM tiny_info");
$status = $stmt->execute();
//３．データ表示
$view="";
if($status==false){
//execute（SQL実行時にエラーがある場合）
$error = $stmt->errorInfo();
exit("ErrorQuery:".$error[2]);
}else{
//Selectデータの数だけ自動でループしてくれる
while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<section class="module-medium" id="demos">';
    $view .= '<div class="container">';
    $view .= '<div class="row multi-columns-row">';
    $view .= '<div class="col-md-4 col-sm-6 col-xs-12">';
    $view .= '<a class="content-box">';
    $view .= '<div class="content-box-image">';
    $view .= '<img src="'.$result["image1"].'" ">';
    $view.='</div>';
    $view.='<a href="detail2.php?id='.$result["id"].'">';//アンカータグはシングルクオートで
    $view.='<h3 class="content-box-title font-serif" style="text-align: center;">';
    $view.='<font style="margin-right:8px;">'.$result["area"].'</font>'.'|'.'<font style="margin-left:8px;">'.$result["housename"].'</font>';
    $view.='</h3>';
    $view.='</a>';
    $view.='<font style="border:#CCCCCC solid 1px; margin:5px;padding:5px;">';
    $view.=$result["tag1"];
    $view.='</font>';
    $view.='<font style="border:#CCCCCC solid 1px; margin:5px;padding:5px;">';
    $view.=$result["tag2"];
    $view.='</font>';
    $view.='<font style="border:#CCCCCC solid 1px; margin:5px;padding:5px;">';
    $view.=$result["tag3"];
    $view.='</font>';
    $view.='</div>';
    $view.='</div>';
    $view.='</section>';
    
  
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
    <title>テスト | DIYの職人とユーザーのマッチングサービス</title>
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
              <li class="dropdown"><a class="dropdown-toggle" href="select3.php" data-toggle="dropdown">ホーム</a></li>
              
              
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">テストテストとは？</a></li>
               
             
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">オーナー募集</a></li>
              <li><a href="login2.php">ログイン</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">お問い合わせ</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">お知らせ</a></li> 
            </ul>
          </div>
        </div>
      </nav>
      <section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="assets/images/top1.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">気軽に職人に依頼できる</div>
            <div class="font-alt mb-40 titan-title-size-4">DIYをもっと身近に</div><a class="section-scroll btn btn-border-w btn-round" href="#">職人を探す</a>
          </div>
        </div>
      </section>
      <section class="module-small">
          <div class="container">
            <form class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">ジャンル</option>
                  <option>壁紙</option>
                  <option>イス</option>
                  <option>つくえ</option>
                  <option>照明</option>
                  <option>小屋・物置</option>
                  <option>ベランダ</option>
                  <option>本棚・棚</option>
                  <option>インテリア</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">スタイル</option>
                  <option>スタイリッシュ</option>
                  <option>かわいい</option>
                  <option>自然・ぬくもり</option>
                  <option>シンプル</option>
                  <option>落ち着いた</option>
                  <option>明るい</option>
                  
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">予算</option>
                  <option>~¥1,000</option>
                  <option>¥1,000~¥4,999</option>
                  <option>¥5,000~¥9,999</option>
                  <option>¥10,000~¥49,999</option>
                  <option>¥50,000~¥100,000</option>
                  <option>¥100,000~</option>
                  
                </select>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit">この条件で探す</button>
              </div>
            </form>
          </div>
        </section>

        <div class="main">
        <section>
        <h2 class="module-title font-alt">DIYのジャンルから選ぶ</h2>
          <div class="container">
           
            <ul class="works-grid works-grid-gut works-grid-4 works-hover-w" id="works-grid">
              <li class="work-item illustration webdesign"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/kabegami.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">壁紙交換</h3>
                    <div class="work-descr">かわいくておしゃれな壁紙</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/light.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">ライト・照明</h3>
                    <div class="work-descr">雰囲気をよくするおしゃれな照明</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/desk.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">つくえ</h3>
                    <div class="work-descr">仕事や勉強に最適な自然のつくえ</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/isu.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">椅子・チェアー</h3>
                    <div class="work-descr">ゆったり座れるおしゃれなイス</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/komono.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">小物入れ</h3>
                    <div class="work-descr">インテリアとしても使えるかわいい小物入れ</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/tana.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">棚・本棚</h3>
                    <div class="work-descr">部屋を彩るおしゃれな棚</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/belanda.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">庭・ベランダ</h3>
                    <div class="work-descr">ベランダは心安らぐ快適な空間</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="#">
                  <div class="work-image"><img src="assets/images/portfolio/koya.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">小屋・物置</h3>
                    <div class="work-descr">おしゃれな小屋や物置はいかがでしょうか？</div>
                  </div></a></li>
            </ul>
          </div>
        </section>

         <div class="main">
         <section class="module-small">
          <div class="container">
        <h2 class="module-title font-alt">xxxおすすめのDIY・インテリア</h2>
          <div class="container">
           
            <ul class="works-grid works-grid-gut works-grid-4 works-hover-w" id="works-grid">
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
              <?=$view?></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="assets/images/portfolio/light.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">ライト・照明</h3>
                    <div class="work-descr">雰囲気をよくするおしゃれな照明</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="portfolio_single_featured_slider1.html">
                  <div class="work-image"><img src="assets/images/portfolio/desk.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">つくえ</h3>
                    <div class="work-descr">仕事や勉強に最適な自然のつくえ</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_slider2.htmll">
                  <div class="work-image"><img src="assets/images/portfolio/isu.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">椅子・チェアー</h3>
                    <div class="work-descr">ゆったり座れるおしゃれなイス</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="assets/images/portfolio/komono.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">小物入れ</h3>
                    <div class="work-descr">インテリアとしても使えるかわいい小物入れ</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_video2.html">
                  <div class="work-image"><img src="assets/images/portfolio/tana.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">棚・本棚</h3>
                    <div class="work-descr">部屋を彩るおしゃれな棚</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_image1.html">
                  <div class="work-image"><img src="assets/images/portfolio/belanda.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">庭・ベランダ</h3>
                    <div class="work-descr">ベランダは心安らぐ快適な空間</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="assets/images/portfolio/koya.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">小屋・物置</h3>
                    <div class="work-descr">おしゃれな小屋や物置はいかがでしょうか？</div>
                  </div></a></li>
            </ul>
          </div>
        </section>

<table border=1>
<?php $col = 2; /* カラム数 */?>
<?php $i = 0; ?>
<?php foreach ($values as $value) { ?>
	<?php if ($i%$col == 0) echo '<tr>' ?>
        <?php echo '<td>' . $value['表示順'] . ':
 ' . $value['画像'] . ': ' . $value['名前'] . '</td>' ?>
	<?php if ($i%$col == $col-1) echo '</tr>' ?>
    <?php $i++ ?>//繰り返し
<?php } ?>
</table>
      
        
     

    

      
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <div class="col-sm-8 col-sm-offset-1">
 <div class="comments">
                  <h4 class="comment-title font-alt">ブログを更新中！</h4>
                  <div class="comment clearfix">
                    <div class="comment-content clearfix">
                    <?php
$posts = get_posts("numberposts=5&orderby=post_date&offset=0");
foreach ($posts as $post):
setup_postdata($post);
?>
                      <div class="comment-author font-alt" style="margin-top:15px;"><?php the_title() ?></div>
                     <div class="comment-meta font-alt"><?php the_time('Y.m.d') ?>
                     <div class="comment-meta font-alt"><?php the_comment() ?>
                     <br>
                      <?php endforeach; ?>  
                    </div>
                    </div>
</div>
                </div>

    
              

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
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>