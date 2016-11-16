<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Size */

$this->title = 'Thêm kích cỡ';
$this->params['breadcrumbs'][] = ['label' => 'Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="size-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
