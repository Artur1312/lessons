<?php

namespace app\modules\comment\models;

use app\modules\order_info\models\OrderInfo;
use Yii;

/**
 * This is the model class for table "comment_order_info".
 *
 * @property integer $comment_id
 * @property integer $order_info_id
 *
 * @property Comment $comment
 * @property OrderInfo $orderInfo
 */
class CommentOrderInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_order_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'order_info_id'], 'required'],
            [['comment_id', 'order_info_id'], 'integer'],
            [['comment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['comment_id' => 'id']],
            [['order_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderInfo::className(), 'targetAttribute' => ['order_info_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'order_info_id' => 'Order Info ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComment()
    {
        return $this->hasOne(Comment::className(), ['id' => 'comment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderInfo()
    {
        return $this->hasOne(OrderInfo::className(), ['id' => 'order_info_id']);
    }
}
