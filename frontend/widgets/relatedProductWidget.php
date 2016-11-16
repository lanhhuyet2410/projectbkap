<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;


class relatedProductWidget extends Widget
{
    public $data;
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('relatedProductWidget',['data'=>$this->data]);
    }
}

?>