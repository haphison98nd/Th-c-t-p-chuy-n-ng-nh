<?php

use yii\db\Migration;

/**
 * Class m190322_015813_thamgia
 */
class m190322_015813_thamgia extends Migration
{
    /**
     * {@inheritdoc}
     */
//    public function safeUp()
//    {
//
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {
//        echo "m190322_015813_thamgia cannot be reverted.\n";
//
//        return false;
//    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%thamgia}}', [
            'id_tg' => $this->primaryKey(),
            'id_employees' =>$this->integer()->notNull(),
            'id_club' => $this->integer()->notNull()
        ], $tableOptions);

        $this->createIndex(
            'idx-thamgia-id_employees',
            'thamgia',
            'id_employees'
        );

        $this->addForeignKey(
            'fk-thamgia-id_employees',
            'thamgia',
            'id_employees',
            'employees',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-thamgia-id_club',
            'thamgia',
            'id_club'
        );

        $this->addForeignKey(
            'fk-club-id_club',
            'thamgia',
            'id_club',
            'club',
            'id_cl',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m190322_015813_thamgia cannot be reverted.\n";
        $this->dropTable('{{%thamgia}}');
        return false;
    }
}
