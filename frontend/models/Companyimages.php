<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "companyimages".
 *
 * @property int $ciId
 * @property int $companyId
 * @property string $imagePath
 *
 * @property Companyprofile $company
 */
class Companyimages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companyimages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companyId', 'imagePath'], 'required'],
            [['companyId'], 'integer'],
            [['imagePath'], 'string', 'max' => 255],
            [['companyId'], 'exist', 'skipOnError' => true, 'targetClass' => Companyprofile::className(), 'targetAttribute' => ['companyId' => 'companyId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ciId' => 'Ci ID',
            'companyId' => 'Company ID',
            'imagePath' => 'Image Path',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Companyprofile::className(), ['companyId' => 'companyId']);
    }
}
