<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $banner_id
 * @property integer $location
 * @property string $image
 * @property string $tile_1
 * @property string $tile_2
 * @property string $tile_3
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location', 'image', 'created_at', 'updated_at'], 'required'],
            [['location', 'status', 'created_at', 'updated_at'], 'integer'],
            [['image', 'tile_1', 'tile_2', 'tile_3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => 'Banner ID',
            'location' => 'Location',
            'image' => 'Image',
            'tile_1' => 'Tile 1',
            'tile_2' => 'Tile 2',
            'tile_3' => 'Tile 3',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getSlider($status = 1){
        $data = Banner::find()->asArray()->where('status=:status',['status'=>$status])->all();
        return $data;
    }
}
