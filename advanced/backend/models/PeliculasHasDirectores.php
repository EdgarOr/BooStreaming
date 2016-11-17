<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peliculas_has_directores".
 *
 * @property integer $peliculas_pelicula_id
 * @property integer $directores_director_id
 *
 * @property Directores $directoresDirector
 * @property Peliculas $peliculasPelicula
 */
class PeliculasHasDirectores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas_has_directores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peliculas_pelicula_id', 'directores_director_id'], 'required'],
            [['peliculas_pelicula_id', 'directores_director_id'], 'integer'],
            [['directores_director_id'], 'exist', 'skipOnError' => true, 'targetClass' => Directores::className(), 'targetAttribute' => ['directores_director_id' => 'director_id']],
            [['peliculas_pelicula_id'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['peliculas_pelicula_id' => 'pelicula_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'peliculas_pelicula_id' => 'Peliculas Pelicula ID',
            'directores_director_id' => 'Directores Director ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectoresDirector()
    {
        return $this->hasOne(Directores::className(), ['director_id' => 'directores_director_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPelicula()
    {
        return $this->hasOne(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id']);
    }
}
