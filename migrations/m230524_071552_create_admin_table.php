<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m230524_071552_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa049}}', [
            'id049' => $this->primaryKey(),
            'no_induk_mahasiswa049' => $this->string(15)->notNull(),
            'nama_mahasiswa049' => $this->string(100)->notNull(),
            'kelas049' => $this->char(1)->notNull(), 
            'status049' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}
