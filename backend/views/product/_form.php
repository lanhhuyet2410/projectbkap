    <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
    <img src="" id="previewImage" alt="" width="100">
    <?= $form->field($model, 'product_image')->textInput(['maxlength' => true,'id'=>'proImg','onclick'=>'openFileManager()', 'placeholder'=>'Click chọn ảnh']) ?>

    <?= $form->field($model, 'cat_id')->dropDownList($dataCate, ['prompt'=>'-Chọn danh mục-']) ?>

    <?= $form->field($model, 'factory_id')->dropDownList($dataFactory, ['prompt'=>'-Chọn nhãn hiệu-']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'saleoff')->textInput() ?>

    <?= $form->field($model, 'start_sale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_sale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size_id')->checkboxList($dataSize,['multiple'=>'multiple']) ?>

    <?= $form->field($model, 'color_id')->checkboxList($dataColor,['multiple'=>'multiple']) ?>
    
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <!--?= $form->field($model, 'status')->checkBox() ?-->
    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="Product[status]" value="1" checked="true">
                Trạng thái
            </label>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
