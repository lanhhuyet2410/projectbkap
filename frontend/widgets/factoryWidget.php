<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Factory;

class factoryWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$dataFactory = new Factory();
    	$dataFactory = $dataFactory->getFactoryList();
        return $this->render('factoryWidget',['dataFactory'=>$dataFactory]);
    }
}

?>