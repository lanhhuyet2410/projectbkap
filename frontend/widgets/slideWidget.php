<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Banner;

class slideWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$slider = new Banner();
        $dataSlider = $slider->getSlider();
        return $this->render('slideWidget',['dataSlider'=>$dataSlider]);
    }
}

?>