<?php

use yii\db\Migration;

/**
 * Handles adding idclub to table `{{%employees}}`.
 */
class m190327_071900_add_idclub_column_to_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employees', 'idclub', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employees', 'idclub');
    }
}
