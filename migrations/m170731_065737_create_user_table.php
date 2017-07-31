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
            'username' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(128)->notNull(),
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
