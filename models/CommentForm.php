<?php
/**
 * Created by PhpStorm.
 * User: User-9
 * Date: 27.08.2017
 * Time: 14:01
 */

namespace app\models;


use Yii;
use yii\base\Model;

class CommentForm extends Model
{

    public $comment;

    public function rules()
    {


        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => ['3,250']],
        ];

    }

    public function saveComment($profile_id)
    {
        $comment = new Comment();
        $comment->create_time = date('Y-m-d H:i');
        $comment->text = $this->comment;
        $comment->client_id = Yii::$app->user->id;
        $comment->profile_id = $profile_id;
        $comment->date = date('Y-m-d H:i');
        return $comment->save(false);
    }

}