<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;

class topNavWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$cat = new Category();
    	$dataCat = $cat->getCategoryByParent();
        return $this->render('topNavWidget',['dataCat'=>$dataCat]);
    }
}

?>