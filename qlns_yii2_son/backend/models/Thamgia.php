<?php

namespace backend\models;

use Yii;
use backend\models\Club;
use backend\models\Employees;

/**
 * This is the model class for table "thamgia".
 *
 * @property int $id_tg
 * @property int $id_employees
 * @property int $id_club
 *
 * @property Club $club
 * @property Employees $employees
 */
class Thamgia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thamgia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_employees', 'id_club'], 'required'],
            [['id_employees', 'id_club'], 'integer'],
            [['id_club'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['id_club' => 'id_cl']],
            [['id_employees'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['id_employees' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tg' => 'Id Tg',
            'id_employees' => 'Id Employees',
            'id_club' => 'Id Club',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(Club::className(), ['id_cl' => 'id_club']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasOne(Employees::className(), ['id' => 'id_employees']);
    }
}
