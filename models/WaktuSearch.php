<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Waktu;

/**
 * WaktuSearch represents the model behind the search form of `app\models\Waktu`.
 */
class WaktuSearch extends Waktu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idWaktu'], 'integer'],
            [['namaWaktu', 'durasiWaktu'], 'safe'],
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
        $query = Waktu::find();

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
            'idWaktu' => $this->idWaktu,
            'durasiWaktu' => $this->durasiWaktu,
        ]);

        $query->andFilterWhere(['like', 'namaWaktu', $this->namaWaktu]);

        return $dataProvider;
    }
}
