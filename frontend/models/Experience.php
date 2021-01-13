<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property int $experId
 * @property int $skillId
 * @property string $jobTitle
 * @property string $employmentType
 * @property string $company
 * @property string $location
 * @property string $startDate
 * @property string $endDate
 * @property string $description
 *
 * @property Experiencedet[] $experiencedets
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skillId', 'jobTitle', 'employmentType', 'company', 'location', 'startDate', 'endDate', 'description'], 'required'],
            [['skillId'], 'integer'],
            [['startDate', 'endDate'], 'safe'],
            [['jobTitle', 'employmentType', 'company', 'location', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'experId' => 'Exper ID',
            'skillId' => 'Skill ID',
            'jobTitle' => 'Job Title',
            'employmentType' => 'Employment Type',
            'company' => 'Company',
            'location' => 'Location',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Experiencedets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencedets()
    {
        return $this->hasMany(Experiencedet::className(), ['expId' => 'experId']);
    }
}
