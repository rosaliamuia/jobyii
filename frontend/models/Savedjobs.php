<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "savedjobs".
 *
 * @property int $savedjobId
 * @property int $jobPostId
 * @property int $companyId
 * @property int $status Status 1 represents Sent, Status 0 represents Saved
 * @property int $date
 *
 * @property Jobpost $jobPost
 * @property Companyprofile $company
 */
class Savedjobs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'savedjobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jobPostId', 'date'], 'required'],
            [['jobPostId', 'status'], 'integer'],
            [['date'], 'safe'],
            [['jobPostId'], 'exist', 'skipOnError' => true, 'targetClass' => Jobpost::className(), 'targetAttribute' => ['jobPostId' => 'jobPostId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'savedjobId' => 'Savedjob ID',
            'jobPostId' => 'Job Post ID',
            // 'status' => 'Status',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[JobPost]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobPost()
    {
        return $this->hasOne(Jobpost::className(), ['jobPostId' => 'jobPostId']);
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */


    // public function getCompanyprofile()
    // {
    //     return $this->hasMany(Companyprofile::classname(), ['companyId' => 'companyId']);
    // }
}
