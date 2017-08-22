<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $skype
 * @property integer $phone
 * @property string $country
 * @property string $city
 * @property integer $ip_address
 * @property integer $age
 * @property string $gender
 * @property string $dob
 * @property string $activity
 * @property string $interests
 * @property integer $wallet_id
 *
 * @property User $user
 * @property Wallet $wallet
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'skype', 'phone', 'country', 'city', 'age', 'gender', 'dob'], 'required'],
            [['user_id', 'phone', 'ip_address', 'age', 'wallet_id'], 'integer'],
            [['dob'], 'safe'],
            [['skype', 'activity', 'interests'], 'string', 'max' => 255],
            [['country'], 'string', 'max' => 38],
            [['city'], 'string', 'max' => 178],
            [['gender'], 'string', 'max' => 7],
            [['skype'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['wallet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wallet::className(), 'targetAttribute' => ['wallet_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'skype' => 'Skype',
            'phone' => 'Phone',
            'country' => 'Country',
            'city' => 'City',
            'ip_address' => 'Ip Address',
            'age' => 'Age',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'activity' => 'Activity',
            'interests' => 'Interests',
            'wallet_id' => 'Wallet ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWallet()
    {
        return $this->hasOne(Wallet::className(), ['id' => 'wallet_id']);
    }
}
