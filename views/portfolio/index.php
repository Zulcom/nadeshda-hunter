<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cписок резюме';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создайте резюме', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           ['attribute' => 'author', 'value' => 'author.username','label' => 'Автор', 'format' => 'text'],
           ['attribute' => 'title','label' => 'Заголовок', 'format' => 'text'],
            ['attribute' => 'description','label' => 'Описание', 'format' => 'text'],
            ['attribute' => 'cost','label' => 'Заработная плата', 'format' => 'text'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
