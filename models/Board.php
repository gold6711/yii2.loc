<?php
namespace app\models;
use yii\db\ActiveRecord;
class Board extends ActiveRecord {
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
    public static function tableName() {
        return  '{{%board}}';
    }


    public function rules()
    {
        return [
            [['id_category', 'autor', 'title', 'email'], 'required'],
            //'city', 'city_id', 'url', 'contacts', 'text', 'price', 'price_new', 'video', 'tags', 'date_add', 'coords'
            [['id_category', 'user_id', 'city_id', 'click', 'price', 'price_new', 'hits', 'checkbox_top', 'send_notice_vip_sms', 'checkbox_select', 'send_notice_select_sms', 'send_notice_day', 'time_delete'], 'integer'],
            [['type', 'contacts', 'text', 'old_mess', 'checked'], 'string'],
            [['top_time', 'select_time', 'date_add'], 'safe'],
            [['autor', 'title', 'email', 'city', 'url', 'tags', 'coords'], 'string', 'max' => 255],
            [['video'], 'string', 'max' => 128],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'user_id' => 'User ID',
            'type' => 'Type',
            'autor' => 'Autor',
            'title' => 'Title',
            'email' => 'Email',
            'city' => 'City',
            'city_id' => 'City ID',
            'url' => 'Url',
            'click' => 'Click',
            'contacts' => 'Contacts',
            'text' => 'Text',
            'price' => 'Price',
            'price_new' => 'Price New',
            'video' => 'Video',
            'hits' => 'Hits',
            'old_mess' => 'Old Mess',
            'checked' => 'Checked',
            'checkbox_top' => 'Checkbox Top',
            'top_time' => 'Top Time',
            'send_notice_vip_sms' => 'Send Notice Vip Sms',
            'checkbox_select' => 'Checkbox Select',
            'select_time' => 'Select Time',
            'send_notice_select_sms' => 'Send Notice Select Sms',
            'tags' => 'Tags',
            'send_notice_day' => 'Send Notice Day',
            'time_delete' => 'Time Delete',
            'date_add' => 'Date Add',
            'coords' => 'Coords',
        ];
    }

    /**
     * This join with entity BoardCat
     * @return \yii\db\ActiveQuery
     */
    public function getBoardCat() {
        return $this->hasOne(BoardCat::className(), ['id' => 'id_category']);
    }
}