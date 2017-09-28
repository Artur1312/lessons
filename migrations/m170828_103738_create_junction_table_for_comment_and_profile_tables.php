<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment_profile`.
 * Has foreign keys to the tables:
 *
 * - `comment`
 * - `profile`
 */
class m170828_103738_create_junction_table_for_comment_and_profile_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment_profile', [
            'comment_id' => $this->integer(),
            'profile_id' => $this->integer(),
            'PRIMARY KEY(comment_id, profile_id)',
        ]);

        // creates index for column `comment_id`
        $this->createIndex(
            'idx-comment_profile-comment_id',
            'comment_profile',
            'comment_id'
        );

        // add foreign key for table `comment`
        $this->addForeignKey(
            'fk-comment_profile-comment_id',
            'comment_profile',
            'comment_id',
            'comment',
            'id',
            'CASCADE'
        );

        // creates index for column `profile_id`
        $this->createIndex(
            'idx-comment_profile-profile_id',
            'comment_profile',
            'profile_id'
        );

        // add foreign key for table `profile`
        $this->addForeignKey(
            'fk-comment_profile-profile_id',
            'comment_profile',
            'profile_id',
            'profile',
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
            'fk-comment_profile-comment_id',
            'comment_profile'
        );

        // drops index for column `comment_id`
        $this->dropIndex(
            'idx-comment_profile-comment_id',
            'comment_profile'
        );

        // drops foreign key for table `profile`
        $this->dropForeignKey(
            'fk-comment_profile-profile_id',
            'comment_profile'
        );

        // drops index for column `profile_id`
        $this->dropIndex(
            'idx-comment_profile-profile_id',
            'comment_profile'
        );

        $this->dropTable('comment_profile');
    }
}
