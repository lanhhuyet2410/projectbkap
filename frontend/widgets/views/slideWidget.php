<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <div class="seq-screen">
        <ul class="seq-canvas">
          <!-- single slide item -->
          <?php 
            foreach ($dataSlider as $key => $value) {
          
          ?>
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo $value["image"] ?>" alt="Men slide img" width="500" height="700" />
              </div>
              <div class="seq-title">
               <span data-seq><?php echo $value["tile_2"] ?></span>                
                <h2 data-seq><?php echo $value["tile_1"] ?></h2>                
                <p data-seq><?php echo $value["tile_3"] ?></p>
                <a data-seq href="<?= Yii::$app->homeUrl ?>product/index" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <?php
              }
            ?>                 
        </ul>
      <!-- slider navigation btn -->

      <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
        <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
        <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
      </fieldset>
      </div>
    </div>
  </div>
</section>