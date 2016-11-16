<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "deliver".
 *
 * @property integer $deliver_id
 * @property string $deliver_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Deliver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deliver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deliver_name'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['deliver_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'deliver_id' => 'Deliver ID',
            'deliver_name' => 'Phương thức giao hàng',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
    public function getAllDeliver(){
        $data = Deliver::find()
        ->where(['status'=>'1'])
        ->asArray()
        ->all();
    return $data;
    }
}
