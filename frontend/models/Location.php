<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $locationId
 * @property string $locationName
 *
 * @property Companyprofile[] $companyprofiles
 * @property Jobpost[] $jobposts
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['locationName'], 'required'],
            [['locationName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'locationName' => 'Location Name',
        ];
    }

    /**
     * Gets query for [[Companyprofiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyprofiles()
    {
        return $this->hasMany(Companyprofile::className(), ['locationId' => 'locationId']);
    }

    /**
     * Gets query for [[Jobposts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobposts()
    {
        return $this->hasMany(Jobpost::className(), ['locationId' => 'locationId']);
    }
}
