<?php

namespace backend\models;

use Yii;

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
            [['cat_name'], 'required','message'=>'{attribute} không được để trống'],
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
            'cat_name' => 'Tên danh mục',
            'parent_id' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }

    public $data;
    public function getCategoryParent($parent=0, $level=''){
        $result = Category::find()->asArray()->where('parent_id = :parent',['parent'=>$parent])->all();
        $level ="+";
        foreach ($result as $key => $value) {
            if ($parent==0) {
                $level ="";
            }
            $this->data[$value["cat_id"]] = $level.$value["cat_name"];
            self::getCategoryParent($value["cat_id"],$level);
        }
        return $this->data;
    }
    public function getCategoryByid($id){
      return  Category::findOne($id);
    }

    public function getAllCategory(){
        $data = Category::find()
        ->where(['status'=> '1'])
        ->asArray()
        ->all();
    return $data;
    }
}
