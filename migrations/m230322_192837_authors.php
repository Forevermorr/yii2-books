<?php

use yii\db\Migration;

/**
 * Class m230322_192837_authors
 */
class m230322_192837_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'surname' => $this->string(),
            'dob' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230322_192837_authors cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230322_192837_authors cannot be reverted.\n";

        return false;
    }
    */
}
