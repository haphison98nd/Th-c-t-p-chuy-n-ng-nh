<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "club".
 *
 * @property int $id_cl
 * @property string $name_cl
 * @property string $info_cl
 */
class Club extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'club';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_cl', 'info_cl'], 'required'],
            [['name_cl', 'info_cl'], 'string', 'max' => 255],
            [['name_cl'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cl' => 'Id Cl',
            'name_cl' => 'Name Cl',
            'info_cl' => 'Info Cl',
        ];
    }

    public function checkIdCl($id_cl){
        $data = Club::find()->asArray()->all();
        $kt = 0;
        for($i=0 ; $i<count($data) ; $i++){
            if($id_cl === $data[$i]['id_cl']){
                $kt++;
            }
        }
        return $kt;
    }
}
