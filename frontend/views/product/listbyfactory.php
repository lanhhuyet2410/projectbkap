<?php
use frontend\widgets\catBannerWidget;
use frontend\widgets\sortWidget;
use frontend\widgets\quickViewWidget;
use frontend\widgets\paginationWidget;
use frontend\widgets\categoryWidget;
use frontend\widgets\factoryWidget;
use frontend\widgets\recentlyViewWidget;
use frontend\widgets\topRatedWidget;

/* @var $this yii\web\View */
$this->title = 'Product';
?>

<?= catBannerWidget::widget(); ?>
<section id="aa-product-category">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
        <div class="aa-product-catg-content">
          <?= sortWidget::widget(); ?>
          <div class="aa-product-catg-body">
            <ul class="aa-product-catg">
              <!-- start single product item -->
              <?php foreach ($data as $key => $value) {
              
              ?>
              <li>
                <figure>
                  <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['product_id'] ?>">
                  <img src="<?= $value['product_image'] ?>" alt="<?= $value['product_name'] ?>"></a>
                  <a class="aa-add-card-btn" href="javascript:void(0)" onclick="addCart(<?= $value['product_id'] ?>)"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                  <figcaption>
                    <h4 class="aa-product-title"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['product_id'] ?>"><?= $value['product_name'] ?></a></h4>
                    <span class="aa-product-price">$<?= $value['price'] ?></span>
                    <p class="aa-product-descrip"><?= $value['description'] ?></p>
                  </figcaption>
                </figure>                         
                <div class="aa-product-hvr-content">
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                  <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $value['product_id'] ?>" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                </div>
                <!-- product badge -->
                <?php 
                  if ($value['saleoff']>0) {
                    ?>
                    <span class="aa-badge aa-sale" href="#">SALE <?= $value['saleoff']."%" ?></span>
                  <?php
                  }
                ?>
                
              </li>
              <?php } ?>
              <!-- start single product item -->
            </ul>
            <?= quickViewWidget::widget(); ?>
          </div>
          <?= paginationWidget::widget(); ?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
        <aside class="aa-sidebar">
          <?= categoryWidget::widget(); ?>
          <?= factoryWidget::widget(); ?>
          <?= recentlyViewWidget::widget(); ?>
          <?= topRatedWidget::widget(); ?>
        </aside>
      </div>
    </div>
  </div>
</section>