<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Yii::$app->urlManager->baseUrl ?>"><span>hoanganh</span>daily shop</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo Yii::$app->user->identity->username; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= Yii::$app->homeUrl.'user/view?id='.Yii::$app->user->identity->id; ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin tài khoản</a></li>
                            <li>
                                <?php echo Html::a('<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Thoát',['/site/logout'],['data-method'=>'post']); ?>
                                <!-- <a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a> -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
       <?php 
        $othercontrol = ['payment','deliver','size','color','subscribe','user'];
    ?>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <!-- <div class="form-group"> -->
                <!-- <input type="text" class="form-control" placeholder="Search"> -->
            <!-- </div> -->
        </form>
        <ul class="nav menu">
            <?php 
            $controller = Yii::$app->controller->id;
             ?>
            <li <?php echo ($controller == 'category') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'category' ?>"><svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg> Danh mục</a></li>
            <li <?php echo ($controller == 'product') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'product' ?>"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg> Sản phẩm</a></li>
            <li <?php echo ($controller == 'order') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'order' ?>"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Đơn hàng</a></li>
            <li <?php echo ($controller == 'factory') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'factory' ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Nhãn hiệu</a></li>
            <li <?php echo ($controller == 'news') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'news' ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Tin tức</a></li>
            <li <?php echo ($controller == 'contact') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'contact' ?>"><svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg> Liên hệ</a></li>
            <li <?php echo ($controller == 'customer') ? 'class="active"' :''; ?>><a href="<?php echo Yii::$app->homeUrl.'customer' ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Thành viên</a></li>
            <li class="parent <?php echo (in_array($controller, $othercontrol)) ? ' active' :''; ?>">
                <a href="">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Khác </span>
                </a>
             
                <ul class="children collapse <?php echo (in_array($controller, $othercontrol)) ? 'in' :''; ?>" id="sub-item-1">
                    <li <?php echo ($controller == 'user') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'user' ?>">
                            <svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Quản trị viên
                        </a>
                    </li>
                    <li <?php echo ($controller == 'payment') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'payment' ?>">
                            <svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Phương thức thanh toán
                        </a>
                    </li>
                    <li <?php echo ($controller == 'deliver') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'deliver' ?>">
                            <svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Phương thức giao hàng
                        </a>
                    </li>
                    <li <?php echo ($controller == 'size') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'size' ?>">
                            <svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Size
                        </a>
                    </li>
                    <li <?php echo ($controller == 'color') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'color' ?>">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Color
                        </a>
                    </li>
                    <li <?php echo ($controller == 'subscribe') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'subscribe' ?>">
                            <svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Subscribe
                        </a>
                    </li>
                    <li <?php echo ($controller == 'banner') ? 'class="active"' :''; ?>>
                        <a class="" href="<?php echo Yii::$app->homeUrl.'banner' ?>">
                            <svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Banner
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

<?php $this->endBody() ?>
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <iframe width="100%" height="550" frameborder="0" src="../../filemanager/dialog.php?type=0&field_id=proImg" value="Files"> </iframe>
        </div>
    </div>
</body>
</html>
<?php $this->endPage() ?>
