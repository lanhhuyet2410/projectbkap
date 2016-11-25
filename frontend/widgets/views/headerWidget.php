<?php 
  use yii\helpers\Html;
  use frontend\components\cart;
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
                <li class="hidden-xs"><a href="<?= Yii::$app->homeUrl.'cart' ?>">Giỏ hàng</a></li>
                <li class="hidden-xs"><a href="<?= Yii::$app->homeUrl.'checkout/index' ?>">Thanh toán</a></li>
                <li><a href="<?= Yii::$app->homeUrl.'wishlist/index' ?>">Yêu thích</a></li>
                  <?php 
                  if (!Yii::$app->user->isGuest) : ?>
                    
                    <li><a href="<?= Yii::$app->homeUrl.'customer/view' ?>"><?php echo Yii::$app->user->identity->username; ?></a></li>
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
             <?php 
              $totalAmount = $total = 0;
                if(count($cartstore)) {
                 foreach ($cartstore as $item) {
                  $total +=$cost*$item->qtt;
                }
              }
            ?>
            <div class="aa-cartbox" id="aa-cartbox-summary">
              <a class="aa-cart-link" href="#">
                <span class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">SHOPPING CART</span>
                <span class="aa-cart-notify"><?php echo $totalItem ?></span>
              </a>
              <div class="aa-cartbox-summary">
                <ul>
                  <?php 
                     if(count($cartstore)) { foreach ($cartstore as $item) {
                  ?>

                  <li>
                    <a class="aa-cartbox-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$item->product_id ?>"><img src="<?= $item->product_image ?>" alt="<?= $item->product_name ?>"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$item->product_id ?>"><?= $item->product_name ?></a></h4>
                      <p><?= $item->qtt ?> x $<?= $cost ?></p>
                    </div>
                    <a class="aa-remove-product" href="javascript:void(0)"><span class="fa fa-times"></span></a>
                  </li>
                  <?php } }?>

                  <li>
                    <span class="aa-cartbox-total-title">
                      Total
                    </span>
                    <span class="aa-cartbox-total-price">
                      $<?php echo number_format($total,0,"","."); ?>
                    </span>
                  </li>
                </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="<?= Yii::$app->homeUrl.'checkout/index' ?>">Checkout</a>
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