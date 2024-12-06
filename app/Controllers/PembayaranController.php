<?php

namespace App\Controllers;

use App\Models\ItemPesananModel;
use App\Models\PembayaranModel;
use App\Models\PesananModel;

class PembayaranController extends BaseController
{
    public function index()
    {
        $model = new PembayaranModel();
        $itemModel = new \App\Models\ItemPesananModel();
        $data = $model->getAll();

        foreach ($data as &$d) {
            $d['items'] = $itemModel->getItemPesananByPesananId($d['pesanan_id']);
        }

        return view('pembayaran/index', ['data' => $data]);
    }

    public function create()
    {
        return view('pembayaran/create');
    }

    public function store()
    {
        $pembayaranModel = new PembayaranModel();

        $data = [
            'pesanan_id' => $this->request->getPost('pesanan_id'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        $res = $pembayaranModel->prosesPembayaran($data);

        if ($res) {
            return redirect()->to('/pembayaran');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat proses pembayaran');
        }
    }

    public function detail($id)
    {
        $model = new PembayaranModel();
        $itemModel = new ItemPesananModel();
        $data = $model->getDetail($id);
        $data['detail'] = $itemModel->getItemPesananByPesananId($data['pesanan_id']);


        return view('/pembayaran/detail', ['items' => $data]);
    }
}
