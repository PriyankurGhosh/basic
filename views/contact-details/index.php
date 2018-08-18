<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'contact_details_id',
            'name',
            'email:email',
            'subject',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
