<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\web\UploadedForm;

/**
 * This is the model class for table "encyclopedia".
 *
 * @property integer $id_pedia
 * @property string $name_pedia
 * @property string $category
 * @property string $article
 * @property double $ph_pedia
 * @property double $temp_pedia
 */
class Encyclopedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encyclopedia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_pedia', 'category', 'article', 'ph_pedia', 'temp_pedia'], 'required'],
            [['article'], 'string'],
            [['ph_pedia', 'temp_pedia'], 'number'],
            [['gbr_ency'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png'],
            [['name_pedia', 'category'], 'string', 'max' => 250]
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedia' => Yii::t('app', 'Id Pedia'),
            'name_pedia' => Yii::t('app', 'Name Pedia'),
            'category' => Yii::t('app', 'Category'),
            'article' => Yii::t('app', 'Article'),
            'ph_pedia' => Yii::t('app', 'Ph Pedia'),
            'temp_pedia' => Yii::t('app', 'Temp Pedia'),
            'gbr_ency' => Yii::t('app', 'Gbr Ency'),
        ];
    }
}
