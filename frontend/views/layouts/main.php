<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\topNavWidget;
use frontend\widgets\headerWidget;

use frontend\widgets\subscribeWidget;
use frontend\widgets\footerWidget;
use frontend\widgets\loginModalWidget;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

       <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


    <?= headerWidget::widget(); ?>
    <?= topNavWidget::widget(); ?>
   
    <?= $content ?>
    <?php 
    if (Yii::$app->controller->action->id != 'login') {
      echo subscribeWidget::widget(); 
    } ?>
    
    <?= footerWidget::widget(); ?>
    <?= loginModalWidget::widget(); ?>

<?php $this->endBody() ?>

<script>
  function addWishlist(id){
    $.get('<?php Yii::$app->homeUrl.'wishlist/add' ?>')
  }

  function addCart(id){
    alert('hehe');
  }
</script>


</body>
</html>
<?php $this->endPage() ?>
