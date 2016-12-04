<?php

use wadeshuler\jwplayer\JWPlayer;
use frontend\models\PeliculasSearch;

use frontend\models\Peliculas;
/* @var $this yii\web\View */

/*$this->title = $s;
$g = $g;
$s = $s;*/
$pelicula = Peliculas::find()->where(['pelicula_id' => $m])->one();

$file = $pelicula->pelicula_url;
$imagen = $pelicula->pelicula_portada;
$titulo = $pelicula->pelicula_titulo;
$sinopsis = $pelicula->pelicula_sinopsis;
$categoria = $pelicula->pelicula_categoria;
$anio = $pelicula->pelicula_anio;

$sugeridas = Peliculas::findAll(['pelicula_categoria' => $categoria]);
$this->title = $titulo;
?>

<div class='site-index'>

    <div class='panel'>
        <?php
                //if($s != ''){
        echo "<h2>".$titulo." (".$anio.")</h2>";

                    //print_r($image);
                    //print_r("<br>".$file);

        echo "<p class='lead'>".
        JWPlayer::widget([
            'playerOptions' => [
            'file' => $file,
            'autostart' => true,
            'title' => $titulo,
            'preload' => 'auto',
            'image' => $imagen,
            /*'skin.name' => 'three'*/
            ]
            ]).
        "</p>";
                //}
        ?>
    </div><!--./panel-->

    <div class="panel panel-primary">
        <div class="panel-heading">Sinopsis</div>
        <div class="panel-body">
            <?=
            $sinopsis;
            ?>
        </div>
    </div><!--./panel-->

    <div class="panel panel-primary">
        <div class="panel-heading">Reparto</div>
        <div class="panel-body">
            Actores
        </div>
    </div><!--./panel-->



    <div class="panel panel-info">
      <div class="panel-heading">
            También te podría gustar: 
        </div>
        <div class="container-fluid">

        <div class="row">
            
            <?php 
                $i = 1;
                foreach ($sugeridas as $sugerida) {

                    if($sugerida->pelicula_id != $pelicula->pelicula_id){
            ?>

                        <!--pelicula-->
                        <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary'>
                            <div class="panel-heading">
                                <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $sugerida->pelicula_id .
                                "'>" .
                                $sugerida->pelicula_titulo .
                                "</a>"
                                ?>
                            </div>
                            <div class="panel-body panel-body-peli">
                                <?= "<a href='index.php?r=site/video&m=" . 
                                            //str_replace(" ", "", $sugerida->pelicula_titulo) .
                                $sugerida->pelicula_id .
                                "'>" .
                                "<img src='" . $sugerida->pelicula_portada . "' alt=''>" .
                                "</a>"
                                ?>
                            </div>
                            <div class="panel-footer">
                                <?= $sugerida->pelicula_anio?>
                            </div>
                        </div>
                        <!--./pelicula-->

            <?php
                    }

                    if( $i == 6){
                        break;
                    }else{
                        $i++;
                    }
                }
            ?>
            

        </div>
        </div>
    </div>

</div><!--./site.index-->