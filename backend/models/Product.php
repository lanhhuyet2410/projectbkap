<?php

namespace backend\models;

use Yii;

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
 * @property integer $size_id
 * @property integer $color_id
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
            [['product_name', 'cat_id', 'factory_id', 'price', 'size_id', 'color_id'], 'required','message'=>'{attribute} không được để trống'],
            [['cat_id', 'factory_id', 'price', 'saleoff',  'status', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['product_name', 'product_image', 'size_id', 'color_id','start_sale', 'end_sale', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Tên sản phẩm',
            'product_image' => 'Ảnh sản phẩm',
            'cat_id' => 'Danh mục',
            'factory_id' => 'Nhãn hiệu',
            'price' => 'Giá sản phẩm',
            'saleoff' => 'Giảm giá',
            'start_sale' => 'Ngày bắt đầu',
            'end_sale' => 'Ngày kết thúc',
            'size_id' => 'Size',
            'color_id' => 'Color',
            'description' => 'Mô tả',
            'content' => 'Nội dung',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
    public function getCategory(){
        return $this->hasOne(Category::classname(),['cat_id'=>'cat_id']);
    }
    public function getFactory(){
        return $this->hasOne(Factory::classname(),['factory_id'=>'factory_id']);
    }
    public function getColor(){
        return $this->hasMany(Color::classname(),['color_id'=>'color_id']);
    }

    public function getColorS($color_id){
        return Color::find()->where(['color_id'=>$color_id])->one();
    }

    public function getSize(){
        return $this->hasMany(Size::classname(),['size_id'=>'size_id']);
    }

    public function getSizeS($size_id){
        return Size::find()->where(['size_id'=>$size_id])->one();
    }
}
