<?php

namespace common\models;

use Yii;
use common\models\Users;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $post
 * @property integer $userId
 *
 * @property Users $user
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post'], 'string'],
            [['userId'], 'integer'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['userId' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post' => 'Post',
            'userId' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['ID' => 'userId']);
    }
}
