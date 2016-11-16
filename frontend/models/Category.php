<?php

namespace frontend\models;


use Yii;
use frontend\models\Product;

/**
 * This is the model class for table "category".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $parent_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Cat Name',
            'parent_id' => 'Parent ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCategoryByParent($parent=0,$status=1){
        $data = Category::find()->where(['parent_id'=>$parent,'status'=>$status])->asArray()->all();
        return $data;
    }

    public function getCategoryList($parentid = 0){
        $data = Category::find()->where('parent_id > 0 and status=1')->all();
        return $data;
    }

    public function getDataTabCategory(){
        $data = Category::find()->where(['parent_id'=>0])->all();
        return $data;
    }

    public function getProductBy($cat_id){
        
        $catID = [$cat_id];
        $cat = Category::find()->where(['parent_id'=>$cat_id])->asArray()->all();
        if ($cat) {
            foreach ($cat as $child) {
                $catID[] = $child['cat_id'];
            }
        }

        $data = Product::find()->where(['cat_id'=>$catID])->limit(8)->asArray()->all();
        return $data;
    }
}
