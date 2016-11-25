<?php 
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use frontend\models\Product;
/**
* Class Quản lý giỏ hàng
*/
class CartController extends Controller
{
	
	function actionIndex()
	{
		$cart=new Cart();
		$cartstore= Yii::$app->session['cart'];
		$cost=$cart->getCost;
		$totalItem=$cart->getTotoItem();
		return $this->render('index',[
			'cartstore'=>$cartstore,
			'cost'=>$cost,
			'totalItem'=>$totalItem
		]);

	}
	
	public function actionAddCart($product_id,$qty)
	{
		$cart=new Cart();
		$model=Product::findone(['product_id'=>$product_id]);
		if($model){
			$cart->add($model,$qty);
		}else{
			echo 'Error';
		}

		// return $this->redirect(['/cart']);
	}
	public function actionRemove($product_id){
		$cart=new Cart();
		$model=Product::findone(['product_id'=>$product_id]);
		$cart->remove($model);
		return $this->redirect(['/cart']);
	}
	public function actionUpdateCart()
	{
		$cart=new Cart();
		if (Yii::$app->request->post()) {
			$product_id=$_POST["product_id"];
		$qtt=$_POST["qtt"];
		$cart->update($product_id,$qtt);
		
		}
		return $this->redirect(['/cart']);
	}
	public function actionClear(){
		$cart=new Cart();
		$cart->removeall();
		return $this->redirect(['/cart']);
	}
}

?>