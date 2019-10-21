<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property string $img
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property int $id_country
 * @property int $id_state
 * @property int $id_role
 * @property string $created_at
 * @property string $updated_at
 * @property string $last_access
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'first_name', 'last_name', 'email', 'password', 'id_country', 'id_state', 'id_role', 'created_at', 'updated_at', 'last_access'], 'required'],
            [['id_country', 'id_state', 'id_role'], 'integer'],
            [['img', 'first_name', 'last_name', 'created_at', 'updated_at', 'last_access'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 70],
            [['password'], 'string', 'max' => 100],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'img' => 'Img',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'id_country' => 'Id Country',
            'id_state' => 'Id State',
            'id_role' => 'Id Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'last_access' => 'Last Access',
        ];
    }
}
