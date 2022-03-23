<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Admission;

/**
 * AdmissionSearch represents the model behind the search form of `frontend\models\Admission`.
 */
class AdmissionSearch extends Admission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adminId'], 'integer'],
            [['first_name', 'last_name', 'email', 'class_dates', 'gender', 'phone_number', 'place', 'advert_place', 'kin_name', 'kin_phone', 'kin_relationship', 'kin_email', 'internet_access', 'internet_limit'], 'safe'],
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
        $query = Admission::find();

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
            'adminId' => $this->adminId,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'class_dates', $this->class_dates])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'advert_place', $this->advert_place])
            ->andFilterWhere(['like', 'kin_name', $this->kin_name])
            ->andFilterWhere(['like', 'kin_phone', $this->kin_phone])
            ->andFilterWhere(['like', 'kin_relationship', $this->kin_relationship])
            ->andFilterWhere(['like', 'kin_email', $this->kin_email])
            ->andFilterWhere(['like', 'internet_access', $this->internet_access])
            ->andFilterWhere(['like', 'internet_limit', $this->internet_limit]);

        return $dataProvider;
    }
}
