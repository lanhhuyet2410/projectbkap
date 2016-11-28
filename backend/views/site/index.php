<?php

/* @var $this yii\web\View */

$this->title = 'Quản trị hệ thống';
?>
<div class="container-fluid">
    <div class = "row disable_side">
        <div class = "col-xs-12 col-sm-6 col-md-3 col-lg-3 new_nth">
            <div class = "hot_new">
                <h5>Quản trị viên</h5>
                <h6><?= count($user) ?></h6>
            </div>
        </div>
        <div class = "col-xs-12 col-sm-6 col-md-3 col-lg-3 new_nth">
            <div class = "hot_new">
                <h5>Số bài viết</h5>
                <h6><?= count($news) ?></h6>
            </div>
        </div>
        <div class = "col-xs-12 col-sm-6 col-md-3 col-lg-3 new_nth">
            <div class = "hot_new">
                <h5>Số sản phẩm</h5>
                <h6><?= count($product) ?></h6>
            </div>
        </div>
        <div class = "col-xs-12 col-sm-6 col-md-3 col-lg-3 new_nth">
            <div class = "hot_new">
                <h5>Số thành viên</h5>
                <h6><?= count($customer) ?></h6>
            </div>
        </div>
    </div>
    
    <div class = "row disable_side">
        <div class = "col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h1>Thống kê truy cập</h1>
            <p>Thống kê lượng khách hàng truy cập vào website</p>
            <div class = "row box_connect">
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Buổi sáng: <strong>220</strong>
                    </div>
                </div>
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Buổi chiều: <strong>0</strong>
                    </div>
                </div>
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Hôm qua: <strong>550</strong>
                    </div>
                </div>
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Hôm kia: <strong>670</strong>
                    </div>
                </div>
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Tuần trước: <strong>1250</strong>
                    </div>
                </div>
                <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="alert alert-success" role="alert">
                        Tháng trước: <strong>2430</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class = "col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h1>Quản trị viên</h1>
            <ul class="list-group heightAdmin">
                <?php foreach($user as $value) : ?>
                <li class="list-group-item">
                    <a href="<?= Yii::$app->homeUrl.'user/view?id='.$value->id?>"><?php echo $value->username; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class = "row disable_side">
        <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h1>Bài viết mới nhất</h1>
            <ul class="list-group">
                <?php foreach($news as $value) : ?>
                <li class="list-group-item">
                    <span class="badge"><?php echo date('d-m-Y h:i:s',$value->created_at); ?></span>
                    
                    <a href="<?= Yii::$app->homeUrl.'news/view?id='.$value->news_id?>"><?php echo $value->title; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class = "text-right button_a">
                <a href = "<?= Yii::$app->homeUrl.'news/index' ?>">Xem tất cả</a>                         
            </div>
        </div>
        <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h1>Sản phẩm mới nhất</h1>
            <ul class="list-group">
               <?php foreach($product as $value) : ?>
               <li class="list-group-item">
                    <span class="badge"><?php echo date('d-m-Y h:i:s',$value->created_at); ?></span>
                    <a href="<?= Yii::$app->homeUrl.'product/view?id='.$value->product_id?>"><?php echo $value->product_name; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class = "text-right button_a">
                <a href = "<?= Yii::$app->homeUrl.'product/index'; ?>">Xem tất cả</a>                              
            </div>
        </div>
    </div>
</div>
