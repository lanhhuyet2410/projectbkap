<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;


class recentlyViewWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$data = new Product();
        $data = $data->getRecentlyProduct();
        return $this->render('recentlyViewWidget',['data'=>$data]);
    }
}

?>