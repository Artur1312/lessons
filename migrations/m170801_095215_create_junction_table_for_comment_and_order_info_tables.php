<?php
use yii\db\Migration;
/**
 * Handles the creation of table `comment_order_info`.
 * Has foreign keys to the tables:
 *
 * - `comment`
 * - `order_info`
 */
class m170801_095215_create_junction_table_for_comment_and_order_info_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment_order_info', [
            'comment_id' => $this->integer(),
            'order_info_id' => $this->integer(),
            'PRIMARY KEY(comment_id, order_info_id)',
        ]);
        // creates index for column `comment_id`
        $this->createIndex(
            'idx-comment_order_info-comment_id',
            'comment_order_info',
            'comment_id'
        );
        // add foreign key for table `comment`
        $this->addForeignKey(
            'fk-comment_order_info-comment_id',
            'comment_order_info',
            'comment_id',
            'comment',
            'id',
            'CASCADE'
        );
        // creates index for column `order_info_id`
        $this->createIndex(
            'idx-comment_order_info-order_info_id',
            'comment_order_info',
            'order_info_id'
        );
        // add foreign key for table `order_info`
        $this->addForeignKey(
            'fk-comment_order_info-order_info_id',
            'comment_order_info',
            'order_info_id',
            'order_info',
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
            'fk-comment_order_info-comment_id',
            'comment_order_info'
        );
        // drops index for column `comment_id`
        $this->dropIndex(
            'idx-comment_order_info-comment_id',
            'comment_order_info'
        );
        // drops foreign key for table `order_info`
        $this->dropForeignKey(
            'fk-comment_order_info-order_info_id',
            'comment_order_info'
        );
        // drops index for column `order_info_id`
        $this->dropIndex(
            'idx-comment_order_info-order_info_id',
            'comment_order_info'
        );
        $this->dropTable('comment_order_info');
    }
}