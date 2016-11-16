<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\News;


class blogWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$data = new News();
    	$data = $data->getNews();
        return $this->render('blogWidget',['data'=>$data]);
    }
}

?>