<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-lg-offset-3">
            <h3><?= Html::encode($this->title) ?></h3>
            <p>Hãy nhập vào thông tin để đăng nhập:</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form','class'=>'aa-login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    <?= Html::a('Quên mật khẩu', ['site/request-password-reset','class'=>'aa-lost-password']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
