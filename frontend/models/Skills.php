<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $skillId
 * @property string $skillName
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skillId', 'skillName'], 'required'],
            [['skillId'], 'integer'],
            [['skillName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'skillId' => 'Skill ID',
            'skillName' => 'Skill Name',
        ];
    }
}
