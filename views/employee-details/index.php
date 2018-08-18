<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\EmployeeDetails;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employee_id',
            'employee_name',
            //'company_id',
			[
				'attribute'=>'company_id',
				'value'=>'company.company_name',
			],
			
            'employee_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
		
    ]); 
	
		//$val= EmployeeDetails::getCompany(1);
		//var_dump($val);
	?>
	

</div>
