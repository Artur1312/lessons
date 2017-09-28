<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payout_type`.
 */
class m170731_071423_create_payout_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('payout_type', [
            'id' => 'pk',
            'name' => $this->string(128)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('payout_type');
    }
}
