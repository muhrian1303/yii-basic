<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property int $id_pembeli
 * @property string $nama
 * @property string $jns_kelamin
 * @property string $alamat
 * @property string $kota
 * @property string $tgl_lahir
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembeli', 'nama', 'jns_kelamin', 'alamat', 'kota', 'tgl_lahir'], 'required'],
            [['id_pembeli'], 'integer'],
            [['jns_kelamin'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'alamat', 'kota'], 'string', 'max' => 100],
            [['id_pembeli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembeli' => 'Id Pembeli',
            'nama' => 'Nama',
            'jns_kelamin' => 'Jns Kelamin',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'tgl_lahir' => 'Tgl Lahir',
        ];
    }
}
