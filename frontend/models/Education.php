<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $educId
 * @property string $uniName
 * @property string $degree
 * @property string $field
 * @property string $grade
 * @property string $startDate
 * @property string $endDate
 * @property string $activities
 * @property string $description
 *
 * @property Educationdet[] $educationdets
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uniName', 'degree', 'field', 'grade', 'startDate', 'endDate', 'activities', 'description'], 'required'],
            [['startDate', 'endDate'], 'safe'],
            [['activities', 'description'], 'string'],
            [['uniName', 'degree', 'field', 'grade'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'educId' => 'Educ ID',
            'uniName' => 'Uni Name',
            'degree' => 'Degree',
            'field' => 'Field',
            'grade' => 'Grade',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'activities' => 'Activities',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Educationdets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducationdets()
    {
        return $this->hasMany(Educationdet::className(), ['educationId' => 'educId']);
    }
}
