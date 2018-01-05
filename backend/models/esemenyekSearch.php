<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\esemenyek;

/**
 * esemenyekSearch represents the model behind the search form about `backend\models\esemenyek`.
 */
class esemenyekSearch extends esemenyek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Jelentkezokmaxszama'], 'integer'],
            [['statusz', 'helyszin', 'csoportok', 'temakorok', 'hrl_munkatars', 'megjegyzes'], 'safe'],
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
        $query = esemenyek::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'Jelentkezokmaxszama' => $this->Jelentkezokmaxszama,
        ]);

        $query->andFilterWhere(['like', 'statusz', $this->statusz])
            ->andFilterWhere(['like', 'helyszin', $this->helyszin])
            ->andFilterWhere(['like', 'csoportok', $this->csoportok])
            ->andFilterWhere(['like', 'temakorok', $this->temakorok])
            ->andFilterWhere(['like', 'hrl_munkatars', $this->hrl_munkatars])
            ->andFilterWhere(['like', 'megjegyzes', $this->megjegyzes]);

        return $dataProvider;
    }
}
