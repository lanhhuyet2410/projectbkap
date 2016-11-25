<?php

namespace frontend\models;

use Yii;

class Wishlist
{
    
    public $wishlist;
    public function __construct(){
        $this->wishlist = Yii::$app->session['wishlist'];
    }

    public function add($data)
    {
        $this->wishlist[$data->product_id] = $data;
        
        Yii::$app->session['wishlist']= $this->wishlist;
        
    }
    public function remove($data){
        unset($this->wishlist[$data->product_id]);
        Yii::$app->session['wishlist']= $this->wishlist;
    }
    
    public function removeall(){
        $this->wishlist=[];
        Yii::$app->session['wishlist']= $this->wishlist;
    }
}
