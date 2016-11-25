<!-- Cart view section -->
<?php use yii\helpers\Html; 
$this->title = 'Danh sách yêu thích';
?>
<section id="cart-view">
  <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="cart-view-area">
         <div class="cart-view-table aa-wishlist-table">
           <form action="">
             <div class="table-responsive">
              <?php if($wishlist):$n=1; ?>
                <table class="table">
                <caption><h3 class="text-center">Danh sách sản phẩm yêu thích</h3></caption>
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Hình ảnh</th>
                      <th>Sản phẩm</th>
                      <th>Giá</th>
                      <th>Trạng thái</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($wishlist as $item): 
                    
                    ?>
                    <tr>
                      <td><?= $n; ?></td>
                      <td><img src="<?= $item->product_image ?>" alt="<?= $item->product_name ?>"></a></td>
                      <td><a class="aa-cart-title" href="<?= Yii::$app->homeUrl.'product/detail?id='.$item->product_id ?>">
                      <?= $item->product_name ?></a></td>
                      <td>$<?= number_format($item->price,0,'',',') ?></td>
                      <td>Sẵn hàng</td>
                      <td><a href="javascript:void(0)" class="btn-add-cart aa-add-to-cart-btn" data-id="<?= $item->product_id; ?>">Thêm vào giỏ hàng</a>
                      <td>
                        <?php echo Html::a('Xóa',['/wishlist/remove','product_id'=>$item->product_id],['class'=>'btn btn-danger']);?>
                      </td>
                      
                    </tr>
                    <?php $n++; endforeach; ?>
                    </tbody>
                </table>
                <div class="action clearfix">
                    <a class="btn btn-success" href="<?= Yii::$app->homeUrl ?>">Tiếp tục xem sản phẩm</a>
                    <a class="btn btn-danger" href="<?= Yii::$app->homeUrl.'wishlist/clear'?>">Xóa danh sách yêu thích</a>
                    <a class="btn btn-primary" href="<?= Yii::$app->homeUrl.'checkout/index'?>">Đặt hàng</a>
                  </div>
                <?php else: ?>
                  <div class="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> Danh sách yêu thích của bạn chưa có sản phẩm nào.
                    <a class="btn btn-primary" href="<?= Yii::$app->homeUrl ?>">Quay lại trang chủ</a>
                  </div>
                <?php endif; ?>
              </div>
           </form>             
         </div>
       </div>
     </div>
   </div>
  </div>
</section>