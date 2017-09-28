<?php

namespace app\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'phone', 'ip_address', 'age', 'wallet_id'], 'integer'],
            [['skype', 'country', 'city', 'gender', 'dob', 'activity', 'interests'], 'safe'],
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
        $query = Profile::find();

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
            'user_id' => $this->user_id,
            'phone' => $this->phone,
            'ip_address' => $this->ip_address,
            'age' => $this->age,
            'dob' => $this->dob,
            'wallet_id' => $this->wallet_id,
        ]);

        $query->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'activity', $this->activity])
            ->andFilterWhere(['like', 'interests', $this->interests]);

        return $dataProvider;
    }
}
