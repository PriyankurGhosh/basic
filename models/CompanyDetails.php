<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_details".
 *
 * @property int $company_id
 * @property string $company_name
 * @property string $phone_no
 * @property string $cmp_email
 *
 * @property EmployeeDetails[] $employeeDetails
 */
class CompanyDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'phone_no', 'cmp_email'], 'required'],
            [['company_name', 'phone_no', 'cmp_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'phone_no' => 'Phone No',
            'cmp_email' => 'Cmp Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeDetails()
    {
        return $this->hasMany(EmployeeDetails::className(), ['company_id' => 'company_id']);
    }
}
