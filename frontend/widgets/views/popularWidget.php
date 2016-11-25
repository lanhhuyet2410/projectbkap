<?php use frontend\widgets\quickViewWidget; ?>
<section id="aa-popular-category">
  <div class="container">
    <div class="aa-popular-category-area" id="carousel-product">
      <!-- start prduct navigation -->
      <?= quickViewWidget::widget(); ?> 
      <ul class="nav nav-tabs aa-products-tab">
        <li class="active"><a href="#popular" data-toggle="tab">Nổi bật</a></li>
        <li><a href="#featured" data-toggle="tab">Bộ sưu tập</a></li>
        <li><a href="#latest" data-toggle="tab">Sản phẩm mới</a></li>                    
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Start men popular category -->
        <div class="tab-pane fade in active" id="popular">
          <ul class="aa-product-catg aa-popular-slider">
            <!-- start single product item -->
            <?php 
              foreach ($data1 as $key1 => $value1) {
               
            ?>
            <li>
              <figure>
                <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value1['product_id'] ?>"><img src="<?= $value1['product_image'] ?>" alt="<?= $value1['product_name'] ?>"></a>
                <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" data-id="<?= $value1['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                 <figcaption>
                  <h4 class="aa-product-title"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value1['product_id'] ?>"><?= $value1['product_name'] ?></a></h4>
                  <span class="aa-product-price">$<?= $value1['price'] ?> </span>
                </figcaption>
              </figure>                     
              <div class="aa-product-hvr-content">
                <a href="javascript:void(0)" class="likeproduct" data-id="<?= $value1['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Thích sản phẩm"><span class="fa fa-heart-o"></span></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $value1['product_id'] ?>" data-placement="top" title="Xem nhanh" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
              </div>
              <!-- product badge -->
              <?php 
                if ($value1['saleoff']>0) {
                  ?>
                  <span class="aa-badge aa-sale" href="#">SALE <?= $value1['saleoff']."%" ?></span>
                <?php
                }
              ?>
            </li>
            <?php } ?>
          </ul>
          <a class="aa-browse-btn" href="<?= Yii::$app->urlManager->baseUrl.'/product/listproductparent?id='.$value1['cat_id'] ?>">Xem thêm sản phẩm <span class="fa fa-long-arrow-right"></span></a>
        </div>
        <!-- / popular product category -->
        
        <!-- start featured product category -->
        <div class="tab-pane fade" id="featured">
         <ul class="aa-product-catg aa-featured-slider">
            <!-- start single product item -->
            <?php 
              foreach ($data2 as $key2 => $value2) {
               
            ?>
            <li>
              <figure>
                <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value2['product_id'] ?>"><img src="<?= $value2['product_image'] ?>" alt="<?= $value2['product_name'] ?>"></a>
                <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" data-id="<?= $value2['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                 <figcaption>
                  <h4 class="aa-product-title"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value2['product_id'] ?>"><?= $value2['product_name'] ?></a></h4>
                  <span class="aa-product-price">$<?= $value2['price'] ?> </span>
                </figcaption>
              </figure>                     
              <div class="aa-product-hvr-content">
                <a href="javascript:void(0)" class="likeproduct" data-id="<?= $value2['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Thích sản phẩm"><span class="fa fa-heart-o"></span></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $value2['product_id'] ?>" data-placement="top" title="Xem nhanh" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
              </div>
              <!-- product badge -->
              <?php 
                if ($value2['saleoff']>0) {
                  ?>
                  <span class="aa-badge aa-sale" href="#">SALE <?= $value2['saleoff']."%" ?></span>
                <?php
                }
              ?>
            </li>
            <?php } ?>
          </ul>
          <a class="aa-browse-btn" href="<?= Yii::$app->urlManager->baseUrl.'/product/listproductparent?id='.$value2['cat_id'] ?>">Xem thêm sản phẩm <span class="fa fa-long-arrow-right"></span></a>
        </div>
        <!-- / featured product category -->

        <!-- start latest product category -->
        <div class="tab-pane fade" id="latest">
          <ul class="aa-product-catg aa-latest-slider">
            <!-- start single product item -->
            <?php 
              foreach ($data3 as $key3=> $value3) {
               
            ?>
            <li>
              <figure>
                <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value3['product_id'] ?>"><img src="<?= $value3['product_image'] ?>" alt="<?= $value3['product_name'] ?>"></a>
                <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" data-id="<?= $value3['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                 <figcaption>
                  <h4 class="aa-product-title"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value3['product_id'] ?>"><?= $value3['product_name'] ?></a></h4>
                  <span class="aa-product-price">$<?= $value3['price'] ?> </span>
                </figcaption>
              </figure>                     
              <div class="aa-product-hvr-content">
                <a href="javascript:void(0)" class="likeproduct" data-id="<?= $value3['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Thích sản phẩm"><span class="fa fa-heart-o"></span></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $value3['product_id'] ?>" data-placement="top" title="Xem nhanh" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
              </div>
              <!-- product badge -->
              <?php 
                if ($value3['saleoff']>0) {
                  ?>
                  <span class="aa-badge aa-sale" href="#">SALE <?= $value3['saleoff']."%" ?></span>
                <?php
                }
              ?>
            </li>
            <?php } ?>
          </ul>
           <a class="aa-browse-btn" href="<?= Yii::$app->urlManager->baseUrl.'/product/listproductparent?id='.$value3['cat_id'] ?>">Xem thêm sản phẩm <span class="fa fa-long-arrow-right"></span></a>
        </div>
        <!-- / latest product category -->  

      </div>
    </div>
  </div>
</section>