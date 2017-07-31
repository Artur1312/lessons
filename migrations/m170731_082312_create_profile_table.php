<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profile`.
 */
class m170731_082312_create_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('profile', [
            'id' => 'pk',
            'user_id' => $this->integer()->notNull(),
            'skype' => $this->string(255)->notNull()->unique(),
            'phone' => $this->integer()->notNull(),
            'country' => $this->string(38)->notNull(),
            'city' => $this->string(178)->notNull(),
            'ip_address' => $this->integer()->defaultValue(0),
            'age' => $this->integer()->notNull(),
            'gender' => "ENUM('Мужской', 'Женский') NOT NULL",
            'dob' => $this->date()->notNull(), //date of birth
            'activity' => $this->string(255),
            'interests' => $this->string(255),
            'wallet_id'=> $this->integer(),
        ]);

        $this->createIndex(
            'idx-profile-user_id',
            'profile',
            'user_id'
        );

        $this->createIndex(
            'idx-profile-wallet_id',
            'profile',
            'wallet_id'
        );

        $this->addForeignKey(
            'fk-profile-user',
            'profile',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk-profile-wallet',
            'profile',
            'wallet_id',
            'wallet',
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
        $this->dropForeignKey(
            'fk-profile-wallet',
            'profile'
        );

        $this->dropForeignKey(
            'fk-profile-user',
            'profile'
        );

        $this->dropIndex(
            'idx-profile-wallet_id',
            'profile'
        );

        $this->dropIndex(
            'idx-profile-user_id',
            'profile'
        );

        $this->dropTable('profile');
    }
}
