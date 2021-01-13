<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $jobcatId
 * @property string $catName
 *
 * @property Companyprofile[] $companyprofiles
 * @property Jobpost[] $jobposts
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catName'], 'required'],
            [['catName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jobcatId' => 'Jobcat ID',
            'catName' => 'Cat Name',
        ];
    }

    /**
     * Gets query for [[Companyprofiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyprofiles()
    {
        return $this->hasMany(Companyprofile::className(), ['jobcatId' => 'jobcatId']);
    }

    /**
     * Gets query for [[Jobposts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobposts()
    {
        return $this->hasMany(Jobpost::className(), ['jobcatId' => 'jobcatId']);
    }
}
