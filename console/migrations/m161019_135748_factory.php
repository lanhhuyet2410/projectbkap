<?php

use yii\db\Migration;

class m161019_135748_factory extends Migration
{
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%factory}}', [
            'factory_id' => $this->primaryKey(),
            'factory_name' => $this->string()->notNull()->unique(),
            'factory_logo' => $this->string()->notNull(),
            'factory_website' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%factory}}');
    }
}
