<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stimulus}}`.
 */
class m230526_001714_create_stimulus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stimulus}}', [
            'id' => $this->primaryKey(),
            'kode_bagian' => $this ->string()->notNull()->unique(),
            'teks' => $this ->string()->notNull(),
            'catatan' => $this ->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stimulus}}');
    }
}
