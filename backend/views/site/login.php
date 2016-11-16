<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username',
                    [
                        'template'=> '<p>User Name </p>{input}{error}'

                    ]
                )->textInput(['autofocus' => true])->label(false) ?>

                <?= $form->field($model, 'password',
                    [
                        'template' => '<p>Password </p>{input}{error}'
                    ]
                )->passwordInput()->label(false) ?>

                <input type="checkbox" id="brand" value="" name="rememberMe">
                    <label for="brand"><span></span> Remember me ?</label> 
                <input type="submit" value="LOGIN" name="login-button">
                

            <?php ActiveForm::end(); ?>
    