<?php

namespace frontend\controllers;
use frontend\models\Product;
use frontend\models\Category;
use backend\models\Color;
use backend\models\Size;
use yii\helpers\Json;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = new Product();
        $data = $data->getAllProduct();
        return $this->render('index',['data'=>$data]);
    }

    public function actionSearch()
    {
        $search = new Product();
        $data = $search->seachResult();
        return $this->render('searchresult',['data'=>$data]);
    }

    public function actionListproduct($id){
        $data = new Product();
        $data = $data->getProductByCatId($id);
        return $this->render('listproduct',['data'=>$data]);
    }

    public function actionListproductparent($id){
        $data = new Product();
        $data = $data->getProductByParentId($id);
        return $this->render('listproductparent',['data'=>$data]);
    }

    public function actionListbyfactory($id){
        $data = new Product();
        $data = $data->getProductByFactory($id);
    	return $this->render('listbyfactory',['data'=>$data]);
    }

    public function actionDetail($id){
        $pro = Product::findOne(['product_id'=>$id]);
        $relate = false;
        $dataCat = $pro->Cat();
        if ($dataCat) {

            $relate = Product::find()->where(['cat_id'=>$dataCat->cat_id])->andWhere(['NOT IN','product_id',$id])->limit(8)->asArray()->all();
            // var_dump($relate);
        }

        return $this->render('detail',['data'=>$pro,'relate'=>$relate,'dataCat'=>$dataCat]);
    }

    public function actionQuickView($id){
        $item = Product::find()->where(['product_id'=>$id])->one();
        $data = [];
        $color_data = [];
        $size_data = [];
        $catName = '';
        $colorids = unserialize($item->color_id);
        $colors = Color::find()->where(['color_id'=>$colorids])->all();
        if($colors) {
            foreach ($colors as $cl) $color_data[] = $cl->color_name;
        }
        
        $sizeids = unserialize($item->size_id);
        $sizes = Size::find()->where(['size_id'=>$sizeids])->all();
        if ($sizes) {
            foreach ($sizes as $sz) {
               $size_data[] = $sz->size_name;
           }
        }
        if ($item->cat_id) {
            $cat = Category::find()->where(['cat_id'=>$item->cat_id])->one();
            if ($cat) {
                $catName = $cat->cat_name;
            }
        }
        $data[] = [
                'product_id'=> $item->product_id,
                'product_name'=> $item->product_name,
                'product_image'=> $item->product_image,
                'cat'=> $catName,
                'factory_id'=> $item->factory_id,
                'price'=> $item->price,
                'saleoff'=> $item->saleoff,
                'start_sale'=> $item->start_sale,
                'end_sale'=> $item->end_sale,
                'size'=> $size_data,
                'color'=> $color_data,
                'description'=> $item->description,
            ];
           
        return Json::encode($data);
    }
    // public function actionListproductparent($id){
    //     $data = new Product();
    //     $product = $data->getproductByCat($id);
    //     $pages = $data->getPagerProduct($id);
    // 	return $this->render('listproductparent');
    // }

    // public function actionListbyfactory($id){
    //     $data = new Product();
    //     $product = $data->getproductByCat($id);
    //     $pages = $data->getPagerProduct($id);
    //     return $this->render('listbyfactory');
    // }

    // public function actionDetail($id){
    //     $data = new Product();
    //     $product = $data->getInfoProductBy($id);
    //     return $this->render('detail',["data"=>$product]);
    // }
}
