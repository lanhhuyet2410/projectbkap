<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quản trị viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

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

            // 'id',
            [
                'attribute'=>'username',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'full_name',
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
                'attribute'=>'address',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'content'=>function($model){
                    if ($model->status==10) {
                        return "Hoạt động";
                    }else{
                        return "Không hoạt động";
                    }
                },
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'created_at',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],
            [
                'attribute'=>'updated_at',
                'headerOptions'=>[
                    'style'=>'width:120px;text-align:center',
                ],
                'format'=>['datetime','php:H:i:s d-m-Y'],
                'contentOptions'=>[
                    'style'=>'width:120px;text-align:center;vertical-align: middle',
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>