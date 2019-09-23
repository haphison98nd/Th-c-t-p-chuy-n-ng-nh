<?php

use yii\db\Migration;

/**
 * Class m190327_031719_Phong
 */
class m190327_031719_Phong extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Phong}}', [
            'id_p' => $this->primaryKey(),
            'name_p' => $this->string()->notNull()->unique(),
            'email_p' => $this->string()->notNull()->unique(),
            'tel_p' => $this->string(),
            'user_id' => $this->integer()->notNull(), // id truong phong
        ], $tableOptions);

        $this->createIndex(
            'idx-Phong-user_id',
            'Phong',
            'user_id'
        );

        $this->addForeignKey(
            'fk-Phong-user_id',
            'Phong',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190327_031719_Phong cannot be reverted.\n";
        $this->dropTable('{{%Phong}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190327_031719_Phong cannot be reverted.\n";

        return false;
    }
    */
}
