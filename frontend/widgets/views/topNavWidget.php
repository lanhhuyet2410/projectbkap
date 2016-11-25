<?php use frontend\models\Category; ?>
<section id="menu">
  <div class="container">
    <div class="menu-area">
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div class="navbar-collapse collapse">
          <!-- Left nav -->
          <ul class="nav navbar-nav">
            <li><a href="<?php echo Yii::$app->homeUrl ?>">Trang chủ</a></li>
              <?php 
                foreach ($dataCat as $key => $value) {
              ?>
            <li><a href="<?= Yii::$app->homeUrl ?>product/listproductparent?id=<?= $value['cat_id'] ?>"><?php echo $value["cat_name"] ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php 
                  $catSub = new Category();
                  $dataSub = $catSub->getCategoryByParent($value["cat_id"]);
                  foreach ($dataSub as $key1 => $value1) {
                ?>                
                <li><a href="<?= Yii::$app->homeUrl ?>product/listproduct?id=<?php echo $value1['cat_id'] ?>"><?php echo $value1["cat_name"] ?></a></li>
                <?php } ?>
              </ul>
            </li>
            <?php } ?>
            <li><a href="<?= Yii::$app->homeUrl.'news/index'?>">Tin tức</a></li>
            <li><a href="<?= Yii::$app->homeUrl.'site/contact'?>">Liên hệ</a></li>
            <li><a href="<?= Yii::$app->homeUrl.'site/about'?>">Giới thiệu</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>       
  </div>
</section>