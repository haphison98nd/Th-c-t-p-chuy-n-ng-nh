<?php

namespace backend\models;

use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "phong".
 *
 * @property int $id_pb
 * @property string $name_pb
 * @property string $email_pb
 * @property string $tel_pb
 * @property int $user_id
 *
 * @property User $user
 */
class Phong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Phong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_p', 'email_p' , 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['name_p', 'email_p', 'tel_p'], 'string', 'max' => 255],
            [['name_p'], 'unique'],
            [['email_p'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            ['email_p', 'match' ,'pattern' => '/[a-z0-9A-Z]@[a-z]{3,}\.[a-z]{3}$/'],
            ['tel_p', 'match' , 'pattern' => '/[\d]{1,4}-[\d]{1,4}-[\d]{1,4}$/'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_p' => 'Id Pb',
            'name_p' => 'Name Pb',
            'email_p' => 'Email Pb',
            'tel_p' => 'Tel Pb',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function checkIdPb($id_pb){
        $data = Phong::find()->asArray()->all();
        $kt = 0;
        for($i=0 ; $i<count($data) ; $i++){
            if($id_pb === $data[$i]['id_p']){
                $kt++;
            }
        }
        return $kt;
    }


}
