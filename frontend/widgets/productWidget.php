<?php 
namespace frontend\widgets;
use frontend\models\Category;

use yii\base\Widget;
use yii\helpers\Html;


class productWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        $dataCat = new Category();
        $dataCat = $dataCat->getDataTabCategory();
        // var_dump($dataCat);die;
        return $this->render('productWidget',['dataCat'=>$dataCat]);
    }
}

?>