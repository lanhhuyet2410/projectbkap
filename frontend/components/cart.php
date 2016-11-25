<?php 
namespace frontend\components;
/**
* Xử lý giỏ hàng
Gồm các phương thức
*/
use Yii;
class Cart
{
	public $cartstore;
	public $getCost=0;
	public function __construct(){
		$this->cartstore = Yii::$app->session['cart'];
		$this->getCost=$this->getCost();
	}

	public function add($data,$quantity=1)
	{
		if (isset($this->cartstore[$data->product_id])) {
			if ($quantity <= 0 || !is_numeric($quantity)) {
				$this->remove($data);	
			}else{
				$this->cartstore[$data->product_id]->qtt=$this->cartstore[$data->product_id]->qtt+$quantity;
			}

		}else{
			if ($quantity > 0 && is_numeric($quantity)) {
				$this->cartstore[$data->product_id]=$data;
				$this->cartstore[$data->product_id]->qtt=$quantity;
			}
			
		}
		
		Yii::$app->session['cart']= $this->cartstore;
		
	}
	public function remove($data){
		unset($this->cartstore[$data->product_id]);
		Yii::$app->session['cart']= $this->cartstore;

	}
	public function update($product_id,$quantity){
		if ($quantity > 0 && is_numeric($quantity)) {
			$this->cartstore[$product_id]->qtt=$quantity;
			Yii::$app->session['cart']= $this->cartstore;
		}else{
			$data = ['product_id'=>$product_id];
			$this->remove((Object)$data);	
		}
	}
	public function getCost(){
			if($this->cartstore){
			foreach ($this->cartstore as $item) {
				$this->getCost+=$item->qtt*$item->price;
			}
		}
		return $this->getCost;
	}
	public function getTotoItem(){
		$total=0;
		if($this->cartstore){
			foreach ($this->cartstore as $item) {
				$total+=$item->qtt;
			}
		}
		return $total;
	}
	
	public function removeall(){
		$this->cartstore=[];
		Yii::$app->session['cart']= $this->cartstore;
	}

} 
?>