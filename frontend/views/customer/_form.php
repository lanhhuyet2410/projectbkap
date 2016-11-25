<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">
    <section id="cart-view">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="cart-view-area">
               <div class="cart-view-table">
                 <div class="table-responsive">

                    <?php $form = ActiveForm::begin(); ?>
                    <caption><h1 class="text-center" style="color:#333"><?= Html::encode($this->title) ?></h1></caption>

                    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'password')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
</div>