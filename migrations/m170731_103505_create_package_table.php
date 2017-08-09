<?php

use yii\db\Migration;

/**
 * Handles the creation of table `package`.
 */
class m170731_103505_create_package_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('package', [
            'id' => 'pk',
            'client_id' => $this->integer(),
            'product_id' => $this->integer(),
            'course_type_id' => $this->integer(),
            'duration' => $this->integer(),
            'tutor_id' => $this->integer(),
            'rate' => $this->integer(),
            'left_lessons' => $this->integer(),
            'passed_lessons' => $this->integer(),
            'total_lessons' => $this->integer(),
            'comment' => $this->string(),
            'status' => $this->char(9)->notNull()->defaultValue('Обучается'),
//            'status' => "ENUM('Обучается', 'Пауза', 'Закрыт') NOT NULL DEFAULT 'Обучается'",
            'is_removed' => "tinyint(1) NOT NULL DEFAULT 0"
        ]);

        $this->createIndex(
            'idx-package-client_id',
            'package',
            'client_id'
        );

        $this->createIndex(
            'idx-package-product_id',
            'package',
            'product_id'
        );

        $this->createIndex(
            'idx-package-course_type_id',
            'package',
            'course_type_id'
        );

        $this->createIndex(
            'idx-package-tutor_id',
            'package',
            'tutor_id'
        );

        $this->addForeignKey(
            'fk-package-client',
            'package',
            'client_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk-package-product',
            'package',
            'product_id',
            'product',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk-package-course',
            'package',
            'course_type_id',
            'course',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk-package-tutor',
            'package',
            'tutor_id',
            'user',
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
        //dropping foregin keys for table 'package'

        $this->dropForeignKey(
            'fk-package-tutor',
            'package'
        );

        $this->dropForeignKey(
            'fk-package-course',
            'package'
        );

        $this->dropForeignKey(
            'fk-package-product',
            'package'
        );

        $this->dropForeignKey(
            'fk-package-client',
            'package'
        );


        //end dropping
        //dropping indexes for table 'package'

        $this->dropIndex(
            'idx-package-tutor_id',
            'package'
        );

        $this->dropIndex(
            'idx-package-course_type_id',
            'package'
        );

        $this->dropIndex(
            'idx-package-product_id',
            'package'
        );

        $this->dropIndex(
            'idx-package-client_id',
            'package'
        );

        //end dropping

        $this->dropTable('package');
    }
}
