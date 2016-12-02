<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property integer $pelicula_id
 * @property string $pelicula_titulo
 * @property string $pelicula_sinopsis
 * @property double $pelicula_ranking
 * @property integer $pelicula_duracion
 * @property string $pelicula_clasificacion
 * @property string $pelicula_anio
 * @property string $pelicula_fechaAlta
 * @property string $pelicula_url
 * @property string $pelicula_portada
 *
 * @property PeliculasHasActores[] $peliculasHasActores
 * @property Actores[] $actoresActors
 * @property PeliculasHasCategorias[] $peliculasHasCategorias
 * @property Categorias[] $categoriasCategorias
 * @property PeliculasHasDirectores[] $peliculasHasDirectores
 * @property Directores[] $directoresDirectors
 */
class Peliculas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelicula_titulo', 'pelicula_sinopsis', 'pelicula_duracion', 'pelicula_anio', 'pelicula_fechaAlta', 'pelicula_url', 'pelicula_portada'], 'required'],
            [['pelicula_sinopsis', 'pelicula_url', 'pelicula_portada'], 'string'],
            [['pelicula_ranking'], 'number'],
            [['pelicula_duracion'], 'integer'],
            [['pelicula_anio', 'pelicula_fechaAlta'], 'safe'],
            [['pelicula_titulo'], 'string', 'max' => 150],
            [['pelicula_clasificacion'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pelicula_id' => 'Pelicula ID',
            'pelicula_titulo' => 'Pelicula Titulo',
            'pelicula_sinopsis' => 'Pelicula Sinopsis',
            'pelicula_ranking' => 'Pelicula Ranking',
            'pelicula_duracion' => 'Pelicula Duracion',
            'pelicula_clasificacion' => 'Pelicula Clasificacion',
            'pelicula_anio' => 'Pelicula Anio',
            'pelicula_fechaAlta' => 'Pelicula Fecha Alta',
            'pelicula_url' => 'Pelicula Url',
            'pelicula_portada' => 'Pelicula Portada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasActores()
    {
        return $this->hasMany(PeliculasHasActores::className(), ['peliculas_pelicula_id' => 'pelicula_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActoresActors()
    {
        return $this->hasMany(Actores::className(), ['actor_id' => 'actores_actor_id'])->viaTable('peliculas_has_actores', ['peliculas_pelicula_id' => 'pelicula_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasCategorias()
    {
        return $this->hasMany(PeliculasHasCategorias::className(), ['peliculas_pelicula_id' => 'pelicula_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriasCategorias()
    {
        return $this->hasMany(Categorias::className(), ['categoria_id' => 'categorias_categoria_id'])->viaTable('peliculas_has_categorias', ['peliculas_pelicula_id' => 'pelicula_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasDirectores()
    {
        return $this->hasMany(PeliculasHasDirectores::className(), ['peliculas_pelicula_id' => 'pelicula_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectoresDirectors()
    {
        return $this->hasMany(Directores::className(), ['director_id' => 'directores_director_id'])->viaTable('peliculas_has_directores', ['peliculas_pelicula_id' => 'pelicula_id']);
    }
}
