<?php

use yii\db\Migration;

/**
 * Class m200528_023756_fecha_nacimiento_usuario
 */
class m200528_023756_fecha_nacimiento_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("usuario","fec_nacimiento",$this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("usuario","fec_nacimiento");

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200528_023756_fecha_nacimiento_usuario cannot be reverted.\n";

        return false;
    }
    */
}
