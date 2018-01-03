<?php

namespace app\modules\comment\models;

use app\modules\profile\models\Profile;
use app\models\User;
use app\modules\orders\models\OrderInfo;
use Yii;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $text
 * @property string $created_at
 * @property integer $isRemoved
 *
 * @property User $author
 * @property CommentOrderInfo[] $commentOrderInfos
 * @property OrderInfo[] $orderInfos
 * @property CommentProfile[] $commentProfiles
 * @property Profile[] $profiles
 */
class Comment extends ActiveRecord
{
    const STATUS_ALLOW = 'allw';
    const STATUS_DISALLOW = 'dsal';
    const REMOVE = 0;



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
            [['author_id', 'isRemoved'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['created_at'], 'safe'],
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
            'author_id' => 'Author ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'isRemoved' => 'Is Removed',
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


    public function getCommentProfileCount()
    {
        return $this->getCommentProfile()->count();
    }

    public function getProfile()
    {
        return $this->hasMany(Profile::className(), ['profile_id' => 'id'])->via('ProfileComment');
    }



    public function isRemoved()
    {
        return $this->isRemoved;
    }

    public function remove()
    {
        $this->isRemoved = self::REMOVE;
        return $this->save(false);
    }
}
