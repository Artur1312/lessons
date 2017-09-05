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
    public $profile_id;
    public function rules()
    {


        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => ['3,250']],
        ];

    }

    public function saveProfileComment ($profile_id)
    {

        $profile = new Profile();

        $comment = new Comment();
        $comment->created_at = date('Y-m-d H:i');
        $comment->text = $this->comment;
        $comment->author_id = Yii::$app->user->id;
        $comment->save();

        $comment_profile = new CommentProfile();
        $comment_profile->comment_id = $comment->id;
        $comment_profile->profile_id = $profile_id;
        $comment_profile->save();
//        $comment->link('profile', $comment_profile);
        $db = \Yii::$app->db;
        $transaction = $db->beginTransaction();
        if ($comment->save(false) && $comment_profile->save(false)) {

            $transaction->commit();
        } else {
            $transaction->rollback();
        }
        return null;
//        $comment->date = date('Y-m-d H:i');

    }

//    public function saveProfileComment ()
//    {
//
//
//        $comment = new Comment();
//        $comment->created_at = date('Y-m-d H:i');
//        $comment->text = $this->comment;
//        $comment->author_id = Yii::$app->user->id;
//        $comment->save();
//
//        $comment_profile = new CommentProfile();
//        $comment_profile->comment_id = $comment->id;
//        $profile = new Profile();
//        $profile_id = $profile->id;
//        $profile->save();
//        $comment_profile->profile_id = $profile_id;
//        $comment_profile->save();
////        $comment->link('profile', $comment_profile);
//        $db = \Yii::$app->db;
//        $transaction = $db->beginTransaction();
//        if ($comment->save(false) && $comment_profile->save(false)) {
//
//            $transaction->commit();
//        } else {
//            $transaction->rollback();
//        }
//        return null;
////        $comment->date = date('Y-m-d H:i');
//
//    }


}