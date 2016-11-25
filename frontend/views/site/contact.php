<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="containerd">
    
<section id="aa-catg-head-banner">
 <img src="<?= Yii::$app->homeUrl ?>img/fashion/fashion-header-bg-7.jpg" alt="fashion img">
 <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>Contact</h2>
      <ol class="breadcrumb">
        <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>         
        <li class="active">Contact</li>
      </ol>
    </div>
   </div>
 </div>
</section>
<!-- / catg header banner section -->
<!-- start contact section -->
<section id="aa-contact">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="aa-contact-area">
         <div class="aa-contact-top">
           <h2>We are wating to assist you..</h2>
           <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
         </div>
         <!-- contact map -->
         <div class="aa-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6574057535076!2d105.78101011493293!3d21.04638978598886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1fc0c41b4139a9!2sHTC-B%C3%A1ch+Khoa-Aptech!5e0!3m2!1svi!2s!4v1475177729615" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         <!-- Contact address -->
         <div class="aa-contact-address">
           <div class="row">
             <div class="col-md-8">
               <div class="aa-contact-address-left">
                  <div class="row">
                  <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput() ?>
                    </div>
                    <div class="col-md-6">
                                             
                        <?= $form->field($model, 'email') ?>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'subject') ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'company') ?>
                    </div>
                  </div>                  
                   
                    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
                <div class="row">
                    <div class="col-md-12">
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>
                    </div>
                </div>
                  <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-danger', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
               </div>
             </div>
             <div class="col-md-4">
               <div class="aa-contact-address-right">
                 <address>
                   <h4>SkyShop</h4>
                   <p>To see the world, things dangerous to come to, to see behind walls, to draw closer, to find each other, and to feel. That is the purpose of Life</p>
                   <p><span class="fa fa-home"></span>239, Hoang Quoc Viet, Ha Noi</p>
                   <p><span class="fa fa-phone"></span> 0988.565.399</p>
                   <p><span class="fa fa-envelope"></span>Email: dailyshop@gmail.com</p>
                 </address>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
  