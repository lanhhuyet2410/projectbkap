<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách đơn hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm đơn hàng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'user_id',
                'headerOptions'=>[
                    'style'=>'width:20px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:20px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'userName',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            'email:email',
            [
                'attribute'=>'mobile',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'addess',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'user_ship',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            'email_ship:email',
            [
                'attribute'=>'mobile_ship',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'addess_ship',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            'request:ntext',
            [
                'attribute' => 'total',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute' => 'payment_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'value'=>'payment.payment_name',
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute' =>'deliver_id',
                'headerOptions'=>[
                    'style'=>'width:100px;text-align:center',
                ],
                'value' =>'deliver.deliver_name',
                'contentOptions'=>[
                    'style'=>'width:100px;text-align:center;vertical-align: middle',
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
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
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
