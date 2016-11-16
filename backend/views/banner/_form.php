<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>'proImg','onclick'=>'openFileManager()', 'placeholder'=>'Click chọn ảnh']) ?>

    <?= $form->field($model, 'tile_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tile_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tile_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
