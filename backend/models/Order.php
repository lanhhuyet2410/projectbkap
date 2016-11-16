<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property integer $order_id
 * @property integer $user_id
 * @property string $userName
 * @property string $email
 * @property string $mobile
 * @property string $addess
 * @property string $user_ship
 * @property string $email_ship
 * @property string $mobile_ship
 * @property string $addess_ship
 * @property string $request
 * @property integer $total
 * @property integer $payment_id
 * @property integer $deliver_id
 * @property integer $status
 * @property integer $created_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userName', 'email', 'mobile', 'addess', 'user_ship', 'email_ship', 'mobile_ship', 'addess_ship', 'total', 'payment_id'], 'required','message'=>'{attribute} không được để trống'],
            [['user_id', 'total', 'payment_id', 'deliver_id', 'status', 'created_at'], 'integer'],
            [['email', 'email_ship'],'email','message'=>'{attribute} không đúng định dạng email'],
            [['request'], 'string'],
            [['userName', 'email', 'mobile', 'addess', 'user_ship', 'email_ship', 'mobile_ship', 'addess_ship'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'userName' => 'Tên người mua',
            'email' => 'Email người mua',
            'mobile' => 'Điện thoại người mua',
            'addess' => 'Địa chỉ người mua',
            'user_ship' => 'Tên người nhận',
            'email_ship' => 'Email người nhận',
            'mobile_ship' => 'Điện thoại người nhận',
            'addess_ship' => 'Địa chỉ người nhận',
            'request' => 'Yêu cầu',
            'total' => 'Tổng tiền',
            'payment_id' => 'Phương thức thanh toán',
            'deliver_id' => 'Phương thức giao hàng',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
        ];
    }
    public function getPayment(){
        return $this->hasOne(Payment::classname(),['payment_id'=>'payment_id']);
    }
    public function getDeliver(){
        return $this->hasOne(Deliver::classname(),['deliver_id'=>'deliver_id']);
    }
}
