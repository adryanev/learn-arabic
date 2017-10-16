<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ujian;

/**
 * UjianSearch represents the model behind the search form of `app\models\Ujian`.
 */
class UjianSearch extends Ujian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUjian', 'idUser', 'totalSkor', 'idWaktu'], 'integer'],
            [['tglUjian'], 'safe'],
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
        $query = Ujian::find();

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
            'idUjian' => $this->idUjian,
            'idUser' => $this->idUser,
            'tglUjian' => $this->tglUjian,
            'totalSkor' => $this->totalSkor,
            'idWaktu' => $this->idWaktu,
        ]);

        return $dataProvider;
    }
}
