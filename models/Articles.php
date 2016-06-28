<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $meta_d
 * @property string $meta_k
 * @property string $data
 * @property string $description
 * @property string $text
 * @property string $author
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'meta_d', 'meta_k', 'data', 'description', 'text', 'author'], 'required'],
            [['data'], 'safe'],
            [['description', 'text'], 'string'],
            [['title', 'meta_d', 'meta_k', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'meta_d' => 'Meta D',
            'meta_k' => 'Meta K',
            'data' => 'Data',
            'description' => 'Description',
            'text' => 'Text',
            'author' => 'Author',
        ];
    }
}
