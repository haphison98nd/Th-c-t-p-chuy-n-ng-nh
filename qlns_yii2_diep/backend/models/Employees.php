<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $tel
 * @property string $auth_key
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'auth_key', 'created_at', 'updated_at','tel' , 'phongId' ], 'required'],
            [['status', 'created_at', 'updated_at' , 'clbId'], 'integer'],
            [['username', 'email', 'tel' , 'idclub'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            ['email' , 'unique'],
            ['email', 'match' ,'pattern' => '/[a-z0-9A-Z]@[a-z]{3,}\.[a-z]{3}$/'],
            ['tel' ,'match', 'pattern' => '/[\d]{1,4}-[\d]{1,4}-?[\d]{1,4}$/' ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'tel' => 'Tel',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function checkId($id){
        $data = employees::find()->asArray()->all();
        $kt = 0;
        for($i=0 ; $i<count($data) ; $i++){
            if($id === $data[$i]['id']){
                $kt++;
            }
        }
        return $kt;
    }


}
