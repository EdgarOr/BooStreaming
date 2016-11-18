<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property integer $pelicula_id
 * @property string $pelicula_titulo
 * @property string $pelicula_sinopsis
 * @property double $pelicula_ranking
 * @property int $pelicula_duracion
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

    public $portadaUrl;
    public $peliculaUrl;
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
            [['pelicula_duracion'],'integer'],
            [[ 'pelicula_anio', 'pelicula_fechaAlta'], 'safe'],
            [['pelicula_titulo'], 'string', 'max' => 150],
            [['pelicula_clasificacion'], 'string', 'max' => 5],
            [['peliculaUrl'], 'file', 'extensions' => 'mp4, mkv, avi, wmv, mov, flv, mpeg'],
            [['portadaUrl'], 'image', 'minWidth' => '1024', 'minHeight' => '1024'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pelicula_id' => 'Película ID',
            'pelicula_titulo' => 'Título',
            'pelicula_sinopsis' => 'Sinopsis',
            'pelicula_ranking' => 'Película Ranking',
            'pelicula_duracion' => 'Duración',
            'pelicula_clasificacion' => 'Clasificación',
            'pelicula_anio' => 'Año de lanzamiento',
            'pelicula_fechaAlta' => 'Película Fecha Alta',
            'pelicula_url' => 'Película Url',
            'portadaUrl' => 'Portada',
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
