<div class="aa-sidebar-widget">
  <h3>Recently Views</h3>
  <div class="aa-recently-views">
    <ul>
    <?php 
      foreach ($data as $key => $value) {
     ?>
      <li>
        <a href="<?= Yii::$app->urlManager->baseUrl .'/product/detail?id='.$value['product_id'] ?>" class="aa-cartbox-img"><img alt="<?= $value['product_name'] ?>" src="<?= $value['product_image'] ?>"></a>
        <div class="aa-cartbox-info">
          <h4><a href="<?= Yii::$app->urlManager->baseUrl .'/product/detail?id='.$value['product_id'] ?>">
          <?= $value['product_name'] ?></a></h4>
          <p> $<?= $value['price'] ?></p>
        </div>                    
      </li>
    <?php } ?>                               
    </ul>
  </div>                            
</div>