<?php 
  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;
 ?>
<section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Đăng ký nhận tin </h3>
          <p> Đăng ký email của bạn để nhận những cập nhật mới nhất từ chúng tôi!</p>
          <div class="aa-subscribe-form">
            <?php $form = ActiveForm::begin([
                'action'=> Url::to(['/subscribe'])
            ]); ?>
            <input type="email" name="subscribe" id="" placeholder="Nhập email của bạn">
            <input type="submit" value="Đăng kí">
            <?php ActiveForm::end(); ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
