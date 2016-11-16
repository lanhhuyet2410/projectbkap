<?php 
namespace frontend\components;
use Yii;
use yii\web\Session;
class Cart
{	
	public function addCart($id,$arrData){
	$session = Yii::$app->session;
		if(!isset($session["cart"])){
			$cart[$id]=array(
				"productName"=>$arrData["productName"],
				"price"=>$arrData["price"],
				"priceSale"=>$arrData["priceSale"],
				"image"=>$arrData["image"],
				"amount"=>1
			);
		}
		else {
			$cart=$session["cart"];
			if (array_key_exists($id, $cart)) {
				$cart[$id]=array(
				"productName"=>$arrData["productName"],
				"price"=>$arrData["price"],
				"priceSale"=>$arrData["priceSale"],
				"image"=>$arrData["image"],
				"amount"=>$cart[$id]["amount"]+1
				);
			}
			else{
				$cart[$id]=array(
				"productName"=>$arrData["productName"],
				"price"=>$arrData["price"],
				"priceSale"=>$arrData["priceSale"],
				"image"=>$arrData["image"],
				"amount"=>1
				);
			}
		}
		$session["cart"]=$cart;
	}

	public function delCart($id){
		$session = Yii::$app->session;
    	if(isset($session["cart"])){
    		$cart = $session["cart"];
    		unset($cart["$id"]);
    		$session["cart"]=$cart;
    	}
	}

	public function updateItem($id,$amount){
		$session = Yii::$app->session;
		$cart = $session["cart"];
		if (array_key_exists($id, $cart)) {
			$cart[$id]=array(
			"productName"=>$cart[$id]["productName"],
			"price"=>$cart[$id]["price"],
			"priceSale"=>$cart[$id]["priceSale"],
			"image"=>$cart[$id]["image"],
			"amount"=>$amount
			);
			$session["cart"]=$cart;
		}
	}
}
?>