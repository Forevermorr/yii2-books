<?php

use yii\db\Migration;

/**
 * Class m230322_193155_book_author
 */
class m230322_193155_book_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('{{%book_author}}', [
            'author_id' => $this->integer(10)->notNull(),
            'book_id' => $this->integer(10)->notNull(),
            'priority' => $this->integer(),
            'PRIMARY KEY(book_id, author_id)',
        ]);

        // creates index for column `book_id`
        $this->createIndex(
            '{{%idx-book_author-book_id}}',
            '{{%book_author}}',
            'book_id'
        );

        // add foreign key for table `{{%book}}`
        $this->addForeignKey(
            '{{%fk-book_author-book_id}}',
            '{{%book_author}}',
            'book_id',
            '{{%books}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-book_author-author_id}}',
            '{{%book_author}}',
            'author_id'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-book_author-author_id}}',
            '{{%book_author}}',
            'author_id',
            '{{%authors}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		// drops foreign key for table `{{%book}}`
        $this->dropForeignKey(
            '{{%fk-book_author-book_id}}',
            '{{%book_author}}'
        );

        // drops index for column `book_id`
        $this->dropIndex(
            '{{%idx-book_author-book_id}}',
            '{{%book_author}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-book_author-author_id}}',
            '{{%book_author}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-book_author-author_id}}',
            '{{%book_author}}'
        );

        $this->dropTable('{{%book_author}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230322_193155_book_author cannot be reverted.\n";

        return false;
    }
    */
}
