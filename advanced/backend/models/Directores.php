<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "directores".
 *
 * @property integer $director_id
 * @property string $director_nombre
 *
 * @property PeliculasHasDirectores[] $peliculasHasDirectores
 * @property Peliculas[] $peliculasPeliculas
 */
class Directores extends \yii\db\ActiveRecord
{

    public $directores = [];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['director_nombre'], 'string', 'max' => 100],
            [['directores'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'director_id' => 'Director ID',
            'director_nombre' => 'Nombre del director',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasDirectores()
    {
        return $this->hasMany(PeliculasHasDirectores::className(), ['directores_director_id' => 'director_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPeliculas()
    {
        return $this->hasMany(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id'])->viaTable('peliculas_has_directores', ['directores_director_id' => 'director_id']);
    }
}
