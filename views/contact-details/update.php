<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactDetails */

$this->title = 'Update Contact Details: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Contact Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->contact_details_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
