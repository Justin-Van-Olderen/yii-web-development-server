<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\countrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:70px; white-space: normal;'],
            ],

            [ 'label' => 'Code',
            'attribute' => 'Code',
            'contentOptions' => ['style' => 'width:70px; white-space: normal;'],
            ],

            'Name',

            // 'Continent',
            // 'Region',
            //'IndepYear',

            [ 'label' => 'Capital',
            'attribute' => 'Capital',
            'contentOptions' => ['style' => 'width:120px; white-space: normal;'],
            'format' => 'raw',
            'value' => function($data) {return Html::a('See Capital',['/city/index','citySearch[ID]'=>$data->Capital]);}
            ],

            [ 'label' => 'Population',
            'attribute' => 'Population',
            'contentOptions' => ['style' => 'width:30px; white-space: normal;'],
            ],

            [ 'label' => 'SurfaceArea',
            'attribute' => 'SurfaceArea',
            'contentOptions' => ['style' => 'width:100px; white-space: normal;'],
            'format' => 'raw',
            'value' => function($data) {return sprintf("%8d k&#13217", $data->SurfaceArea);}
            ],
            //'LifeExpectancy',
            //'GNP',
            //'GNPOld',
            //'LocalName',
            //'GovernmentForm',
            //'HeadOfState',
            
            //'Code2',

            
        ],
    ]); ?>


</div>
