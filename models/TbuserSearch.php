<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbuser;

/**
 * TbuserSearch represents the model behind the search form of `app\models\Tbuser`.
 */
class TbuserSearch extends Tbuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cliduser'], 'integer'],
            [['clname', 'clemail', 'cldate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tbuser::find();

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
            'cliduser' => $this->cliduser,
        ]);

        $query->andFilterWhere(['like', 'clname', $this->clname])
            ->andFilterWhere(['like', 'clemail', $this->clemail])
            ->andFilterWhere(['like', 'cldate', $this->cldate]);

        return $dataProvider;
    }
}
