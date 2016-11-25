<h3>Related Products</h3>
<ul class="aa-product-catg aa-related-item-slider" id="related">
  <!-- start single product item -->
  <?php 
    foreach ($data as $key => $value) {
     
  ?>
  <li>
    <figure>
      <a class="aa-product-img" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['product_id'] ?>"><img src="<?= $value['product_image'] ?>" alt="polo shirt img"></a>
      <a href="javascript:void(0)" class="aa-add-card-btn btn-add-cart" data-id="<?= $value['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
       <figcaption>
        <h4 class="aa-product-title"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['product_id'] ?>"><?= $value['product_name'] ?></a></h4>
        <span class="aa-product-price">$<?= $value['price'] ?></span>
      </figcaption>
    </figure>                     
    <div class="aa-product-hvr-content">
      <a href="javascript:void(0)" class="likeproduct" data-id="<?= $value['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Thích sản phẩm"><span class="fa fa-heart-o"></span></a>
      <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
      <a href="#" data-toggle2="tooltip" class="quick-view" data-id="<?= $value['product_id'] ?>" data-placement="top" title="Xem nhanh" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
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
</ul>