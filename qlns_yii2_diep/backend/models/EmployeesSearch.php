<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\employees;
use backend\models\Phong;

/**
 * EmployeesSearch represents the model behind the search form of `backend\models\employees`.
 */
class EmployeesSearch extends employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at' ], 'integer'],
            [['username', 'email', 'tel', 'auth_key', 'phongId' , 'idclub'], 'safe'],

        ];
    }

    /**
     * {@inheritdoc}
     */
//    public function scenarios()
//    {
//        // bypass scenarios() implementation in the parent class
//        return Model::scenarios();
//    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $query = employees::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        // grid filtering conditions

        $query->andFilterWhere([
            'id' => $this->id,
            'phongId' => $this->phongId,
//            'idclub' => $this->idclub
        ])->orderBy([('id') => SORT_DESC]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like',  'phongId', $this->phongId])
            ->andFilterWhere(['like', 'idclub', $this->idclub]);


        return $dataProvider;
    }
}
