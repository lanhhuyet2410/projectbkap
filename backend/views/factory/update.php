<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = 'Cập nhật nhãn hiệu: ' . $model->factory_name;
$this->params['breadcrumbs'][] = ['label' => 'Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->factory_name, 'url' => ['view', 'id' => $model->factory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
