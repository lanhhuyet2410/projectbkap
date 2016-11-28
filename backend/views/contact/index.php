javascript<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Liên hệ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm liên hệ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'name',
                'headerOptions'=>[
                    'style'=>'width:140px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:140px;text-align:center;vertical-align: middle',
                ],
            ],
            'email:email',
            [
                'attribute'=>'subject',
                'headerOptions'=>[
                    'style'=>'width:110px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:110px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'company',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            'message:ntext',
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
                'attribute'=>'created_at',
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
