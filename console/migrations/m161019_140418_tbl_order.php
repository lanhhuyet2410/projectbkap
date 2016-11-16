<?php

use yii\db\Migration;

class m161019_140418_tbl_order extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_order}}', [
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'userName' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'mobile' => $this->string()->notNull(),
            'addess' => $this->string()->notNull(),
            'user_ship' => $this->string()->notNull(),
            'email_ship' => $this->string()->notNull(),
            'mobile_ship' => $this->string()->notNull(),
            'addess_ship' => $this->string()->notNull(),
            'request' => $this->text(),
            'total' => $this->integer()->notNull(),
            'payment_id' => $this->Integer()->notNull(),
            'deliver_id' => $this->Integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_order}}');
    }
}
