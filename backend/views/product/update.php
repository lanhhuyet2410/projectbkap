<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Cập nhật sản phẩm: ' . $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_id, 'url' => ['view', 'id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>
	<?php 
		$model->color_id = ($model->color_id) ? unserialize($model->color_id) : '';
		$model->size_id = ($model->size_id) ? unserialize($model->size_id) : '';
	?>
    <?= $this->render('_form', [
        'model' => $model,
	    'dataCate' => $dataCate,
	    'dataFactory' => $dataFactory,
	    'dataSize' =>$dataSize,
	    'dataColor' =>$dataColor,
    ]) ?>

</div>
