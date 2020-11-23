<!--　トップページ　 created by Hirokazu Niimoto-->

<?php include "getdata.php" ?>
<?php include "login.php" ?>
<?php include "signup.php" ?>
<?php
/** JavaScript出力開始 */
//echo <<<EOM

//EOM;
/** JavaScript出力終了 */
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


  </head>
  <body>

    <!-- ローディング画面-->
    <div id="loading">
      <div class="spinner"></div>
      <h2 class="mt-2 text-center white-text">少々お待ちください</h2>
    </div>

        <form class="" action="" method="post">
          <!--ログインモーダル-->
          <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">ログイン</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="email" id="defaultForm-email" class="form-control validate" name="userinfo">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">メールアドレス</label>
                </div>

                <div class="md-form mb-4">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
                  <label data-error="wrong" data-success="right" for="defaultForm-pass">パスワード</label>
                </div>

              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary" type="submit" name="login">ログイン</button>
                <p class="mt-3 ml-2">または</p>
                <!--<button class="btn btn-primary ml-2">新規登録</button>-->
                <a href="" class="" data-dismiss="modal" data-toggle="modal" data-target="#modalRegisterForm">新規登録</a>
              </div>

              <div class="pt-2">
                <?php echo $errorMessage ?>
              </div>
            </div>

          </div>
        </div>
          <!--ログインモーダル終わり-->
      </form>

        <form class="" action="main.php" method="post">
          <!--新規登録モーダル-->
          <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">新規登録</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" id="orangeForm-name" class="form-control validate" name="username">
                  <label data-error="wrong" data-success="right" for="orangeForm-name">ユーザー名</label>
                </div>
                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="email" id="orangeForm-email" class="form-control validate" name="usermail">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">メールアドレス</label>
                </div>

                <div class="md-form mb-4">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input type="password" id="orangeForm-pass1" class="form-control validate" name="password">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass1">パスワード</label>
                </div>

                <div class="md-form mb-4">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input type="password" id="orangeForm-pass2" class="form-control validate" name="password2">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass2">パスワード（確認）</label>
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" name="signUp">登録</button>
              </div>

              <div class="pt-2">
                <?php echo $errorMessage ?>
              </div>
            </div>
          </div>
        </div>
          <!--新規登録モーダル終わり-->

        </form>

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
        <a class="navbar-brand" href="main.php" >
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
            <li class="nav-item">
              <a href="" class="nav-link border border-light rounded" data-toggle="modal" data-target="#modalLoginForm">
                <i class="fas fa-sign-in-alt mr-2"></i>ログイン
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->



    <!-- Full Page Intro -->  <!--https://photohito.k-img.com/uploads/photo130/user129768/a/7/a74efb58fa3d98eedb1a35afa7b7bcb5/a74efb58fa3d98eedb1a35afa7b7bcb5_l.jpg    background-attachment: fixed;-->
    <div class="view full-page-intro" style="background-image: url('https://careergarden.jp/dtp-designer/wp-content/blogs.dir/388/files/4a2631ded52c08e466396b3f7a2c6f97.jpg');background-color:rgba(0,98,255,0.4); background-repeat: no-repeat; background-size: cover;">


      <!-- Mask & flexbox options--> <!--mask rgba-black-light-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center ">

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

      //ローディング画面
      window.onload = function() {

        const spinner = document.getElementById('loading');

        /*javascriptでわざとロードを遅くする処理（ローディング画面を見るため）
        // ビジーwaitを使う方法
        function sleep(waitMsec) {
          var startMsec = new Date();

          // 指定ミリ秒間だけループさせる（CPUは常にビジー状態）
          while (new Date() - startMsec < waitMsec);
        }

        sleep(5000);
        */

        spinner.classList.add('loaded');
      }
    </script>
  </body>
</html>
