<?php

use yii\db\Migration;

/**
 * Class m230322_192947_books
 */
class m230322_192947_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);		
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230322_192947_books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230322_192947_books cannot be reverted.\n";

        return false;
    }
    */
}
