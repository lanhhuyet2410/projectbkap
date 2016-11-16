<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "factory".
 *
 * @property integer $factory_id
 * @property string $factory_name
 * @property string $factory_logo
 * @property string $factory_website
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Factory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factory_name', 'factory_logo'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['factory_name', 'factory_logo', 'factory_website'], 'string', 'max' => 255],
            [['factory_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'factory_id' => 'Factory ID',
            'factory_name' => 'Tên nhãn hiệu',
            'factory_logo' => 'Logo',
            'factory_website' => 'Website',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }

    public function getAllFactory(){
        $data = Factory::find()
        ->where(['status'=> '1'])
        ->asArray()
        ->all();
    return $data;
    }
}
