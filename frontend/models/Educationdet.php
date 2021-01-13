<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "educationdet".
 *
 * @property int $educdetId
 * @property int $educationId
 * @property int $profileId
 *
 * @property Education $education
 * @property Jbprofile $profile
 */
class Educationdet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'educationdet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['educationId', 'profileId'], 'required'],
            [['educationId', 'profileId'], 'integer'],
            [['educationId'], 'exist', 'skipOnError' => true, 'targetClass' => Education::className(), 'targetAttribute' => ['educationId' => 'educId']],
            [['profileId'], 'exist', 'skipOnError' => true, 'targetClass' => Jbprofile::className(), 'targetAttribute' => ['profileId' => 'profileId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'educdetId' => 'Educdet ID',
            'educationId' => 'Education ID',
            'profileId' => 'Profile ID',
        ];
    }

    /**
     * Gets query for [[Education]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['educId' => 'educationId']);
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Jbprofile::className(), ['profileId' => 'profileId']);
    }
}
