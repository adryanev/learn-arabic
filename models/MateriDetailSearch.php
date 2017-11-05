<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MateriDetail;

/**
 * MateriDetailSearch represents the model behind the search form of `app\models\MateriDetail`.
 */
class MateriDetailSearch extends MateriDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMateriDetail', 'idSubMateri'], 'integer'],
            [['isi', 'gambar', 'terjemahan', 'timestamp'], 'safe'],
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
        $query = MateriDetail::find();

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
            'idMateriDetail' => $this->idMateriDetail,
            'idSubMateri' => $this->idSubMateri,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'terjemahan', $this->terjemahan]);

        return $dataProvider;
    }
}
