<?php

namespace app\models;

use app\modules\order_info\models\OrderInfo;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $create_time
 * @property integer $creator_id
 * @property integer $client_id
 * @property string $text
 * @property integer $is_removed
 *
 * @property User $client
 * @property OrderInfo[] $orderInfos
 * @property User[] $users
 */
class Comment extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['creator_id', 'client_id', 'is_removed'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_time' => 'Create Time',
            'creator_id' => 'Creator ID',
            'client_id' => 'Client ID',
            'text' => 'Text',
            'is_removed' => 'Is Removed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(User::className(), ['id' => 'client_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderInfos()
    {
        return $this->hasMany(OrderInfo::className(), ['id' => 'order_info_id'])->viaTable('comment_order_info', ['comment_id' => 'id']);
    }

//    public function getDate()
//    {
//        return Yii::$app->formatter->asDatetime('now',$this->create_time);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('comment_user', ['comment_id' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'client_id']);
    }

    public function getCommentProfile()
    {
        return $this->hasMany(Profile::className(), ['id' => 'profile_id'])
            ->viaTable('comment_profile', ['comment_id' => 'id']);
    }

//    public function getCommentCount()
//    {
//        return $this->getProfile()->count();
//    }

    public function getProfile()
    {
        return $this->hasMany(Profile::className(), ['profile_id' => 'id']);
    }
}
