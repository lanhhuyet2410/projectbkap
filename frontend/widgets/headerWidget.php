<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\common\Cart;
use Yii;
use yii\web\Session;

class headerWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('headerWidget');
    }
}

?>