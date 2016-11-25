<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quản lý banner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'location',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute' => 'image',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'format'=>'html',
                'content'=>function($data){
                    return html::img($data->image,['alt'=>'yii','width'=>'100']);
                },
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'tile_1',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'tile_2',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'tile_3',
                'headerOptions'=>[
                    'style'=>'width:250px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:250px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'content'=>function($model){
                    if ($model->status==1) {
                        return Html::a('Đã kích hoạt','javascrip:void(0)',['class'=>'label label-success']);
                    }else{
                        return Html::a('Không kích hoạt','javascrip:void(0)',['class'=>'label label-danger']);
                    }
                },
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'created_at',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'updated_at',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],

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
                            'data'=>[
                                'confirm'=>'Bạn có muốn xóa mục này không?',
                                'method'=>'post',
                            ]
                        
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
