<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "companyprofile".
 *
 * @property int $companyId
 * @property int $userId
 * @property string $companyName
 * @property string $emailAddress
 * @property string $description
 * @property string $website
 * @property string $foundedDate
 * @property string $logoDetails
 * @property int $jobcatId
 * @property int $countryId
 * @property int $city
 * @property int $phonenumber
 * @property string $region
 * @property string $address
 * @property int $locationId
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedIn
 * @property string $google
 *
 * @property Companyimages[] $companyimages
 * @property User $user
 * @property Country $country
 * @property Categories $jobcat
 * @property Location $location
 * @property Savedjobs[] $savedjobs
 */
class Companyprofile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companyprofile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'companyName', 'emailAddress', 'description', 'website', 'foundedDate', 'logoDetails', 'jobcatId', 'countryId', 'city', 'phonenumber', 'region', 'address', 'locationId', 'facebook', 'twitter', 'linkedIn', 'google'], 'required'],
            [['userId', 'jobcatId', 'countryId', 'city', 'phonenumber', 'locationId'], 'integer'],
            [['description'], 'string'],
            [['foundedDate'], 'safe'],
            [['companyName', 'emailAddress', 'website', 'logoDetails', 'region', 'address', 'facebook', 'twitter', 'linkedIn', 'google'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countryId' => 'countryId']],
            [['jobcatId'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['jobcatId' => 'jobcatId']],
            [['locationId'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['locationId' => 'locationId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'companyId' => 'Company ID',
            'userId' => 'User ID',
            'companyName' => 'Company Name',
            'emailAddress' => 'Email Address',
            'description' => 'Description',
            'website' => 'Website',
            'foundedDate' => 'Founded Date',
            'logoDetails' => 'Logo Details',
            'jobcatId' => 'Jobcat ID',
            'countryId' => 'Country ID',
            'city' => 'City',
            'phonenumber' => 'Phonenumber',
            'region' => 'Region',
            'address' => 'Address',
            'locationId' => 'Location ID',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedIn' => 'Linked In',
            'google' => 'Google',
        ];
    }

    /**
     * Gets query for [[Companyimages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyimages()
    {
        return $this->hasMany(Companyimages::className(), ['companyId' => 'companyId']);
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

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'countryId']);
    }

    /**
     * Gets query for [[Jobcat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobcat()
    {
        return $this->hasOne(Categories::className(), ['jobcatId' => 'jobcatId']);
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['locationId' => 'locationId']);
    }

    /**
     * Gets query for [[Savedjobs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSavedjobs()
    {
        return $this->hasMany(Savedjobs::className(), ['companyId' => 'companyId']);
    }
}
