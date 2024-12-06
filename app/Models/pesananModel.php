<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['meja_id', 'pelanggan_id', 'waktu_pesanan', 'status'];

    public function createPesanan($dataPesanan, $dataItems, $dataPelanggan)
    {
        $db = \Config\Database::connect();
        $db->transStart();
        $pelangganModel = new \App\Models\PelangganModel();

        $pelangganId = $pelangganModel->insert($dataPelanggan);
        $dataPesanan['pelanggan_id'] = $pelangganId;
        $pesananId = $this->insert($dataPesanan, true);

        $itemPesananModel = new \App\Models\ItemPesananModel();
        foreach ($dataItems as $item) {
            $produkModel = new \App\Models\ProdukModel();
            $produk = $produkModel->find($item['produk_id']);


            $hargaItem = $produk['harga'] * $item['kuantitas'];

            $itemPesananData = [
                'id_pesanan' => $pesananId,
                'produk_id'  => $item['produk_id'],
                'harga'      => $hargaItem,
                'kuantitas'  => $item['kuantitas']
            ];

            $itemPesananModel->insert($itemPesananData);
        }

        $totalHarga = $itemPesananModel->selectSum('harga')
            ->where('id_pesanan', $pesananId)
            ->first()['harga'];


        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $builder->where('id', $pesananId);
        $builder->update(['total' => $totalHarga]);

        $meja = $db->table('meja');
        $meja->where('id', $dataPesanan['meja_id']);
        $meja->update(['status' => 'terisi']);

        $db->transComplete();

        if ($db->transStatus() === false) {
            return false;
        }

        return $pesananId;
    }

    public function getAllPesanan()
    {
        return $this->select('id_pesanan as id_pesanan, pesanan.waktu_pesanan, pesanan.total, 
                          pelanggan.nama, meja.nomor_meja, pesanan.status')
            ->join('pelanggan', 'pelanggan.id = pesanan.pelanggan_id')
            ->join('meja', 'meja.id = pesanan.meja_id')
            ->findAll();
    }

    public function getPesanan($id)
    {
        return $this->select('id_pesanan as id_pesanan, pesanan.status, pesanan.total, pesanan.waktu_pesanan,
                            meja.nomor_meja, pelanggan.nama')
            ->join('meja', 'meja.id = pesanan.meja_id')
            ->join('pelanggan', 'pelanggan.id = pesanan.pelanggan_id')
            ->where('id_pesanan', $id)
            ->first();
    }
}
