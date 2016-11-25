<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Wishlist;
use frontend\models\Product;
use yii\web\Controller;

class WishlistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $wishlist = Yii::$app->session['wishlist'];
        return $this->render('index',['wishlist'=>$wishlist]);
    }

    public function actionAdd($product_id)
    {
        $list = new Wishlist();
        $model = Product::findone(['product_id'=>$product_id]);
        if($model){
            $list->add($model);
        }else{
            echo 'Error';
        }
        
    }

    public function actionRemove($product_id){
        $wishlist = new Wishlist();
        $model = Product::findone(['product_id'=>$product_id]);
        $wishlist->remove($model);
        return $this->redirect(['/wishlist']);
    }
    
    public function actionClear(){
        $wishlist = new Wishlist();
        $wishlist->removeall();
        return $this->redirect(['/wishlist']);
    }
}
