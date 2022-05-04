<?php

use app\models\Crud;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchs\CrudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cruds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crud-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Crud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <div class="card col-3">
            <div class="card-body">Solteros</div>
        </div>
        <div class="card col-3">
            <div class="card-body">Casados</div>
        </div>
        <div class="card col-3">
            <div class="card-body">Mayores de 35</div>
        </div>
        <div class="card col-3">
            <div class="card-body">Mujeres</div>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'apellido',
            'numero',
            'edad',
            'genero',
            'estado_civil',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Crud $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
