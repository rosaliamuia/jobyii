<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Savedjobs;

/**
 * SavedjobsSearch represents the model behind the search form of `frontend\models\Savedjobs`.
 */
class SavedjobsSearch extends Savedjobs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['savedjobId', 'jobpostId', 'companyId', 'status', 'date'], 'integer'],
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
        $query = Savedjobs::find();

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
            'savedjobId' => $this->savedjobId,
            'jobpostId' => $this->jobpostId,
            'companyId' => $this->companyId,
            'status' => $this->status,
            'date' => $this->date,
        ]);

        return $dataProvider;
    }
}
