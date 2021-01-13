<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jbprofile;

/**
 * JbprofileSearch represents the model behind the search form of `frontend\models\Jbprofile`.
 */
class JbprofileSearch extends Jbprofile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profileId', 'userId'], 'integer'],
            [['fullName', 'email', 'phoneNumber', 'dateofBirth', 'gender', 'image'], 'safe'],
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
        $query = Jbprofile::find();

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
            'profileId' => $this->profileId,
            'userId' => $this->userId,
            'dateofBirth' => $this->dateofBirth,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phoneNumber', $this->phoneNumber])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
