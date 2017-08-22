<?php

namespace app\models;

use Yii;

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
 * @property CommentOrderInfo[] $commentOrderInfos
 * @property OrderInfo[] $orderInfos
 * @property CommentUser[] $commentUsers
 * @property User[] $users
 */
class Comment extends \yii\db\ActiveRecord
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
    public function getCommentOrderInfos()
    {
        return $this->hasMany(CommentOrderInfo::className(), ['comment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderInfos()
    {
        return $this->hasMany(OrderInfo::className(), ['id' => 'order_info_id'])->viaTable('comment_order_info', ['comment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentUsers()
    {
        return $this->hasMany(CommentUser::className(), ['comment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('comment_user', ['comment_id' => 'id']);
    }
}
