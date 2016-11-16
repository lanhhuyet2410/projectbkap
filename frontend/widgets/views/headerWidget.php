<?php 
  use yii\helpers\Html;
 ?>

<header id="aa-header">
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area">
            <!-- start header top left -->
            <div class="aa-header-top-left">
              <!-- start language -->
              <div class="aa-language">
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="<?= Yii::$app->urlManager->baseUrl; ?>/img/flag/english.jpg" alt="english flag">ENGLISH
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src="<?= Yii::$app->urlManager->baseUrl; ?>/img/flag/french.jpg" alt="">FRENCH</a></li>
                    <li><a href="#"><img src="<?= Yii::$app->urlManager->baseUrl; ?>/img/flag/english.jpg" alt="">ENGLISH</a></li>
                  </ul>
                </div>
              </div>
              <!-- / language -->

              <!-- start currency -->
              <div class="aa-currency">
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-usd"></i>USD
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                    <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                  </ul>
                </div>
              </div>
              <!-- / currency -->
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>0988565399</p>
              </div>
              <!-- / cellphone -->
            </div>
            <!-- / header top left -->
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                <li class="hidden-xs"><a href="cart.html">Giỏ hàng</a></li>
                <li class="hidden-xs"><a href="checkout.html">Thanh toán</a></li>
                  <?php 
                  if (!Yii::$app->user->isGuest) : ?>
                    <li><?php echo Html::a('Yêu thích',['/'],['data-method'=>'post']); ?></li>
                    <li><a href=""><?php echo Yii::$app->user->identity->username; ?></a></li>
                    <li>
                      <?php echo Html::a('Thoát',['site/logout'],['data-method'=>'post']); ?>
                    </li>
                  <?php else: ?>
                    <li><?php echo Html::a('Đăng nhập',['site/login'],['data-method'=>'post']); ?></li>
                    <li><?php echo Html::a('Đăng kí',['site/signup'],['data-method'=>'post']); ?></li>
                  <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  -->

  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!-- logo  -->
            <div class="aa-logo">
              <!-- Text based logo -->
              <a href="<?php echo Yii::$app->homeUrl ?>">
                <span class="fa fa-shopping-cart"></span>
                <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
              </a>
              <!-- img based logo -->
              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
            </div>
            <!-- / logo  -->
             <!-- cart box -->
            <div class="aa-cartbox">
              <a class="aa-cart-link" href="#">
                <span class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">SHOPPING CART</span>
                <span class="aa-cart-notify">2</span>
              </a>
              <div class="aa-cartbox-summary">
                <ul>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>                    
                  <li>
                    <span class="aa-cartbox-total-title">
                      Total
                    </span>
                    <span class="aa-cartbox-total-price">
                      $500
                    </span>
                  </li>
                </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
              </div>
            </div>
            <!-- / cart box -->
            <!-- search box -->
            <div class="aa-search-box">
              <form action="<?= Yii::$app->urlManager->baseUrl ?>/product/search" method="get">
                <input type="text" name="query" id="" placeholder="Tìm kiếm sản phẩm">
                <button type="submit"><span class="fa fa-search"></span></button>
              </form>
            </div>
            <!-- / search box -->             
          </div>
        </div>
      </div>
    </div>
  </div>
</header>