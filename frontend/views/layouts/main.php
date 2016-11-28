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
use frontend\widgets\cartModalWidget;


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
    <?= cartModalWidget::widget(); ?>
    
<?php $this->endBody() ?>


<script>
  
  //Wishlist
  $('.likeproduct').click(function(event) {
    event.preventDefault();
    var link = '<?php echo Yii::$app->homeUrl.'wishlist/add'?>';
    var id = $(this).data('id');
    var qty = $('input#qty').val();
    $.ajax({
      url: link,
      type: 'GET',
      data: {product_id: id,qty:qty},
      success:function(res){
        alert('Bạn đã thêm sản phẩm vào yêu thích');
      }
    });
  });


  $('.btn-add-cart').click(function(event) {
    event.preventDefault();
    var link = '<?php echo Yii::$app->homeUrl.'cart/add-cart'?>';
    var qty = $('input#qty').val();
    var id = $(this).attr("data-id");
    console.log(link);
    var name = $(this).data('name');
    var size = $('[name="size"]:radio:checked').val();
    var color = $('[name="color"]:radio:checked').val();
    $.ajax({
      url: link,
      type: 'GET',
      data: {product_id: id, qty:qty, size:size, color:color },
      success:function(res){
        $('#alert-pro-name').html('Sản phẩm đã thêm vào giỏ hàng');
      }
    });
  });

  
  $('.aa-remove-product').click(function(event) {
    event.preventDefault();
    var link = '<?php echo Yii::$app->homeUrl.'cart/remove'?>';
    var id = $(this).data('id');
    $.ajax({
      url: link,
      type: 'GET',
      data: {product_id: id},
      success:function(res){
        alert('Bạn đã loại sản phẩm khỏi giỏ hàng');
        $("#listcart").load(location.href+' #listcart>*',"");
        $('#aa-cartbox-summary').load(location.href+' #aa-cartbox-summary>*',"");
      }
    });
  });

   function delCart(id){
     $.get('<?php echo Yii::$app->homeUrl.'cart/remove'?>',{product_id:id}, function(data){
       // alert("Bạn muốn xóa sản phẩm này?");
      val = data.split("-");
      $("#listcart").load(location.href+' #listcart>*',"");
      $('#aa-cartbox-summary').load(location.href+' #aa-cartbox-summary>*',"");
      
    });
    }

  </script>

  <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",42684]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);
  </script>
</script>

</body>
</html>
<?php $this->endPage() ?>
