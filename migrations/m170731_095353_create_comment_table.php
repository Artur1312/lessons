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
            'author_id' => $this->integer(),
//            'profile_id' => $this->integer(),
            'text' => $this->text()->notNull(),
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'isRemoved'=> "TINYINT (1) default 1",
        ]);

        $this->createIndex(
        'idx-comment-client_id',
        'comment',
        'author_id'
    );

//        $this->createIndex(
//            'idx-comment-profile_id',
//            'comment',
//            'profile_id'
//        );

        $this->addForeignKey(
            'fk-comment-client',
            'comment',
            'author_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'

        );

//        $this->addForeignKey(
//            'fk-comment-profile',
//            'comment',
//            'profile_id',
//            'profile',
//            'id',
//            'CASCADE',
//            'CASCADE'
//
//        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropTable('comment');
    }
}
