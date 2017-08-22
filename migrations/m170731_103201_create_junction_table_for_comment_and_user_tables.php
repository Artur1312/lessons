<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment_user`.
 * Has foreign keys to the tables:
 *
 * - `comment`
 * - `user`
 */
class m170731_103201_create_junction_table_for_comment_and_user_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment_user', [
            'comment_id' => $this->integer(),
            'user_id' => $this->integer(),
            'PRIMARY KEY(comment_id, user_id)',
        ]);

        // creates index for column `comment_id`
        $this->createIndex(
            'idx-comment_user-comment_id',
            'comment_user',
            'comment_id'
        );

        // add foreign key for table `comment`
        $this->addForeignKey(
            'fk-comment_user-comment_id',
            'comment_user',
            'comment_id',
            'comment',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            'idx-comment_user-user_id',
            'comment_user',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-comment_user-user_id',
            'comment_user',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `comment`
        $this->dropForeignKey(
            'fk-comment_user-comment_id',
            'comment_user'
        );

        // drops index for column `comment_id`
        $this->dropIndex(
            'idx-comment_user-comment_id',
            'comment_user'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-comment_user-user_id',
            'comment_user'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-comment_user-user_id',
            'comment_user'
        );

        $this->dropTable('comment_user');
    }
}
