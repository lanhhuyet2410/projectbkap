<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;

class categoryWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$cat = new Category();
    	$dataCat = $cat->getCategoryList();
        return $this->render('categoryWidget',['dataCat'=>$dataCat]);
    }
}

?>