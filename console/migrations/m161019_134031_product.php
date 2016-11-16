<?php

use yii\db\Migration;

class m161019_134031_product extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'product_id' => $this->primaryKey(),
            'product_name' => $this->string()->notNull(),
            'product_image' => $this->string(),
            'cat_id' => $this->integer()->notNull(),
            'factory_id' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
            'saleoff' => $this->integer(),
            'start_sale' => $this->string(),
            'end_sale' => $this->string(),
            'size_id' => $this->integer()->notNull(),
            'color_id' => $this->integer()->notNull(),
            'description' => $this->string(),
            'content' => $this->text(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
