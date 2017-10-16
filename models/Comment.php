<?php

namespace app\models;

use app\modules\orders\models\OrderInfo;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $create_time
 * @property integer $author_id
 * @property string $text
 * @property integer $is_removed
 *
 * @property User $author
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
            [['author_id', 'is_removed'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
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
            'author_id' => 'Author ID',
            'text' => 'Text',
            'is_removed' => 'Is Removed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
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
        return $this->hasOne(User::className(), ['id' => 'author_id']);
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
        return $this->hasMany(Profile::className(), ['profile_id' => 'id'])->via('ProfileComment');
    }
}
