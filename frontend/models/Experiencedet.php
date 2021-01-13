<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "experiencedet".
 *
 * @property int $expdetId
 * @property int $expId
 * @property int $profileId
 *
 * @property Experience $exp
 * @property Jbprofile $profile
 */
class Experiencedet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experiencedet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['expId', 'profileId'], 'required'],
            [['expId', 'profileId'], 'integer'],
            [['expId'], 'exist', 'skipOnError' => true, 'targetClass' => Experience::className(), 'targetAttribute' => ['expId' => 'experId']],
            [['profileId'], 'exist', 'skipOnError' => true, 'targetClass' => Jbprofile::className(), 'targetAttribute' => ['profileId' => 'profileId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'expdetId' => 'Expdet ID',
            'expId' => 'Exp ID',
            'profileId' => 'Profile ID',
        ];
    }

    /**
     * Gets query for [[Exp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExp()
    {
        return $this->hasOne(Experience::className(), ['experId' => 'expId']);
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
