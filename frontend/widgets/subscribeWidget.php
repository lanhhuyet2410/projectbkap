<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\ContactForm;

class subscribeWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	
        return $this->render('subscribeWidget');
    }
}

?>