<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'userName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addess')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_ship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_ship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_ship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addess_ship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'payment_id')->dropDownList($dataPay, ['prompt'=>'-Chọn phương thức thanh toán-']) ?>

    <?= $form->field($model, 'deliver_id')->dropDownList($dataDeliver, ['prompt'=>'-Chọn phương thức giao hàng-']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
