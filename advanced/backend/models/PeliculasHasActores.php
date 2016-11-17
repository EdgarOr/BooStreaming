<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peliculas_has_actores".
 *
 * @property integer $peliculas_pelicula_id
 * @property integer $actores_actor_id
 *
 * @property Actores $actoresActor
 * @property Peliculas $peliculasPelicula
 */
class PeliculasHasActores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas_has_actores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peliculas_pelicula_id', 'actores_actor_id'], 'required'],
            [['peliculas_pelicula_id', 'actores_actor_id'], 'integer'],
            [['actores_actor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Actores::className(), 'targetAttribute' => ['actores_actor_id' => 'actor_id']],
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
            'actores_actor_id' => 'Actores Actor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActoresActor()
    {
        return $this->hasOne(Actores::className(), ['actor_id' => 'actores_actor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPelicula()
    {
        return $this->hasOne(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id']);
    }
}
