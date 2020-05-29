<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%permiso}}`.
 */
class m200529_205821_create_permiso_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%permiso}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string()->notNull(),
            'istaff' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%permiso}}');
    }
}
