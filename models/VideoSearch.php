<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Video;

/**
 * VideoSearch represents the model behind the search form of `app\models\Video`.
 */
class VideoSearch extends Video
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVideo'], 'integer'],
            [['idYoutubeVideo', 'namaVideo', 'timestamp'], 'safe'],
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
        $query = Video::find();

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
            'idVideo' => $this->idVideo,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'idYoutubeVideo', $this->idYoutubeVideo])
            ->andFilterWhere(['like', 'namaVideo', $this->namaVideo]);

        return $dataProvider;
    }
}
