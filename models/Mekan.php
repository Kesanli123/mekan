<?php

namespace kouosl\Mekan\models;

use Yii;

/**
 * This is the model class for table "mekan".
 *
 * @property int $mekanID
 * @property string $mekanNumarası
 * @property string $bulunduguFakulte
 * @property string $demirbasListesi
 */
class Mekan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mekan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mekanNumarası', 'bulunduguFakulte', 'demirbasListesi'], 'required'],
            [['demirbasListesi'], 'string'],
            [['mekanNumarası', 'bulunduguFakulte'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mekanID' => 'Mekan ID',
            'mekanNumarası' => 'Mekan Numarası',
            'bulunduguFakulte' => 'Bulundugu Fakulte',
            'demirbasListesi' => 'Demirbas Listesi',
        ];
    }
}
