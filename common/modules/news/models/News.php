<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $text
 * @property string $date
 * @property string $author
 * @property string $img
 * @property string $title
 * @property string $short
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'date', 'author', 'img', 'title', 'short'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['author'], 'string', 'max' => 150],
            [['img'], 'string', 'max' => 250],
            [['title'], 'string', 'max' => 200],
            [['short'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'date' => 'Date',
            'author' => 'Author',
            'img' => 'Img',
            'title' => 'Title',
            'short' => 'Short',
        ];
    }
}
