<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id_news
 * @property string $Judul
 * @property string $Konten
 * @property int $Status
 * @property string $Tanggal_Pembuatan
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
            [['Judul', 'Konten', 'Status', 'Tanggal_Pembuatan'], 'required'],
            [['Judul', 'Konten', 'Tanggal_Pembuatan'], 'string'],
            [['Status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_news' => Yii::t('app', 'Id News'),
            'Judul' => Yii::t('app', 'Judul'),
            'Konten' => Yii::t('app', 'Konten'),
            'Status' => Yii::t('app', 'Status'),
            'Tanggal_Pembuatan' => Yii::t('app', 'Tanggal Pembuatan'),
        ];
    }
}
