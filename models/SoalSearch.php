<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Soal;

/**
 * SoalSearch represents the model behind the search form of `app\models\Soal`.
 */
class SoalSearch extends Soal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSoal'], 'integer'],
            [['gambar', 'soal', 'a', 'b', 'c', 'd', 'jawaban', 'timestamp'], 'safe'],
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
        $query = Soal::find();

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
            'idSoal' => $this->idSoal,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'soal', $this->soal])
            ->andFilterWhere(['like', 'a', $this->a])
            ->andFilterWhere(['like', 'b', $this->b])
            ->andFilterWhere(['like', 'c', $this->c])
            ->andFilterWhere(['like', 'd', $this->d])
            ->andFilterWhere(['like', 'jawaban', $this->jawaban]);

        return $dataProvider;
    }
}
