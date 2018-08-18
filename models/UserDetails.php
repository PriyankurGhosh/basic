<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "user_details".
 *
 * @property int $uid
 * @property string $user_name
 * @property string $password
 * @property string $authKey
 */
class UserDetails extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'password', 'authKey'], 'required'],
            [['user_name', 'password', 'authKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'user_name' => 'User Name',
            'password' => 'Password',
            'authKey' => 'Auth Key',
        ];
    }
	
	public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        //return static::findOne(['access_token' => $token]);
		throw new \yii\base\NotSupportedException();
		
    }

    public function getId()
    {
        return $this->uid;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }
	
	public static function findByUsername($username)
	{
		return self::findOne(['user_name'=>$username]);
		return new static($username);
		
		
		
		
	}
	
	
	public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
