<?php
/**
 * Created by PhpStorm.
 * User: mint2
 * Date: 27.07.17
 * Time: 16:56
 */

namespace app\models;


use Yii;
use yii\base\Exception;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repeat_password;

    public function rules()
    {
        return [
            [['username','email','password','repeat_password'],'required'],
            [['username'], 'string', 'min'=> 4, 'max'=> 255],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email', 'message'=>"This email has been already token."],
            [['email'], 'email'],
            [['email'], 'trim'],
            ['email', 'string', 'max' => 255],
            ['repeat_password', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match."],

        ];
    }
//    public function signup()
//    {
//        if($this->validate())
//        {
//            $user = new User();
//
//            $user->username = $this->username;
//            $user->email = $this->email;
//            $user->setPassword($this->password);
//
//
//            return $user->create();
//        }
//        return null;
//
//    }
    public function signup()
    {
        if($this->validate())
        {
            $user = new User();

            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->save();

            $profile = new Profile();

            $profile->user_id = $user->id;

            $user->link('profile', $profile);

            $db = \Yii::$app->db;
            $transaction = $db->beginTransaction();
            if ($user->create() && $profile->save()) {

                $transaction->commit();
            } else {
                $transaction->rollback();
            }
            return $user->create() ? $user : null;

        }
        return null;

    }

    public function transaction()
    {

    }




//    public function signup()
//    {
//        $user = new User();
//        $profile = new Profile();
//        $valid = $user->validate();
//        $valid = $profile->validate() && $valid;
//
//        if ($valid) {
//        $transaction = User::getDb()->beginTransaction();
//
//        try {
//                $user->save(false);
//                $profile->user_id = $user->primaryKey;
//                $profile->save(false);
//                $transaction->commit();
//        } catch(Exception $e) {
//
//            $transaction->rollback();
//            }
//        }
//    }
//    public function signup()
//{
//    $connection = User::getDb();
//        $transaction = $connection->beginTransaction();
//            try {
//        $user = $connection->createCommand()->insert('user', [
//        'username' => 'arjunphp',
//        'email' => 'arjunph@gmail.com',
//        ])->execute();
//        $connection->createCommand()->insert('profile', ['city' => "trap",
//        'user_id' => $user->id
//        ])->execute();
//        $transaction->commit();
//        } catch(Exception $e) {
//            $transaction->rollback();
//         }
//    }

}