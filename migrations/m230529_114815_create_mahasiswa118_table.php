<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa118}}`.
 */
class m230529_114815_create_mahasiswa118_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa118}}', [
            'id118' => $this->primaryKey(),
            'no_induk_mahasiswa118' => $this->string(15)->notNull(),
            'nama_mahasiswa118' => $this->string(100)->notNull(),
            'kelas118' => $this->char(1)->notNull(), 
            'status118' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa118}}');
    }
}
