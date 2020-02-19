<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $title
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['title'], 'trim'],
            [['title'], 'unicValidation'],
            [['title'], 'firstAnd'],
        ];
    }

    public function unicValidation($attribute, $message)
    {
        $model = self::find()->where(['title'=> $this->title])->count();
        if ($model > 0) {
            $this->addError($attribute, 'Тег уже имеется');
        }
    }

    //public function firstAnd()

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
