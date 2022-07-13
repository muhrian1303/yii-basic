<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $id_pesanan
 * @property int $id_pelanggan
 * @property int $id_barang
 * @property string $tgl_pesan
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pesanan', 'id_pelanggan', 'id_barang', 'tgl_pesan'], 'required'],
            [['id_pesanan', 'id_pelanggan', 'id_barang'], 'integer'],
            [['tgl_pesan'], 'safe'],
            [['id_pesanan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesanan' => 'Id Pesanan',
            'id_pelanggan' => 'Id Pelanggan',
            'id_barang' => 'Id Barang',
            'tgl_pesan' => 'Tgl Pesan',
        ];
    }

    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }

    public function getPembeli()
    {
        return $this->hasOne(Pembeli::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
