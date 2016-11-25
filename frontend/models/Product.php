<?php

namespace frontend\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_image
 * @property integer $cat_id
 * @property integer $factory_id
 * @property integer $price
 * @property integer $saleoff
 * @property string $start_sale
 * @property string $end_sale
 * @property string $size_id
 * @property string $color_id
 * @property string $description
 * @property string $content
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $qtt;
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'cat_id', 'factory_id', 'price', 'size_id', 'color_id'], 'required'],
            [['cat_id', 'factory_id', 'price', 'saleoff', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['product_name', 'product_image', 'start_sale', 'end_sale', 'size_id', 'color_id', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'product_image' => 'Product Image',
            'cat_id' => 'Cat ID',
            'factory_id' => 'Factory ID',
            'price' => 'Price',
            'saleoff' => 'Saleoff',
            'start_sale' => 'Start Sale',
            'end_sale' => 'End Sale',
            'size_id' => 'Size ID',
            'color_id' => 'Color ID',
            'description' => 'Description',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllProduct(){
        $data = Product::find()->asArray()->all();
        return $data;
    }

    public function seachResult(){
        $data = Product::find()->where(['LIKE','product_name',Yii::$app->request->get('query')])->asArray()->all();
        return $data;
    }

    public function getLimitProduct($limit=8){
        $data = Product::find()->limit($limit)->asArray()->all();
        return $data;
    }

    public function getRandomProduct($limit=8){
        $data = Product::find()->orderBy('rand()')->limit($limit)->asArray()->all();
        return $data;
    }

    public function getRecentlyProduct($limit=3){
        $data = Product::find()->orderBy('rand()')->limit($limit)->asArray()->all();
        return $data;
    }

    public function getTopRatedProduct($limit=3){
        $data = Product::find()->where('saleoff'>0)->orderBy('rand()')->limit($limit)->asArray()->all();
        return $data;
    }

    public function getProductByParentId($id){
        $catID = [$id];
        $cat = Category::find()->where(['parent_id'=>$id])->asArray()->all();
        if ($cat) {
            foreach ($cat as $child) {
                $catID[] = $child['cat_id'];
            }
        }

        $data = Product::find()->where(['cat_id'=>$catID])->asArray()->all();
        return $data;
    }

    public function getProductByCatId($id){
        $data = Product::find()->where('cat_id=:cat_id',['cat_id'=>$id])->asArray()->all();
        return $data;
    }

    public function getProductByFactory($id){
        $data = Product::find()->where('factory_id=:factory_id',['factory_id'=>$id])->asArray()->all();
        return $data;
    }
    
    // Relation ship
    public function Cat(){
        return Category::find()->where(['cat_id'=>$this->cat_id])->one();
    }

    public function getProductById($id){
        $data = Product::find()->where('product_id=:product_id',['product_id'=>$id])->asArray()->one();
        return $data;
    }

    public function getRelatedProduct($id){
        
        $data = Product::find()->where(['not in','product_id',$id])->all();
    }

    public function getDataTabProduct($catid,$limit = 8){
        $data = Product::find()->where('cat_id=:catid',['catid'=>$catid])->limit($limit)->orderBy('rand()')->asArray()->all();
        return $data;
    } 

    public function getPopularProduct($limit = 8){
        $data = Product::find()->orderBy('rand()')->limit($limit)->orderBy('rand()')->asArray()->all();
        return $data;
    }

    public function getFeaturedProduct($limit = 8){
        $data = Product::find()->orderBy('rand()')->limit($limit)->orderBy('rand()')->asArray()->all();
        return $data;
    }

    public function getLatestProduct($limit = 8){
        $data = Product::find()->limit($limit)->orderBy('product_id DESC')->asArray()->all();
        return $data;
    }


    public function getColor($color_id){
        return \backend\models\Color::findOne(['color_id'=>$color_id]);
    }

    public function getSize($size_id){
        return \backend\models\Size::findOne(['size_id'=>$size_id]);
    }

    // function getDataProduct($limit = 8){
    //     $data = Product::find()->asArray()->limit($limit)->orderBy('rand()')->all();
    //     return $data;
    // }

    // function getProductByCat($catid){
    //     $pages = $this->getPagerProduct($catid);
    //     $data = Product::find()->asArray()->where('cat_id=:cat_id',['cat_id'=>$catid])
    //             ->offset($pages->offset)->limit($pages->limit)->all();
    //     return $data;
    // }

    // function getPagerProduct($catid){
    //     $data = Product::find()->asArray()->where('cat_id=:cat_id',['cat_id'=>$catid])->all();
    //     $pages = new Pagination(['totalCount' => count($data),'pageSize' => \Yii::$app->params['param']['pageSize']]);
    //     return $pages;
    // }

    // function getInfoProductBy($id){
    //     $data = Product::find()->asArray()->where('pro_id=:id',['id'=>$id])->one();
    //     return $data;
    // }
}
