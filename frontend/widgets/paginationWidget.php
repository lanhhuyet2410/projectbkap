<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\data\Pagination;

class paginationWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('paginationWidget');
    }
}

?>