<h3>Related Products</h3>
<ul class="aa-product-catg aa-related-item-slider" id="related">
  <!-- start single product item -->
  <?php 
    foreach ($data as $key => $value) {
     
  ?>
  <li>
    <figure>
      <a class="aa-product-img" href="#"><img src="<?= $value['product_image'] ?>" alt="polo shirt img"></a>
      <a class="aa-add-card-btn" href="javascript:void(0)" onclick="addCart(<?= $value['product_id'] ?>)"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
       <figcaption>
        <h4 class="aa-product-title"><a href="#"><?= $value['product_name'] ?></a></h4>
        <span class="aa-product-price">$<?= $value['price'] ?></span>
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
</ul>