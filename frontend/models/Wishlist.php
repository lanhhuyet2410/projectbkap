<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property integer $wishlist_id
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $created_at
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'created_at'], 'required'],
            [['user_id', 'product_id', 'created_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wishlist_id' => 'Wishlist ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'created_at' => 'Created At',
        ];
    }
}
