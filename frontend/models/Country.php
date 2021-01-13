<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $countryId
 * @property string $countryName
 *
 * @property Companyprofile[] $companyprofiles
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countryName'], 'required'],
            [['countryName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'countryId' => 'Country ID',
            'countryName' => 'Country Name',
        ];
    }

    /**
     * Gets query for [[Companyprofiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyprofiles()
    {
        return $this->hasMany(Companyprofile::className(), ['countryId' => 'countryId']);
    }
}
