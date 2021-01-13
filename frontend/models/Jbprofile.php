<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "jbprofile".
 *
 * @property int $profileId
 * @property int $userId
 * @property string $fullName
 * @property string $email
 * @property string $phoneNumber
 * @property string $dateofBirth
 * @property string $gender
 * @property string $image
 *
 * @property Educationdet[] $educationdets
 * @property Experiencedet[] $experiencedets
 * @property User $user
 */
class Jbprofile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jbprofile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'fullName', 'email', 'phoneNumber', 'dateofBirth', 'gender', 'image'], 'required'],
            [['userId'], 'integer'],
            [['dateofBirth'], 'safe'],
            [['gender'], 'string'],
            [['fullName', 'email', 'phoneNumber', 'image'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'profileId' => 'Profile ID',
            'userId' => 'User ID',
            'fullName' => 'Full Name',
            'email' => 'Email',
            'phoneNumber' => 'Phone Number',
            'dateofBirth' => 'Dateof Birth',
            'gender' => 'Gender',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Educationdets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducationdets()
    {
        return $this->hasMany(Educationdet::className(), ['profileId' => 'profileId']);
    }

    /**
     * Gets query for [[Experiencedets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencedets()
    {
        return $this->hasMany(Experiencedet::className(), ['profileId' => 'profileId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
