<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%photo}}".
 *
 * @property integer $id_photo
 * @property integer $id_message
 * @property string $photo_name
 */
class Photo extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%photo}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_message'], 'integer'],
            [['photo_name'], 'required'],
            [['photo_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_photo' => 'Id Photo',
            'id_message' => 'Id Message',
            'photo_name' => 'Photo Name',
        ];
    }

    /**
     * This join with entity Board
     * @return \yii\db\ActiveQuery
     */
    public function getAdd() {
        return $this->hasOne(Board::className(), ['id' => 'id_message']);
    }

}
