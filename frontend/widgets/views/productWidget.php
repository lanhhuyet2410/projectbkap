<?php 
  use frontend\widgets\quickViewWidget;
  use frontend\models\Product;
  use frontend\models\Category;
  use yii\helpers\Html;
 ?>
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner">
              <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                  <?php 
                    $i=0;
                    foreach ($dataCat as $key => $value) {
                      $i++;
                      $class = "";
                      if ($i==1) {
                        $class = 'class="active"';
                      }
                  ?>
                  <li <?= $class; ?> >
                    <a href="#tab-<?= $value['cat_id'] ?>" data-toggle="tab"><?= $value['cat_name'] ?></a>
                  </li>
                  <?php } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Start men product category -->
                  <?php
                    $j=0;
                    foreach ($dataCat as $key => $value) {
                     $j++;
                      $class = "";
                      if ($j==1) {
                        $class = "active";
                      }
                   ?>
                  <div class="tab-pane fade in <?= $class ?>" id="tab-<?= $value['cat_id'] ?>">
                    <div class="row">
                    <ul class="aa-product-catg" id="product">
                      <!-- start single product item -->
                      <?php 
                        $product = new Category();
                        $product = $product->getProductBy($value['cat_id']);
                        foreach ($product as $valuepro) {
                          
                       ?>
                      <li>
                        <figure>
                          <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$valuepro['product_id'] ?>"><img src="<?= $valuepro['product_image'] ?>" alt="<?= $valuepro['product_name'] ?>"></a>
                          <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" data-id="<?= $valuepro['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Mua hàng</a>
                            <figcaption>
                            <h4 class="aa-product-title">
                              <?php echo Html::a($valuepro['product_name'],['/product/detail','id'=> $valuepro['product_id']]) ?>
                            </h4>
                            <span class="aa-product-price">$<?= number_format($valuepro["price"],0,"","."); ?></span>
                          </figcaption>
                        </figure>                        
                        <div class="aa-product-hvr-content">
                          <a href="javascript:void(0)" class="likeproduct" data-id="<?= $valuepro['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Thích sản phẩm"><span class="fa fa-heart-o"></span></a>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                          <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $valuepro['product_id'] ?>" data-placement="top" title="Xem nhanh" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                        </div>
                        <!-- product badge -->
                        <?php 
                          if ($valuepro['saleoff']>0) {
                            ?>
                            <span class="aa-badge aa-sale" href="#">SALE <?= $valuepro['saleoff']."%" ?></span>
                          <?php } ?>
                      </li>
                      <?php } ?>
                    </ul>
                    </div>
                    <div class="row text-center">
                      <a class="aa-browse-btn" href="<?= Yii::$app->homeUrl.'/product/listproductparent?id='.$value['cat_id']?>">Xem thêm sản phẩm <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    
                  </div>
                  <?php } ?>
                  <!-- / men product category -->
                  <?= quickViewWidget::widget(); ?>  
                  
                </div>
                <!-- quick view modal -->                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>