<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_info".
 *
 * @property integer $id
 * @property string $create_time
 * @property integer $client_id
 * @property integer $product_id
 * @property integer $current_level
 * @property integer $course_id
 * @property integer $tutor_type_id
 * @property integer $tutor_experience
 * @property integer $connect_method
 * @property integer $connect_time
 * @property integer $frequence
 * @property string $free_days
 * @property string $free_times
 * @property integer $goal
 * @property integer $demo_total
 * @property integer $demo_like
 * @property integer $demo_dislike
 * @property integer $demo_absent
 * @property integer $demo_reject
 * @property string $order_status
 * @property string $order_comment
 *
 * @property CommentOrderInfo[] $commentOrderInfos
 * @property Comment[] $comments
 * @property User $client
 * @property Course $course
 * @property Product $product
 * @property TutorType $tutorType
 */
class OrderInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['client_id', 'product_id', 'course_id', 'tutor_type_id'], 'required'],
            [['client_id', 'product_id', 'current_level', 'course_id', 'tutor_type_id', 'tutor_experience', 'connect_method', 'connect_time', 'frequence', 'goal', 'demo_total', 'demo_like', 'demo_dislike', 'demo_absent', 'demo_reject'], 'integer'],
            [['free_days', 'free_times'], 'string'],
            [['order_status'], 'string', 'max' => 14],
            [['order_comment'], 'string', 'max' => 255],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['tutor_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TutorType::className(), 'targetAttribute' => ['tutor_type_id' => 'id']],
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
            'client_id' => 'Client ID',
            'product_id' => 'Product ID',
            'current_level' => 'Current Level',
            'course_id' => 'Course ID',
            'tutor_type_id' => 'Tutor Type ID',
            'tutor_experience' => 'Tutor Experience',
            'connect_method' => 'Connect Method',
            'connect_time' => 'Connect Time',
            'frequence' => 'Frequence',
            'free_days' => 'Free Days',
            'free_times' => 'Free Times',
            'goal' => 'Goal',
            'demo_total' => 'Demo Total',
            'demo_like' => 'Demo Like',
            'demo_dislike' => 'Demo Dislike',
            'demo_absent' => 'Demo Absent',
            'demo_reject' => 'Demo Reject',
            'order_status' => 'Order Status',
            'order_comment' => 'Order Comment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentOrderInfos()
    {
        return $this->hasMany(CommentOrderInfo::className(), ['order_info_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id' => 'comment_id'])->viaTable('comment_order_info', ['order_info_id' => 'id']);
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
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTutorType()
    {
        return $this->hasOne(TutorType::className(), ['id' => 'tutor_type_id']);
    }
}
