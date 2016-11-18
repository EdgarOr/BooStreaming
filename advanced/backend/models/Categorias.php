<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property integer $categoria_id
 * @property string $categoria_nombre
 *
 * @property PeliculasHasCategorias[] $peliculasHasCategorias
 * @property Peliculas[] $peliculasPeliculas
 */
class Categorias extends \yii\db\ActiveRecord
{

    public $categorias = [];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoria_nombre'], 'required'],
            [['categoria_nombre'], 'string', 'max' => 20],
            [['categorias'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoria_id' => 'Categoria ID',
            'categoria_nombre' => 'Categoria Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasHasCategorias()
    {
        return $this->hasMany(PeliculasHasCategorias::className(), ['categorias_categoria_id' => 'categoria_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasPeliculas()
    {
        return $this->hasMany(Peliculas::className(), ['pelicula_id' => 'peliculas_pelicula_id'])->viaTable('peliculas_has_categorias', ['categorias_categoria_id' => 'categoria_id']);
    }
}
