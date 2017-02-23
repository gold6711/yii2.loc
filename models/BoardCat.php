<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
/**
 * This is the model class for table "{{%board_cat}}".
 *
 * @property integer $id
 * @property integer $root_category
 * @property integer $child_category
 * @property string $name_cat
 * @property string $en_name_cat
 * @property string $title_cat
 * @property string $description
 * @property string $type_ads
 * @property string $img
 * @property integer $sort_index
 */
class BoardCat extends ActiveRecord {

    public static function tableName() {
        return  '{{%board_cat}}';
    }

    public function rules()
    {
        return [
            [['root_category', 'child_category', 'sort_index'], 'integer'],
            [['name_cat', 'en_name_cat', 'title_cat', 'description', 'img', 'sort_index'], 'required'],
            [['type_ads'], 'string'],
            [['name_cat', 'en_name_cat', 'description', 'img'], 'string', 'max' => 255],
            [['title_cat'], 'string', 'max' => 64],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'root_category' => Yii::t('app', 'Root Category'),
            'child_category' => Yii::t('app', 'Child Category'),
            'name_cat' => Yii::t('app', 'Name Cat'),
            'en_name_cat' => Yii::t('app', 'En Name Cat'),
            'title_cat' => Yii::t('app', 'Title Cat'),
            'description' => Yii::t('app', 'Description'),
            'type_ads' => Yii::t('app', 'Type Ads'),
            'img' => Yii::t('app', 'Img'),
            'sort_index' => Yii::t('app', 'Sort Index'),
        ];
    }

    public function getBoards() {
        return $this->hasMany(Board::className(), ['id_category' => 'id']);
    }
}