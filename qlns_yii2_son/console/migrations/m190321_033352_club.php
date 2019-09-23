<?php

use yii\db\Migration;

/**
 * Class m190321_033352_club
 */
class m190321_033352_club extends Migration
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
//        echo "m190321_033352_club cannot be reverted.\n";
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

        $this->createTable('{{%club}}', [
            'id_cl' => $this->primaryKey(),
            'name_cl' => $this->string()->notNull()->unique(),
            'info_cl' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m190321_033352_club cannot be reverted.\n";
        $this->dropTable('{{%club}}');
        return false;
    }

}
