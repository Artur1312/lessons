<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property string $create_time
 * @property integer $creator_id
 * @property integer $client_id
 * @property string $text
 * @property string $status
 * @property integer $is_removed
 *
 * @property User $client
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['creator_id', 'client_id', 'is_removed'], 'integer'],
            [['text', 'status'], 'required'],
            [['text'], 'string'],
            [['status'], 'string', 'max' => 9],
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
            'status' => 'Status',
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
}
