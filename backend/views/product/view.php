<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'product_name',
            'product_image',
            'cat_id',
            'factory_id',
            'price',
            'saleoff',
            'start_sale',
            'end_sale',
            [
                'attribute'=>'size_id',
                'content'=>function($model){
                    $size = ($model->size_id) ? unserialize($model->size_id) : [];
                    $size1 = "";
                    if ($size) {
                        foreach ($size as $value) {
                            if ($value==1) {
                                $size1 = $value;
                            }else{
                                $size1 .= $value.",";
                            }
                        }
                    }
                    return $size1;
                }
            ],
            [
                'attribute'=>'size_id',
                'content'=>function($model){
                    $size = ($model->size_id) ? unserialize($model->size_id) : [];
                    $size1 = "";
                    if ($size) {
                        foreach ($size as $value) {
                            $size1 .= $value.",";
                        }
                    }
                    return $size1;
                    if ($size1) {
                        
                    }
                }
            ],
            'description',
            'content:ntext',
            'status',
            [
                'attribute'=>'created_at',
                'format'=>['datetime','php:H:i:s d-m-Y']
            ],
            [
                'attribute'=>'updated_at',
                'format'=>['datetime','php:H:i:s d-m-Y']
            ],
        ],
    ]) ?>

</div>
