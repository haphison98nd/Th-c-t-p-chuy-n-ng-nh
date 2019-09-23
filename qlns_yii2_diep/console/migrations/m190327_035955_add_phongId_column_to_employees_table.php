<?php

use yii\db\Migration;

/**
 * Handles adding phongId to table `{{%employees}}`.
 */
class m190327_035955_add_phongId_column_to_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employees', 'phongId', $this->integer());

        $this->createIndex(
            'idx-employees-phongId',
            'employees',
            'phongId'
        );

        $this->addForeignKey(
            'fk-employees-phongId',
            'employees',
            'phongId',
            'Phong',
            'id_p',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employees', 'phongId');
    }
}
