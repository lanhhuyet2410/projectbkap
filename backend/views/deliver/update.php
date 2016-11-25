<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Deliver */

$this->title = 'Cập nhật phương thức giao hàng: ' . $model->deliver_name;
$this->params['breadcrumbs'][] = ['label' => 'Delivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deliver_name, 'url' => ['view', 'id' => $model->deliver_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deliver-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
