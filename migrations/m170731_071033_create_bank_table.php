<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bank`.
 */
class m170731_071033_create_bank_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bank', [
            'id' => 'pk',
            'name' => $this->string(128)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('bank');
    }
}
