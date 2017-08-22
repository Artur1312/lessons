<?php

use yii\db\Migration;

/**
 * Handles the creation of table `promocode`.
 */
class m170731_075052_create_promocode_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('promocode', [
            'id' => 'pk',
            'name' => $this->string(128)->notNull()->unique(),
            'action_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-promocode-action_id',
            'promocode',
            'action_id'
        );

        // add foreign key for table `payout`
        $this->addForeignKey(
            'fk-promocode-action',
            'promocode',
            'action_id',
            'action',
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
            'fk-promocode-action',
            'promocode'
        );

        // drops index for column `payout_type_id`
        $this->dropIndex(
            'idx-promocode-action_id',
            'promocode'
        );

        $this->dropTable('promocode');
    }
}
