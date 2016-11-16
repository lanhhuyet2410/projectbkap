<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Subscribe */

$this->title = 'Thêm đăng kí nhận tin';
$this->params['breadcrumbs'][] = ['label' => 'Subscribes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscribe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
