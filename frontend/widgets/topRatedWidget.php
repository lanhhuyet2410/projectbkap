<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;

class topRatedWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$data = new Product();
        $data = $data->getTopRatedProduct();
        return $this->render('topRatedWidget',['data'=>$data]);
    }
}

?>