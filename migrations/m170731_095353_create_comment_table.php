<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m170731_095353_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => 'pk',
            'create_time' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'creator_id' => $this->integer(),
            'client_id' => $this->integer(),
            'text' => $this->text()->notNull(),
            'is_removed' => "tinyint(1) NOT NULL DEFAULT 0"
        ]);

        $this->createIndex(
            'idx-comment-client_id',
            'comment',
            'client_id'
        );

        $this->addForeignKey(
            'fk-comment-client',
            'comment',
            'client_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'

        );

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-comment-client',
            'comment'
        );

        $this->dropIndex(
            'idx-comment-client_id',
            'comment'
        );

        $this->dropTable('comment');
    }
}
