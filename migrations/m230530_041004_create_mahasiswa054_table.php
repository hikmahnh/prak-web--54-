<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa054}}`.
 */
class m230530_041004_create_mahasiswa054_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa54}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string(100)->notNull(),
            'nama_mahasiswa' => $this->string(125)->notNull(),
            'kelas' => $this->string(100)->notNull(),
            'status' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa054}}');
    }
}
