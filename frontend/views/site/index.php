<?php
use frontend\widgets\slideWidget;
use frontend\widgets\promoWidget;
use frontend\widgets\productWidget;
use frontend\widgets\quickViewWidget;
use frontend\widgets\bannerWidget;
use frontend\widgets\popularWidget;
use frontend\widgets\supportWidget;
use frontend\widgets\testimonialWidget;
use frontend\widgets\blogWidget;

/* @var $this yii\web\View */
$this->title = 'Daily Shop';
?>
    <?= slideWidget::widget(); ?>
    <?= promoWidget::widget(); ?>
    <?= productWidget::widget(); ?>
    <?= quickViewWidget::widget(); ?>
    <?= popularWidget::widget(); ?>
    <?= supportWidget::widget(); ?>
    <?= testimonialWidget::widget(); ?>
    <?= blogWidget::widget(); ?>
