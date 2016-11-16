<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAsset::register($this);
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

    
<div class="main">
	<div class="row">
		<div class="login-form">
			<div class="sap_tabs w3ls-tabs">
				<h1>Chào mừng đến với trang quản trị</h1>
					<div class="login-agileits-top"> 
						<?= $content ?>
					</div>
					<div class="login-agileits-bottom">
						<p> © 2016 Login Admin | Design by Hoang Anh</a></p>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
        
 

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
