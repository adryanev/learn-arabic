<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubMateri;

/**
 * SubMateriSearch represents the model behind the search form of `app\models\SubMateri`.
 */
class SubMateriSearch extends SubMateri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSubMateri', 'idMateri', 'idKategori'], 'integer'],
            [['timestamp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SubMateri::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idSubMateri' => $this->idSubMateri,
            'idMateri' => $this->idMateri,
            'idKategori' => $this->idKategori,
            'timestamp' => $this->timestamp,
        ]);

        return $dataProvider;
    }
}
