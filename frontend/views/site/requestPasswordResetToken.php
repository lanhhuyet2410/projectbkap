<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đặt lại mật khẩu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    
    <div class="row">
        <div class="col-lg-5 col-lg-offset-3">
        <h3><?= Html::encode($this->title) ?></h3>

        <p>Hãy điền vào email của bạn. Bạn sẽ nhận được một email với nội dung hướng dẫn đặt lại mật khẩu.</p>

            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Gửi', ['class' => 'btn btn-primary']) ?>    
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
