<?php

use yii\db\Migration;

/**
 * Handles adding clbId to table `{{%employees}}`.
 */
class m190322_065503_add_clbId_column_to_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employees', 'clbId', $this->integer());

        $this->createIndex(
            'idx-employees-clbId',
            'employees',
            'clbId'
        );

        $this->addForeignKey(
            'fk-employees-clbId',
            'employees',
            'clbId',
            'club',
            'id_cl',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */

    public function safeDown()
    {
        $this->dropColumn('employees', 'clbId');
    }
}
