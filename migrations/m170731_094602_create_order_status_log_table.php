<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_status_log`.
 */
class m170731_094602_create_order_status_log_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order_status_log', [
            'id' => 'pk',
            'create_time' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'creator_id' => $this->integer(),
            'order_id' => $this->integer(),
            'status' => "ENUM('Новый','Принят','Невалид','Дубликат','Недозвон','Неинтересно','Потвержден','Отложен','Передумал','Готов к оплате','Непродан','Продажа','Апсейл') NOT NULL DEFAULT 'Новый'",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order_status_log');
    }
}
