<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Color */

$this->title = 'Cập nhật màu sắc: ' . $model->color_name;
$this->params['breadcrumbs'][] = ['label' => 'Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->color_name, 'url' => ['view', 'id' => $model->color_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
