<?php 
namespace frontend\widgets;
use frontend\models\Product;
use yii\base\Widget;
use yii\helpers\Html;


class popularWidget extends Widget
{
    public $message;
    
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        $data1 = new Product();
    	$data1 = $data1->getPopularProduct();
        $data2 = new Product();
        $data2 = $data2->getFeaturedProduct();
        $data3 = new Product();
        $data3 = $data3->getLatestProduct();
        return $this->render('popularWidget',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }
}

?>