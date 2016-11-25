<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title = 'Giỏ hàng';
 ?>

 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <div class="table-responsive">
                <?php if($cartstore):$n=1; ?>
                  <table class="table">
                  <caption><h3 class="text-center">Thông tin giỏ hàng</h3></caption>
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Hoạt động</th>
                      </tr>
                    </thead>
                    <tbody>

                  <?php foreach($cartstore as $item): ?>
                      <tr>
                        <td>
                          <?php echo $n; ?>
                        </td>

                        <td>
                          <img src="<?php echo $item->product_image ?>" alt="">
                        </td>

                        <td>
                          <?php echo $item->product_name ?>
                        </td>
                         
                        <td>
                          <?php echo number_format($item->price,0,'',',')?>
                        </td>

                        <td>
                          <?php echo $item->qtt ?>
                        </td>

                        <td>
                          <?php echo number_format($item->price*$item->qtt,0,'',',')?>
                        </td>

                        <td>
                          <?php $form=ActiveForm::begin(
                            [
                            'action'=>Url::to(['/cart/update-cart']),
                            'options'=>[
                            'class'=>'form-inline pull-left'
                             ]

                          ]); 
                          ?>
                        <input type="hidden" name="product_id" value="<?php echo $item->product_id; ?>"/>
                        <input type="text" name="qtt" value="<?php echo $item->qtt; ?>" size="3" class="form-control"/>
                        <input type="submit" name="update" value="Update" class="btn btn-sm btn-success">
                        <?php ActiveForm::end();  ?>
                          <?php echo Html::a('Delete',['/cart/remove','product_id'=>$item->product_id],['class'=>'btn btn-sm btn-danger']);?>
                        </td>
                        
                      </tr>
                     <?php $n++; endforeach; ?>
                      <tr>
                        <td colspan="5" align="right">Tổng tiền</td>
                        <td> <?php echo number_format($cost,0,'',',')?>USD</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="action clearfix">
                    <a class="btn btn-success" href="<?= Yii::$app->homeUrl ?>">Tiếp tục mua hàng</a>
                    <a class="btn btn-danger" href="<?= Yii::$app->homeUrl.'cart/clear'?>">Xóa giỏ hàng</a>
                    <a class="btn btn-primary" href="<?= Yii::$app->homeUrl.'checkout/index'?>">Đặt hàng</a>
                  </div>
                <?php else: ?>
                  <div class="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> Giỏ hàng của bạn đang rỗng...
                    <a class="btn btn-primary" href="<?= Yii::$app->homeUrl ?>">Tiếp tục mua hàng</a>
                  </div>
                    <?php endif; ?>
                </div>
             <!-- Cart Total view -->
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
