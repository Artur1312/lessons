<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payout`.
 */
class m170731_071818_create_payout_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('payout', [
            'id' => 'pk',
            'payout_type_id' => $this->integer()->notNull(),
            'total' => $this->integer()->defaultValue(0),
            'comment' => $this->string(255),
            'status' => $this->char(9)->notNull(),
//            'status' => "ENUM('Выплачено', 'Отменено') NOT NULL DEFAULT 'Выплачено'",
        ]);

        // add index for column `payout_type_id`
        $this->createIndex(
            'idx-payout-payout_type_id',
            'payout',
            'payout_type_id'
        );

        // add foreign key for table `payout`
        $this->addForeignKey(
            'fk-payout-payout_type',
            'payout',
            'payout_type_id',
            'payout_type',
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
        // drop foreign key for table `payout`
        $this->dropForeignKey(
            'fk-payout-payout_type',
            'payout'
        );

        // drops index for column `payout_type_id`
        $this->dropIndex(
            'idx-payout-payout_type_id',
            'payout'
        );

        $this->dropTable('payout');
    }
}
