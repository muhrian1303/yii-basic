<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suplier".
 *
 * @property int $id_suplier
 * @property string $nama
 * @property string $alamat
 * @property string $kota
 */
class Suplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_suplier', 'nama', 'alamat', 'kota'], 'required'],
            [['id_suplier'], 'integer'],
            [['nama', 'alamat', 'kota'], 'string', 'max' => 100],
            [['id_suplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_suplier' => 'Id Suplier',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
        ];
    }
}
