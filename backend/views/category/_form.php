<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList($dataCat,['prompt'=>'-Chọn danh mục-']) ?>

    <!--?//= $form->field($model, 'status')->checkBox(['checked'=>true]) ?-->
    <div class="form-group">
    	<div class="checkbox">
    		<label>
    			<input type="checkbox" name="Category[status]" value="1" checked="true">
    			Trạng thái
    		</label>
    	</div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
