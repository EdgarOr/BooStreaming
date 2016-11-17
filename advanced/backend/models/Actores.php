<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "actores".
 *
 * @property integer $actor_id
 * @property string $actor_nombre
 *
 * @property PeliculasHasActores[] $peliculasHasActores
 * @property Peliculas[] $peliculasPeliculas
 */
class Actores extends \yii\db\ActiveRecord
{

    public $actores=[];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actor_nombre'], 'string', 'max' => 100],
            [['actores'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => 'Actor ID',
            'actor_nombre' => 'Nombre del actor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasActores()
    {
        return $this->hasMany(PeliculasHasActores::className(), ['actores_actor_id' => 'actor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPeliculas()
    {
        return $this->hasMany(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id'])->viaTable('peliculas_has_actores', ['actores_actor_id' => 'actor_id']);
    }
}
