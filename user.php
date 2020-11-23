<!--　トップページ　 created by Hirokazu Niimoto-->

<?php include "getdata.php" ?>
<?php include "login.php" ?>

<?php
//session_start();
if(!isset($_SESSION["NAME"])) {

  /** JavaScript出力開始 */
  echo <<<EOM
  <script type="text/javascript">
  alert('ログインしてください。');
  $(function(){
    $('#my_button').on('click', function(){
      alert('Button is clicked');
    });
  });
  </script>
  EOM;
  /** JavaScript出力終了 */

	$no_login_url = "main.php";
	header("Location: {$no_login_url}");
	exit;
}
?>

<?php

if(isset($_POST['chatsend'])) {
  $USER = 'root';
  $PW = 'pass';
  $dnsinfo = "mysql:dbname=internshiptest;host=localhost;charset=utf8";
  $text = $_POST['addchattext'];

  //echo "<script>addmessageclick({$text})</script>";
  //echo json_encode($text);

  /*
  try{
    $pdo = new PDO($dnsinfo,$USER,$PW);
    $res = "";

    $i2=0;
    foreach( $_POST['fields'] as $value){
      $sql = "SELECT * FROM internships WHERE Field='{$value}' ORDER BY PublicationDay DESC ;";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(null);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //$res .= $row['InternshipTitle'] ."," .$row['InternshipText'] ."," .$row['Field'] ."<br>\n";

        $cardimagenumber = array_rand($cardimages);
        $cardimage = $cardimages[$cardimagenumber];

        $res .=<<<_CARD
        <!-- Card -->
        <div class="card card-image mt-5"
          style="background-image: url({$cardimage});">

          <!-- Content -->
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
              <h5 class="pink-text">{$row['Field']}</h5>
              <h3 class="card-title pt-2"><strong></strong>{$row['InternshipTitle']}</h3>
              <p>{$row['InternshipText'] }</p>
              <a class="btn btn-pink"><i class="fas fa-clone left"></i>このインターンシップを見る</a>
            </div>
          </div>

        </div>
        <!-- Card -->
        _CARD;
        }

        //カードが一定以上の数になったら抜け出す
        $i2 = $i2+1;
        if ($i2==3){
          break;
      }
    }*/

    /*
    $res .=<<<_BUTTON
    <form class="row pt-5" action="main.php#addinternship" method="post">
      <div class="col-4"></div>
      <button  class="btn btn-outline-primary btn-rounded waves-effect col-4" type="submit" name="addpartially" value=1>もっと見る</button>
      <div class="col-4"></div>
    </form>
_BUTTON;
  */
  /*
  }catch(PDOException $e){
    $res = $e->getMessage();
  }
  */
//}
 ?>

 <?php
 /*
 if(isset($_POST['chatsend'])) {
   $USER = 'root';
   $PW = 'pass';
   $dnsinfo = "mysql:dbname=internshiptest;host=localhost;charset=utf8";
   $text = $_POST['addchattext'];

   echo "<script>addmessageclick({$text})</script>";*/

   /*
   try{
     $pdo = new PDO($dnsinfo,$USER,$PW);
     $res = "";

     $i2=0;
     foreach( $_POST['fields'] as $value){
       $sql = "SELECT * FROM internships WHERE Field='{$value}' ORDER BY PublicationDay DESC ;";
       $stmt = $pdo->prepare($sql);
       $stmt->execute(null);
       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
         //$res .= $row['InternshipTitle'] ."," .$row['InternshipText'] ."," .$row['Field'] ."<br>\n";

         $cardimagenumber = array_rand($cardimages);
         $cardimage = $cardimages[$cardimagenumber];

         $res .=<<<_CARD
         <!-- Card -->
         <div class="card card-image mt-5"
           style="background-image: url({$cardimage});">

           <!-- Content -->
           <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
             <div>
               <h5 class="pink-text">{$row['Field']}</h5>
               <h3 class="card-title pt-2"><strong></strong>{$row['InternshipTitle']}</h3>
               <p>{$row['InternshipText'] }</p>
               <a class="btn btn-pink"><i class="fas fa-clone left"></i>このインターンシップを見る</a>
             </div>
           </div>

         </div>
         <!-- Card -->
         _CARD;
         }

         //カードが一定以上の数になったら抜け出す
         $i2 = $i2+1;
         if ($i2==3){
           break;
       }
     }*/

     /*
     $res .=<<<_BUTTON
     <form class="row pt-5" action="main.php#addinternship" method="post">
       <div class="col-4"></div>
       <button  class="btn btn-outline-primary btn-rounded waves-effect col-4" type="submit" name="addpartially" value=1>もっと見る</button>
       <div class="col-4"></div>
     </form>
 _BUTTON;
   */
   /*
   }catch(PDOException $e){
     $res = $e->getMessage();
   }
   */
 }
  ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>アプリ名</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="static/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="static/css/style.min.css" rel="stylesheet">

    <link href="static/css/additional.css" rel="stylesheet">

    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
          background: #1C2331 !important;
        }
      }
      .navbar{background-color:rgba(0,136,255,0.7);}

    </style>

    <!-- jQueryをCDNから読み込み -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


  </head>
  <body>


        <!--チャット一覧モーダル-->
        <!-- Modal -->
        <div class="modal fade" id="chatlistmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">

          <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">

            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">メッセージ一覧</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- メッセージCard -->
                <div class="card mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <a class="" onclick="autoScroll()" data-toggle="modal" data-target="#chatmodal" data-dismiss="modal"><h4 class="card-title">株式会社re-vol</h4></a>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->
                <!-- メッセージCard -->
                <div class="card  mt-1">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><a>Card title</a></h4>
                  </div>
                </div>
                <!-- メッセージCard -->


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!--チャット一覧モーダル-->

        <script type="text/javascript">
        /*時間を作る関数*/
        function sleep(waitMsec) {
          var startMsec = new Date();
          // 指定ミリ秒間だけループさせる（CPUは常にビジー状態）
          while (new Date() - startMsec < waitMsec);
        }


        /*自動スクロールのスクリプト*/
        var $scrollY = 0;
        function autoScroll() {

          const spinner = document.getElementById('loading');

          var $sampleBox = document.getElementById("scroll-box");
          $sampleBox.scrollTop = ++$scrollY;
          $sampleBox.scrollTop = $sampleBox.scrollHeight;

          //console.log($sampleBox.scrollHeight);
          //console.log($sampleBox.clientHeight);
          //console.log($scrollY)
          //console.log($sampleBox.scrollTop)

          if( $scrollY < $sampleBox.scrollHeight - $sampleBox.clientHeight ){
            $scrolly=$sampleBox.scrollHeight - $sampleBox.clientHeight;
            console.log($sampleBox.scrollHeight - $sampleBox.clientHeight);
            console.log($scrollY);
            //console.log("OK");
            spinner.classList.add('loaded');
            console.log("Finish");
            return;
            setTimeout( "autoScroll()", 1 );
          }else if($scrollY == $sampleBox.scrollHeight - $sampleBox.clientHeight){
            spinner.classList.add('loaded');
            //console.log("Finish");
            return;
          }else{
              $scrollY = 0;
              $sampleBox.scrollTop =0;
              setTimeout( "autoScroll()", 1 );
        }}

        /*
        function autoScroll(){
          const spinner = document.getElementById('loading');
          spinner.classList.add('loaded');
          var speed = 1; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
          var interval = 100; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
          var scrollTop = document.body.scrollTop;
          setInterval(function() {
              var scroll = scrollTop + speed;
              scrollTop.scrollBy(0, scroll)
          },interval);
        }
        */

        /*メッセージを追加する関数*/
        function addmessageclick(){
          $.get("/",function(){
            var myh1 = document.getElementById("addmessage");
            myh1.innerHTML = `<!-- メッセージセット -->
            <div class="card mt-4 ml-5" style="background-color:rgba(0,136,255,0.7);">
              <!-- Card content -->
              <div class="card-body" >
                <!-- Title -->
                <h5 class="card-title"><a>自分</a>/13:24</h5>

                <hr>
                <!-- Text -->
                <h2 class="card-text black-text" style="font-size:16px;">このたび、御社のホームページを拝見し、掲載されている「○○○」につきまして、当社で購入を検討しております。
                  お忙しいなか大変恐縮ですが、関連する資料を以下の住所までお送りいただけますでしょうか。</h2>
              </div>
            </div>
            <!-- メッセージセット -->
            `;
              })

          setTimeout( "autoScroll()", 100 );

        }


        </script>


        <!--チャットモーダル -->
        <!-- Modal -->
        <div class="modal fade" id="chatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">

          <!-- チャットモーダルのローディング画面　-->
          <div id="loading">
            <div class="spinner"></div>
            <h2 class="mt-2 text-center white-text">少々お待ちください</h2>
          </div>


          <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">

            <div class="modal-content" >
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">メッセージ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="scroll-box">

                <p class="mt-4 text-center">2020/11/21</p>

                <!-- メッセージセット -->
                <div class="card mt-4 ml-5" style="background-color:rgba(0,136,255,0.7);">
                  <!-- Card content -->
                  <div class="card-body" >
                    <!-- Title -->
                    <h5 class="card-title"><a>自分</a>/13:24</h5>

                    <hr>
                    <!-- Text -->
                    <h2 class="card-text black-text" style="font-size:16px;">このたび、御社のホームページを拝見し、掲載されている「○○○」につきまして、当社で購入を検討しております。
                      お忙しいなか大変恐縮ですが、関連する資料を以下の住所までお送りいただけますでしょうか。</h2>
                  </div>
                </div>
                <!-- メッセージセット -->

                <!-- メッセージセット -->
                <div class="card mt-4 mr-5">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h5 class="card-title"><a>株式会社re-vol</a>/14:24</h5>

                    <hr>
                    <!-- Text -->
                    <p class="card-text black-text " style="font-size:16px;">お世話になっております。株式会社○○の△△でございます。</p>
                  </div>
                </div>
                <!-- メッセージセット-->

                <!-- メッセージセット -->
                <div class="card mt-4 ml-5" style="background-color:rgba(0,136,255,0.7);">
                  <!-- Card content -->
                  <div class="card-body" >
                    <!-- Title -->
                    <h5 class="card-title"><a>自分</a>/15:24</h5>

                    <hr>
                    <!-- Text -->
                    <h2 class="card-text black-text" style="font-size:16px;">いつもお世話になっております。
                      株式会社○○の田中太郎でございます。
                      △月△日付けでご送付いたしました○○のファイルに関しまして
                      一部表記に誤りがございました。
                      大変申し訳ございません。
                      つきましては、修正したファイルを再送させていただきます。
                      ご査収くださいますようお願い申し上げます。</h2>
                  </div>
                </div>
                <!-- メッセージセット -->

                <p class="mt-4 text-center">2020/11/22</p>

                <!-- メッセージセット -->
                <div class="card mt-4 mr-5">
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h5 class="card-title"><a>株式会社re-vol</a>/16:24</h5>

                    <hr>
                    <!-- Text -->
                    <p class="card-text black-text " style="font-size:16px;">○月○日にメールでお願いしておりました△△についてですが、
                      その後の進捗はいかがでしょうか。
                      当資料が必要となる会議が今週金曜日と迫っているため、
                      本日15時までにご送付をお願いできますでしょうか。</p>
                  </div>
                </div>
                <!-- メッセージセット-->

                <div class="" id="addmessage">

                </div>

              </div>

              <!--<form class="" action="" method="post">-->
                <div class="">
                  <hr>
                  <div class="form-group shadow-textarea ml-2 mr-2">
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="メッセージを入力" name="addchattext"></textarea>
                  </div>
                </div>
                <div class="modal-footer pt-1">
                  <button type="submit" class="btn btn-primary" onclick="addmessageclick()" name="chatsend">送信</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div>
              <!--</form>-->
            </div>
          </div>
        </div>



        <!--インターンシップを探すモーダル-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">

          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLongTitle"><strong>職種を選択してください</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body row">
              <div class="col-md-3 col-2"></div>

              <form class="col-md-6 col-8" action="main.php#allinternship" method="POST">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked1" value="エンジニア" name=fields[]>
                    <label class="custom-control-label " for="defaultUnchecked1">エンジニア</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" value="" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked2">デザイン・アート</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked3">編集・ライティング</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" value="マーケティング" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked4">マーケティング・PR</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked5" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked5">セールス・事業開発</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked6" value="コンサルティング" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked6">コンサルティング</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked7" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked7">メディカル系</label>
                </div>
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked8" name=fields[]>
                    <label class="custom-control-label" for="defaultUnchecked8">その他</label>
                </div>
                <hr>

                <button type="submit" class="btn btn-primary" name="searchfield">上記の条件で探す</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>

              </form>
              <div class="col-md-3 col-2"></div>
            </div>
            <!--
            <div class="modal-footer">
              <form class="" action="index.html" method="post">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save changes</button>
              </form>
            </div>-->
          </div>
        </div>
      </div>

        <!--インターンシップを探すモーダル終わり-->



    <!-- Navbar primary-color-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="user.php" >
          <strong>アプリ名</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="outline.php">アプリ名とは</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php" >検索</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">アカウント</a>
            </li>
          -->
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">問い合わせ</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/sharer/sharer.php?u=" class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/share" class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <!-- Basic dropdown -->
              <a  class="nav-link border border-light rounded dropdown-toggle"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdownMenuLink-333">
                ようこそ、<?php
                echo $_SESSION['NAME'];
                 ?> さん
              </a>

              <div class="dropdown-menu float-right" id="navbarDropdownMenuLink-333">
                <a class="dropdown-item" data-toggle="modal" data-target="#chatlistmodal"><span class="ml-3">メッセージ</span></a>
                <a class="dropdown-item" href="#"><span class="ml-3">ブックマーク</span></a>
                <a class="dropdown-item" href="#"><span class="ml-3">設定</span></a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" type="submit" class="dropdown-item text-info"><i class="fas fa-sign-out-alt ml-3 mr-3"></i>ログアウト</a>
              </div>
              <!-- Basic dropdown -->

              <!--
              <form class="" action="main.php" method="post">
                <a href="main.php" type="submit" class="nav-link border border-light rounded" >
                  <i class="fas fa-sign-in-alt mr-2"></i>ログアウト
                </a>
              </form>
            -->
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Full Page Intro -->  <!--https://photohito.k-img.com/uploads/photo130/user129768/a/7/a74efb58fa3d98eedb1a35afa7b7bcb5/a74efb58fa3d98eedb1a35afa7b7bcb5_l.jpg    background-attachment: fixed;-->
    <div class="view full-page-intro top" style="background-image: url('https://careergarden.jp/dtp-designer/wp-content/blogs.dir/388/files/4a2631ded52c08e466396b3f7a2c6f97.jpg');background-color:rgba(0,98,255,0.4); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options--> <!--mask rgba-black-light-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="container">

          <!--Grid row-->
          <div class="row wow fadeIn pt-5 white-text">

            <!--Grid column-->
            <div class="col-md-12  mb-5 pt-5 text-center text-md-left">

              <p class="pt-5"></p>
              <h1 class="apptitle font-weight-bold text-center white-text">アプリ名</h1>

              <!--<hr class="hr-light">-->

              <!--
              <h3 class="pt-5 text-center appcopy">
                <strong>キャッチコピー</strong>
              </h3>
            -->


              <!--d-none d-md-block-->
              <p class="mt-5 pt-2 text-center appexplain white-text">
                <strong>説明職業選択やキャリアに関する相談を当たり前のものにしたい」 </strong>
              </p>

              <div class="pt-1"></div>
              <div class="row pt-3">
                <p class="col-md-4 col-1"></p>
                <button class="btn btn-primary btn-lg col-md-4 col-10" data-toggle="modal" data-target="#exampleModalCenter">インターンシップを探す
                  <i class="fas fa-search ml-2"></i>
                </button>
                <p class="col-md-4 col-1"></p>
              </div>

              <h3 class="text-center pt-5 watchallintern">全てのインターンシップを見る</h3>
              <div class="row icon1 pt-2">
                <p class="col-md-5"></p>
                <a href="#allinternship" class="col-md-2 text-center text-light"><i class="fas fa-3x fa-angle-double-down yureru-j"></i></a>
                <p class="col-md-5"></p>
              </div>



            </div>
            <!--Grid column-->


          </div>
          <!--Grid row-->

        </div>
        <!-- Content -->


      </div>
      <!-- Mask & flexbox options-->


    </div>
    <!-- Full Page Intro -->

    <a name="allinternship" class="pt-5"></a>
    <p class="pt-4"></p>

    <!--Main layout-->
    <main>
      <div class="container">



        <!--Section: Main info-->
        <section class="mt-5 ">

          <form class="row " action="main.php#allinternship" method="post">
            <p class=""></p>
            <p class=""></p>
            <p class="ml-4 mt-3">並べ替え</p>
            <!--<a class=" ml-4" href="#">おすすめ</a>-->
            <button class="btn btn-outline-primary btn-rounded waves-effect ml-4"  type="submit" name="popular">人気</button>
            <button class="btn btn-outline-primary btn-rounded waves-effect ml-4"  type="submit" name="new">新着</button>
          </form>

          <!--　a要素での並べ替え　保存
          <div class="row pt-5">
            <p class=""></p>
            <p class=""></p>
            <p class="ml-4">並べ替え</p>
            <a class=" ml-4" href="#">新着</a>
            <a class="ml-4" href="#">人気</a>
          </div>
        -->

          <hr>


          <?php echo $res; ?>




          <!--
          <div class="row pt-5">
            <div class="col-4"></div>
            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect col-4">もっと見る</button>-->
            <!--
            <div  class="col-4">

              <nav class="container " >
                <ul class="pagination pg-blue">

                    <li class="page-item">
                        <a class="page-link waves-effect waves-effect" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                    <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                    <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                    <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                    <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                    <li class="page-item">
                        <a class="page-link waves-effect waves-effect" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

          </div>
          <div class="col-4"></div>
          </div>-->



        </section>
        <!--Section: Main info-->

      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn " >

      <!-- Social icons -->

          <div class="col-1 pt-3"></div>
          <div class="col-12">
            <!--Section: More-->
            <section class="">

              <div class="row features-small mt-5 wow fadeIn">

              <!--
                <div class="col-xl-3 col-lg-6">
                  <div class="row ml-md-5 ml-3">
                    <div class="col-2">
                      <i class="fas fa-sitemap fa-2x mb-1 " aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2">
                      <h5 class="feature-title font-bold mb-1 ">アプリ名</h5>
                      <ul class="pt-3 text-left" style="list-style:none;">
                        <li class="mt-2"><a href="#">トップページ</a></li>
                        <li class="mt-2"><a href="#">検索ページ</a></li>
                        <li class="mt-2"><a href="#">アカウントページ</a></li>
                        <li class="mt-2"><a href="#">お問い合わせページ</a></li>
                        <li class="mt-2"><a href="#">ログインページ</a></li>
                      </ul>

                    </div>
                  </div>
                </div>
              -->

                <!--Grid column-->
                <div class="col-md-4 col-12">
                  <!--Grid row-->
                  <div class="row ml-md-5 ml-2">
                    <div class="col-2">
                      <i class="fas fa-info fa-2x mb-1 " aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2">
                      <h5 class="feature-title font-bold mb-1">企業情報</h5>
                      <p class="grey-text mt-2">企業リンク
                      </p>
                    </div>
                  </div>
                  <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-12">
                  <!--Grid row-->
                  <div class="row ml-md-0 ml-2">
                    <div class="col-2">
                      <i class="fas fa-reply fa-2x mb-1 " aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2">
                      <h5 class="feature-title font-bold mb-1">お問い合わせ</h5>
                      <p class="grey-text mt-2">お問い合わせリンク
                      </p>
                    </div>
                  </div>
                  <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-12">
                  <!--Grid row-->
                  <div class="row mr-md-5 ml-md-0 ml-2">
                    <div class="col-2">
                      <i class="fas fa-shield-alt fa-2x mb-1" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2">
                      <h5 class="feature-title font-bold mb-1">個人情報保護方針</h5>
                      <p class="grey-text mt-2">リンク
                      </p>
                    </div>
                  </div>
                  <!--/Grid row-->
                </div>
                <!--/Grid column-->

              </div>
              <!--/First row-->


            </section>
            <!--Section: More-->
          </div>

          <!--
          <div class="col-12 pt-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
              <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
              <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
              <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
              <i class="fab fa-google-plus-g mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
              <i class="fab fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
              <i class="fab fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
              <i class="fab fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
              <i class="fab fa-codepen mr-3"></i>
            </a>

          </div> -->







      <!--Copyright-->
      <div class="footer-copyright py-3 pt-2" >
        © 2020 Copyright:
        <a href="https://re-vol.net/" target="_blank"> Re-VOL.Inc. </a>
      </div>
      <!--/.Copyright-->

    </footer>
    <!--/.Footer-->





    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="static/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="static/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="static/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();
    </script>
  </body>
</html>
