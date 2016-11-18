<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peliculas_has_categorias".
 *
 * @property integer $peliculas_pelicula_id
 * @property integer $categorias_categoria_id
 *
 * @property Categorias $categoriasCategoria
 * @property Peliculas $peliculasPelicula
 */
class PeliculasHasCategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas_has_categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peliculas_pelicula_id', 'categorias_categoria_id'], 'required'],
            [['peliculas_pelicula_id', 'categorias_categoria_id'], 'integer'],
            [['categorias_categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['categorias_categoria_id' => 'categoria_id']],
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
            'categorias_categoria_id' => 'Categorias Categoria ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriasCategoria()
    {
        return $this->hasOne(Categorias::className(), ['categoria_id' => 'categorias_categoria_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPelicula()
    {
        return $this->hasOne(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id']);
    }
}
