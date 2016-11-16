<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $contact_id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $company
 * @property string $message
 * @property integer $status
 * @property integer $created_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'company', 'message'], 'required','message'=>'{attribute} không được để trống'],
            [['email'],'email','message'=>'{attribute} không đúng định dạng email'],
            [['message'], 'string'],
            [['status', 'created_at'], 'integer'],
            [['name', 'email', 'subject', 'company'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'name' => 'Tên liên hệ',
            'email' => 'Email',
            'subject' => 'Chủ đề',
            'company' => 'Công ty',
            'message' => 'Tin nhắn',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
        ];
    }
}
