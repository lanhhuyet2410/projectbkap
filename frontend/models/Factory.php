<?php

namespace frontend\models;

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
            [['factory_name', 'factory_logo', 'created_at', 'updated_at'], 'required'],
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
            'factory_name' => 'Factory Name',
            'factory_logo' => 'Factory Logo',
            'factory_website' => 'Factory Website',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getFactoryList(){
        $data = Factory::find()->where('factory_id>1 and status=1')->all();
        return $data;
    }

}
