<?php

use wadeshuler\jwplayer\JWPlayer;
/* @var $this yii\web\View */

$this->title = 'BooStreaming';
$s = $s;
?>
<?php
    if(Yii::$app->user->isGuest){

    
        echo "<h2> Inicia sesión :'v</h2";


    }else{

        echo 
        "<div class='site-index'>

            <div class='panel'>";

                    if($s != ''){
                        echo "<h2>".$s."</h2>";

                        echo "<p class='lead'>".
                            /*<?=*/ JWPlayer::widget([
                                'playerOptions' => [
                                    'file' => 'uploads/'.$s.'.mp4',
                                    'autostart' => true,
                                    'title' => $s,
                                    'preload' => 'auto',
                                    'image' => 'uploads/'.$s.'.png',
                                    /*'skin.name' => 'three'*/
                                ]
                            ]) /*?>*/
                        ."<p>"

                        ."<p class='lead'>Description not avaiable.</p>";
                    }

                //<!--<p><a class='btn btn-lg btn-success' href='http://www.yiiframework.com'>Get started with Yii</a></p>-->
            echo "</div>

            <div class='body-content'>

                <div class='row jumbotron'>
                    <div class='col-lg-12'>          
                        <h4>You may also like</h4>
                    </div>

                    <div class='col-sm-3 panel panel-primary'>
                        <p><b>Video's title</b></p>
            
                        <p>
                            <a href='index.php?r=site/video&s=ygotas'>                    
                                <img src='uploads/ygotas.png' alt='Videos title'>
                            </a>

                            Video's description
                        </p>

                        <!--<p><a class='btn btn-default' href='http://www.yiiframework.com/doc/'>Yii Documentation &raquo;</a></p>-->
                    </div>
                    <div class='col-sm-3 panel panel-primary'>
                        <p><b>Video's title</b></p>
            
                        <p>
                            <img src='uploads/video_thumbnail.jpg' alt='Videos title'>
                            Video's description.
                        </p>

                        <!--<p><a class='btn btn-default' href='http://www.yiiframework.com/doc/'>Yii Documentation &raquo;</a></p>-->
                    </div>
                    <div class='col-sm-3 panel panel-primary'>
                        <p><b>Video's title</b></p>
            
                        <p>
                            <img src='uploads/video_thumbnail.jpg' alt='Videos title'>
                            Video's description.
                        </p>

                        <!--<p><a class='btn btn-default' href='http://www.yiiframework.com/doc/'>Yii Documentation &raquo;</a></p>-->
                    </div>
                    <div class='col-sm-3 panel panel-primary'>
                        <p><b>Video's title</b></p>
            
                        <p>
                            <a href='index.php?r=site/video&s=arslan'>                    
                                <img src='uploads/arslan.png' alt='Videos title'>
                            </a>

                            Video's description.
                        </p>

                        <!--<p><a class='btn btn-default' href='http://www.yiiframework.com/doc/'>Yii Documentation &raquo;</a></p>-->
                    </div>
                </div>

            </div>
        </div>";

    }
?>