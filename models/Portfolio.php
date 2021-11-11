<?php

namespace app\models;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $title
 * @property int|null $cost
 * @property int|null $description
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['user_id' => 'id'])->select('username')->scalar();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'cost' => 'Cost',
            'description' => 'Description',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PortfolioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PortfolioQuery(get_called_class());
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->user_id = \Yii::$app->user->id;
            }
            return true;
        }
        return false;
    }
}
