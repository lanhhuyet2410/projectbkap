<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Size */

$this->title = 'Cập nhật kích cỡ: ' . $model->size_name;
$this->params['breadcrumbs'][] = ['label' => 'Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->size_name, 'url' => ['view', 'id' => $model->size_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="size-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
