<?php
use frontend\widgets\catBannerWidget;
use frontend\widgets\quickViewWidget;
use frontend\widgets\relatedProductWidget;

/* @var $this yii\web\View */
$this->title = 'Product Detail';
?>

<?= catBannerWidget::widget(); ?>

  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="<?= $data->product_image ?>" class="simpleLens-lens-image"><img src="<?= $data->product_image ?>" class="simpleLens-big-image"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?= $data->product_name; ?></h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">$<?= $data->price ?></span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p><?= $data->description ?></p>


                    <h4>Size</h4>
                    <?php $sizes = unserialize($data->size_id) ;
                      if ($sizes) :
                    ?>
                      <div class="aa-prod-view-size">
                        <?php foreach ($sizes  as $size) :  ?>
                          <input type="radio" name="size" id="<?= $data->getSize($size)->size_id ?>">
                          <label for="<?= $data->getSize($size)->size_id ?>"><?php echo $data->getSize($size)->size_name; ?></label>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>


                    <h4>Màu sắc</h4>
                    <?php $colors = unserialize($data->color_id) ;
                      if ($colors) :
                    ?>
                      <div class="aa-color-tag">
                        <?php foreach ($colors  as $color) :  ?>
                          <input type="radio" name="color" id="<?= $data->getColor($color)->color_name ;?>" />
                          <label for="<?= $data->getColor($color)->color_name ;?>"><?php echo $data->getColor($color)->color_name; ?>
                          </label><br/>
                        <?php endforeach; ?>                     
                      </div>
                    <?php endif; ?>


                    <div class="aa-prod-quantity">
                      <label>Số lượng:</label>
                      <input type="text" class="span1" id="qty" name="qty" placeholder="1" value="1" size="3">
                      <p class="aa-prod-category">

                        Kiểu sản phẩm: <a href="<?= Yii::$app->homeUrl ?>product/listproductparent?id=<?= $dataCat->cat_id ?>"><?= $dataCat->cat_name; ?></a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="javascript:void(0)" onclick="addCart(<?= $data->product_id ?>)">Mua hàng</a>
                      <a class="aa-add-to-cart-btn" href="javascript:void(0)" onclick="addWishlist(<?= $data->product_id ?>)">Yêu thích</a>
                      <a class="aa-add-to-cart-btn" href="#">So sánh</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Mô tả sản phẩm</a></li>
                <li><a href="#review" data-toggle="tab">Ý kiến phản hồi</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p><?= $data->content ?></p>
                </div>

                <div class="tab-pane fade " id="review">
                  <div class="aa-product-review-area">
                    
                   <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>

                  </div>
                </div>   
              </div>

            </div>
            <?= quickViewWidget::widget(); ?>
            <div class="aa-product-related-item">
              <?= relatedProductWidget::widget(['data'=>$relate]); ?>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>