<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Peliculas;

/**
 * PeliculasSearch represents the model behind the search form about `frontend\models\Peliculas`.
 */
class PeliculasSearch extends Peliculas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelicula_id', 'pelicula_duracion'], 'integer'],
            [['pelicula_titulo', 'pelicula_sinopsis', 'pelicula_clasificacion', 'pelicula_anio', 'pelicula_fechaAlta', 'pelicula_url', 'pelicula_portada'], 'safe'],
            [['pelicula_ranking'], 'number'],
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
        $query = Peliculas::find();

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
            'pelicula_id' => $this->pelicula_id,
            'pelicula_ranking' => $this->pelicula_ranking,
            'pelicula_duracion' => $this->pelicula_duracion,
            'pelicula_anio' => $this->pelicula_anio,
            'pelicula_fechaAlta' => $this->pelicula_fechaAlta,
        ]);

        $query->andFilterWhere(['like', 'pelicula_titulo', $this->pelicula_titulo])
            ->andFilterWhere(['like', 'pelicula_sinopsis', $this->pelicula_sinopsis])
            ->andFilterWhere(['like', 'pelicula_clasificacion', $this->pelicula_clasificacion])
            ->andFilterWhere(['like', 'pelicula_url', $this->pelicula_url])
            ->andFilterWhere(['like', 'pelicula_portada', $this->pelicula_portada]);

        return $dataProvider;
    }
}
