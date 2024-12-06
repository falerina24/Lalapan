<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\MejaModel;
use App\Models\PelangganModel;
use App\Models\ItemPesananModel;
use App\Models\ProdukModel;

class PesananController extends BaseController
{
    public function index()
    {

        $pesananModel = new PesananModel();
        $itemPesananModel = new ItemPesananModel();

        $pesananList = $pesananModel->getAllPesanan();

        foreach ($pesananList as &$pesanan) {
            $pesanan['detail'] = $itemPesananModel->getItemPesananByPesananId($pesanan['id_pesanan']);
        }

        return view('pesanan/index', ['items' => $pesananList]);
    }

    public function create()
    {
        $mejaModel = new MejaModel();
        $pelangganModel = new PelangganModel();
        $produkModel = new ProdukModel();

        $data['meja'] = $mejaModel->where('status', 'tersedia')->findAll();
        $data['pelanggan'] = $pelangganModel->findAll();
        $data['produk'] = $produkModel->findAll();
        return view('pesanan/create', $data);
    }

    public function store()
    {
        $model = new \App\Models\PesananModel();

        $meja = $this->request->getPost('meja_id');
        $produk = $this->request->getPost('produk_id');
        $kuantitas = $this->request->getPost('kuantitas');

        $convertMeja = (int)$meja;
        $pelanggan = [
            'nama' => $this->request->getPost('nama'),
        ];
        $pesanan = [
            'meja_id' => $convertMeja,
            'status' => 'pending',
        ];

        $detail = [];
        foreach ($produk as $produk_id) {
            if (!empty($kuantitas[$produk_id])) {
                $convertProduk = (int)$produk_id;
                $convertKuantitas = (int)$kuantitas[$produk_id];

                $detail[] = [
                    'produk_id' => $convertProduk,
                    'kuantitas' => $convertKuantitas,
                ];
            }
        }

        $dataPesanan = $model->createPesanan($pesanan, $detail, $pelanggan);

        // dd($dataPesanan);

        return redirect()->to('/pesanan');
    }
    public function detail($id)
    {
        $pesananModel = new PesananModel();
        $itemPesananModel = new ItemPesananModel();

        $dataDetail = $pesananModel->getPesanan($id);
        $dataDetail['detail'] = $itemPesananModel->getItemPesananByPesananId($id);
        // dd($dataDetail);
        return view('pesanan/detail', ['items' => $dataDetail]);
    }


    public function edit($id)
    {
        $model = new PesananModel();
        $data['pesanan'] = $model->find($id);
        return view('pesanan/edit', $data);
    }

    public function update($id)
    {
        $model = new PesananModel();
        $model->update($id, [
            'status' => $this->request->getPost('status')
        ]);
        return redirect()->to('/pesanan');
    }

    public function delete($id)
    {
        $model = new PesananModel();
        $model->delete($id);
        return redirect()->to('/pesanan');
    }
}
