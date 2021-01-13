<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jobpost".
 *
 * @property int $jobPostId
 * @property int $jobcatId
 * @property string $jobTitle
 * @property string $emailAddress
 * @property string $jobTag
 * @property int $skillsId
 * @property int $years
 * @property float $minSalary
 * @property float $maxSalary
 * @property string $region
 * @property string $startDate
 * @property string $endDate
 * @property int $locationId
 * @property string $jobDesc
 * @property string $image
 *
 * @property Categories $jobcat
 * @property Location $location
 * @property Skills $skills
 * @property Savedjobs[] $savedjobs
 */
class Jobpost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobpost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jobcatId', 'jobTitle', 'emailAddress', 'jobTag', 'skillsId', 'years', 'minSalary', 'maxSalary', 'region', 'startDate', 'endDate', 'locationId', 'jobDesc', 'image'], 'required'],
            [['jobcatId', 'skillsId', 'years', 'locationId', 'status'], 'integer'],
            [['minSalary', 'maxSalary'], 'number'],
            [['startDate', 'endDate'], 'safe'],
            [['jobDesc'], 'string'],
            [['jobTitle', 'emailAddress', 'jobTag', 'region'], 'string', 'max' => 255],
            [['jobcatId'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['jobcatId' => 'jobcatId']],
            [['locationId'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['locationId' => 'locationId']],
            [['skillsId'], 'exist', 'skipOnError' => true, 'targetClass' => Skills::className(), 'targetAttribute' => ['skillsId' => 'skillId']],
            [['companyId'], 'exist', 'skipOnError' => true , 'targetClass' => Companyprofile::className(), 'targetAttribute' => ['companyId' => 'companyId']],
            [['image'], 'file', 'extensions'=>'jpg,png,gif','skipOnEmpty'=>false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jobPostId' => 'Job Post ID',
            'jobcatId' => 'Jobcat ID',
            'jobTitle' => 'Job Title',
            'emailAddress' => 'Email Address',
            'jobTag' => 'Job Tag',
            'skillsId' => 'Skills ID',
            'years' => 'Years',
            'status' => 'Status',
            'minSalary' => 'Min Salary',
            'maxSalary' => 'Max Salary',
            'region' => 'Region',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'locationId' => 'Location ID',
            'jobDesc' => 'Job Desc',
            'image' => 'Image',
        ];
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
     * Gets query for [[Skills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkills()
    {
        return $this->hasOne(Skills::className(), ['skillId' => 'skillsId']);
    }

    /**
     * Gets query for [[Savedjobs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSavedjobs()
    {
        return $this->hasMany(Savedjobs::className(), ['jobpostId' => 'jobPostId']);
    }
}
