<div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">                      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="row">
          <!-- Modal view slider -->
          <div class="col-md-6 col-sm-6 col-xs-12">                              
            <div class="aa-product-view-slider">                                
              <div class="simpleLens-gallery-container" id="demo-1">
                <div class="simpleLens-container">
                    <div class="simpleLens-big-image-container">
                        <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                            <img src="<?= Yii::$app->urlManager->baseUrl; ?>/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal view content -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="aa-product-view-content">
              <h3 class="quick-view-title">T-Shirt</h3>
              <div class="aa-price-block">
                <span class="aa-product-view-price">$34.99</span>
                <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
              </div>
              <p class="quick-view-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
              <h4>Size</h4>
              <div class="quick-view-color aa-prod-view-size">
                
              </div>
              <h4>Color</h4>
              <div class="quick-view-size aa-prod-view-size">
               
              </div>
              <div class="aa-prod-quantity">
                <label>Số lượng:</label>
                <input type="text" class="span1" id="qty" name="qty" placeholder="1" value="1" size="3">
                <p class="aa-prod-category">
                  Kiểu sản phẩm: <a href="#"></a>
                </p>
              </div>
              <div class="aa-prod-view-bottom">
                <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" id="hehe"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                <a href="" class="aa-add-to-cart-btn">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>                        
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>