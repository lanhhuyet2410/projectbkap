<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'product_name',
                'headerOptions'=>[
                    'style'=>'width:210px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:210px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute' => 'product_image',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'format'=>'html',
                'content'=>function($data){
                    return html::img($data->product_image,['alt'=>'yii','width'=>'100']);
                }
            ],
            [
                'attribute' => 'cat_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'value'=>'category.cat_name',
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute' => 'factory_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'value'=>'factory.factory_name',
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            
            [
                'attribute'=>'price',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            // 'saleoff',
            // 'start_sale',
            // 'end_sale',
            [
                'attribute'=>'size_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'content'=>function($model){
                    $size = ($model->size_id) ? unserialize($model->size_id) : [];
                    $size1 = "";
                    if ($size) {
                        foreach ($size as $value) {
                            $sz = $model->getSizeS($value);
                            if ($sz) {
                                $size1 .= $sz->size_name.',';
                            }
                        }
                    }
                    return rtrim($size1,',');
                },
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],

            [
                'attribute'=>'color_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'content'=>function($model){
                    $color = ($model->color_id) ? unserialize($model->color_id) : [];
                    $color1 = "";
                    if ($color) {
                        foreach ($color as $value) {
                            $cl = $model->getColorS($value);
                            if ($cl) {
                                $color1 .= $cl->color_name.',';
                            }
                        }
                    }
                    return rtrim($color1,',');
                },
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
                // ,'value'=>'color.color_name'
            ],
            // 'description',
            // 'content:ntext',
            [
                'attribute'=>'status',
                'content'=>function($model){
                    if ($model->status==1) {
                        return "Hoạt động";
                    }else{
                        return "Không hoạt động";
                    }
                },
                'contentOptions'=>[
                    'style'=>'width:90px;text-align:center;vertical-align: middle',
                ],
            ],
            // [
            //     'attribute'=>'created_at',
            //     'format'=>['datetime','php:H:i:s d-m-Y']
            // ],
            // [
            //     'attribute'=>'updated_at',
            //     'format'=>['datetime','php:H:i:s d-m-Y']
            // ],
            
            ['class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                'view'=>function($url,$model){
                    return Html::a('Xem',$url,['class'=>'label label-primary']);
                    },
                'update'=>function($url,$model){
                    return Html::a('Sửa',$url,['class'=>'label label-success']);
                },
                'delete'=>function($url,$model){
                    return Html::a('Xóa',$url,
                        [
                        'class'=>'label label-danger',
                        'data-confirm'=>'Bạn có muốn xóa mục này không?',
                            [
                            'data-method'=>'post',
                            ],
                        ]
                        );
                    },
                ],
                'contentOptions'=>[
                    'style'=>'width:130px;text-align:center;vertical-align: middle',
                ],
            ],
        ],
    ]); ?>
</div>
