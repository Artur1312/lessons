<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170731_065737_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => $this->string(255)->defaultValue(null),
            'email' => $this->string(255)->defaultValue(null)->unique(),
            'password' => $this->string(128)->defaultValue(null),
            'create_time' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
