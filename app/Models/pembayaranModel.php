<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pesanan_id', 'metode_pembayaran', 'jumlah', 'waktu_pembayaran'];

    public function prosesPembayaran($data)
    {
        $db = \Config\Database::connect();
        $db->transStart();
        $pesananModel = new \App\Models\PesananModel();
        $mejaModel = new \App\Models\MejaModel();

        $this->insert($data);

        $pesananModel->update($data['pesanan_id'], ['status' => 'selesai']);

        $pesanan = $pesananModel->find($data['pesanan_id']);
        $mejaId = $pesanan['meja_id'];

        $mejaModel->update($mejaId, ['status' => 'tersedia']);

        $db->transComplete();

        return $db->transStatus();
    }

    public function getAll()
    {
        return $this->select('pembayaran.id as pembayaran_id, pembayaran.jumlah as jumlah_dibayar, 
                              id_pesanan as pesanan_id, pesanan.total as total_tagihan, pembayaran.waktu_pembayaran, 
                              (pembayaran.jumlah - pesanan.total) as kembalian,
                              pelanggan.nama as nama_pelanggan, meja.nomor_meja')
            ->join('pesanan', 'id_pesanan = pembayaran.pesanan_id')          // Relasi ke tabel pesanan
            ->join('pelanggan', 'pelanggan.id = pesanan.pelanggan_id')       // Relasi ke tabel pelanggan
            ->join('meja', 'meja.id = pesanan.meja_id')                     // Relasi ke tabel meja
            ->findAll();
    }

    public function getDetail($id)
    {
        return $this->select('pembayaran.id as pembayaran_id, pembayaran.jumlah as jumlah_dibayar, 
                              id_pesanan as pesanan_id, pesanan.total as total_tagihan, pembayaran.waktu_pembayaran, 
                              (pembayaran.jumlah - pesanan.total) as kembalian,
                              pelanggan.nama as nama_pelanggan, meja.nomor_meja')
            ->join('pesanan', 'id_pesanan = pembayaran.pesanan_id')          // Relasi ke tabel pesanan
            ->join('pelanggan', 'pelanggan.id = pesanan.pelanggan_id')       // Relasi ke tabel pelanggan
            ->join('meja', 'meja.id = pesanan.meja_id')                   // Relasi ke tabel meja
            ->where('pembayaran.id', $id)
            ->first();
    }
}
