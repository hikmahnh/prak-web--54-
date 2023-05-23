<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat054}}`.
 */
class m230523_105336_create_obat054_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat054}}', [
            'id' => $this->primaryKey(),
            'kode_obat' =>  $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'stok_obat' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat054}}');
    }
}
