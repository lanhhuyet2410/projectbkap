<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\components\Cart;
use frontend\models\Product;
use Yii;
use yii\web\Session;
use yii\web\Controller;

class headerWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$cart=new Cart;
    	$cartstore= Yii::$app->session['cart'];
		$cost=$cart->getCost;
		$totalItem=$cart->getTotoItem();
        return $this->render('headerWidget',[
            'cartstore'=>$cartstore,
            'cost'=>$cost,
            'totalItem'=>$totalItem,
            ]);
    }
}

?>