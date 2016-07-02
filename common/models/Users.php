<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $ID
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $confirmpassword
 *
 * @property Posts[] $posts
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'confirmpassword'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['email', 'password', 'confirmpassword'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'confirmpassword' => 'Confirmpassword',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::className(), ['userId' => 'ID']);
    }
}
