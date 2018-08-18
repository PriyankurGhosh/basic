<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_details".
 *
 * @property int $employee_id
 * @property string $employee_name
 * @property int $company_id
 * @property string $employee_email
 *
 * @property CompanyDetails $company
 */
class EmployeeDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_name', 'company_id', 'employee_email'], 'required'],
            [['company_id'], 'integer'],
            [['employee_name', 'employee_email'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyDetails::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'employee_name' => 'Employee Name',
            //'company_id' => 'Company ID',
			'company_id' => 'Company Name',
            'employee_email' => 'Employee Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(CompanyDetails::className(), ['company_id' => 'company_id']);
    }
}
