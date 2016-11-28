<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm tin tức', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'title',
                'headerOptions'=>[
                    'style'=>'width:150px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:150px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'description',
                'headerOptions'=>[
                    'style'=>'width:420px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:420px;text-align:center;vertical-align: middle',
                ],
            ],
            // 'content:ntext',
            [
                'attribute'=>'status',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'content'=>function($model){
                    if ($model->status==1) {
                        return Html::a('Đã kích hoạt','javascript:void(0)',['class'=>'label label-success']);
                    }else{
                        return Html::a('Không kích hoạt','javascript:void(0)',['class'=>'label label-danger']);
                    }
                },
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>[
                    'style'=>'width:90px;text-align:center',
                ],
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
            [
                'attribute'=>'created_at',
                'headerOptions'=>[
                    'style'=>'width:90px;text-align:center',
                ],
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'updated_at',
                'headerOptions'=>[
                    'style'=>'width:90px;text-align:center',
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
