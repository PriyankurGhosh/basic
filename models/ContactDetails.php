<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_details".
 *
 * @property int $contact_details_id
 * @property string $name
 * @property string $email
 * @property string $subject
 */
class ContactDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject'], 'required'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_details_id' => 'Contact Details ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
        ];
    }
}
