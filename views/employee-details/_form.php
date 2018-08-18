<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\CompanyDetails;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_name')->textInput(['maxlength' => true]) ?>

    
	 <?= $form->field($model, 'company_id')->dropDownList(
	 
	 ArrayHelper::map(CompanyDetails::find()->all(),'company_id','company_name')
	 
	 ) ?>
    <?= $form->field($model, 'employee_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
