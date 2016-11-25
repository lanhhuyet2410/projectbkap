<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */

$this->title = 'Thông tin tài khoản';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <section id="cart-view">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="cart-view-area">
               <div class="cart-view-table">
                 <div class="table-responsive">
                    <table class="table">
                    <caption><h1 class="text-center" style="color:#333"><?= Html::encode($this->title) ?></h1></caption>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'username',
                            'full_name',
                            'email:email',
                            'phone',
                            'address',
                        ],
                    ]) ?>
                    <p>
                        <?= Html::a('Chỉnh sửa thông tin tài khoản', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    </p>
                    </table>

                </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
</div>
